document.addEventListener('DOMContentLoaded', function(){ 

	var login = document.getElementById("login");

	if(login){
		var button = document.getElementById("submitlogin");

		button.addEventListener('click', event => {
			event.preventDefault();
			var username = document.getElementsByName("userID")[0].value;
			var password = document.getElementsByName("password")[0].value;

			if (username && password){
				sendlogin();
			} else {
				window.alert("Please enter login details");
			}
		});
	}

	var exercises = document.getElementsByClassName('exercise');

	if (exercises){

		var url = new URL(window.location.href);
		var userLanguage = url.searchParams.get("language");

		for (var i =  0; i < exercises.length; i++) {
			var exercise = exercises[i];
			var exerciseid = exercise.id;
			var inputid = exerciseid.substring(exerciseid.length-3, exerciseid.length);
			
			exercise.addEventListener('click', event => {
				exercise = event.srcElement;
				var parent = exercise.parentElement.querySelector('code');
				var children = parent.childNodes.length;
				var childrenInput = 0;
				var labels = parent.getElementsByTagName('label').length;
				exerciseid = event.srcElement.id;
				inputid = exerciseid.substring(exerciseid.length-3, exerciseid.length);
				event.preventDefault();

				if (labels > 0){
					var c = labels - 1;
					for (var b = 0; b < labels; b++) {
						parent.getElementsByTagName('label')[c].remove();
						c --;
					}	
				}

				for (var d = 0; d < children; d++) {
					if(parent.childNodes[d].nodeName == 'INPUT'){
			            childrenInput++;
			        }	
				}

				childrenInput++;

				var rightanswers= 0;

				for (var j = 1; j < childrenInput; j++) {
					var input = document.getElementById(inputid + '-' + j);
					var correctAnswer = input.dataset.answer;
					var givenAnswer = input.value;
					var errorLabel = document.createElement('label');
					
					if (givenAnswer == correctAnswer){
						rightanswers++;
					} else {
						if (userLanguage == 'english'){
							var errorText = document.createTextNode('this is incorrect');
						} else {
							var errorText = document.createTextNode('dit klopt niet');
						}
						
						errorLabel.appendChild(errorText);
						input.after(errorLabel);
					}
				}

				childrenInput--;

				if(rightanswers == childrenInput){
					var goodLabel = document.createElement('label');
					if (userLanguage == 'english') {
						goodLabel.appendChild(document.createTextNode('answer is correct'));
					} else {
						goodLabel.appendChild(document.createTextNode('antwoord is goed'));
					}
					
					exercise.after(goodLabel);
					var selectorid = '.output-' + inputid;
					var exampleoutput = document.querySelector(selectorid);

					if (exampleoutput) {
						var codeoutput = exampleoutput.dataset.code;

						var script = document.createElement("script");
						script.innerHTML = codeoutput;
						$("head").append(script);

					}
				}
			});
		}
		
	}

	var codemirror = document.getElementById("codemirror");

	if (codemirror){

		var url = new URL(window.location.href);
		var userID = url.searchParams.get("userID");
		var userLanguage = url.searchParams.get("language");

		var modulename = window.location.pathname;
		var moduleID = modulename.substr(modulename.length - 1);

		
		var editor = CodeMirror.fromTextArea(document.getElementById('codeinput'), {
			mode: "javascript",
			lineNumbers: true,
			indentWithTabs: true,
			// gutters: ["CodeMirror-lint-markers"],
			// lint:true,
			theme: 'monokai'
		});
		editor.save();
	

		loadCode();

		var code = '';
		var	excode = '';

		// $('#ex1').change(function(){

		// 	ex = $('#ex1').val();
		

		// 	excode = 'document.getElementById(\"box\").innerHTML = \"<p>id=\'box\'</p>' + ex + '\";'
		// 	$('script').remove();
		// 	$('<script>').html(excode + translatedcode).appendTo('head');
		// })

		document.getElementById('checkcode').onclick = function(){
			console.log('here3');
			code = getCode(editor);

			if (userLanguage == "dutch"){
				console.log('here2');
				translateCode(code, userID, moduleID, userLanguage);
			} else if (userLanguage == "english"){
				checkCode(code, userID,moduleID, userLanguage);
			}
			
		};

		function loadCode(){
			var filename = userID +'-'+ moduleID +'.js';
			$.ajax({
				type: "GET",
				url: filename,
				success: function(success){
					console.log('current');
					if (userLanguage == "dutch"){
						translateCodeBack(success, editor);
					} else {
						editor.getDoc().setValue(success);
					}
				},
				error: function(error){
					if (moduleID !== 1){
						moduleID--;
						loadCode();
						moduleID++;
					}
					console.log('previous');
				}
			});
		}

		
	}

	var comparison = document.getElementById("comparison");

	if (comparison){
		var url = new URL(window.location.href);
		var userID = url.searchParams.get("userID");
		var userLanguage = url.searchParams.get("language");

		var modulename = window.location.pathname;
		var moduleID = modulename.substr(modulename.length - 1);

		
		var editor1 = CodeMirror.fromTextArea(document.getElementById('codeinput1'), {
			mode: "javascript",
			lineNumbers: true,
			indentWithTabs: true,
			theme: 'monokai'
		});
		editor1.save();

		var editor2 = CodeMirror.fromTextArea(document.getElementById('codeinput2'), {
			mode: "javascript",
			lineNumbers: true,
			indentWithTabs: true,
			readOnly: true,
			theme: 'monokai'
		});
		editor2.save();

		var filename = userID +'-'+ moduleID +'.js';
		console.log(filename);
		$.ajax({
			type: "GET",
			url: filename,
			dataType: 'script',
			success: function(success){
				var uricode = encodeURIComponent(success);

				var backup = userID +'-'+ moduleID +'-backup.js'

				   $.get(backup)
				    .done(function() { 
				        // exists code 
				    }).fail(function() { 
				        $.ajax({
							type: "POST",
							url: 'codesave.php',
							data: "attempt=" + uricode + '&userID=' + userID + '&moduleID=' + moduleID + '&finished=0&backup=1',
							success: function(success2)
							{
								console.log('saved');
								console.log(success2)
							}
						});
				    })
					
				if (userLanguage == "dutch"){
					translateCodeBack(success, editor1);
				} else {
					editor1.getDoc().setValue(success);
				}
			},
			error: function(error){
				console.log('error');
			}
		});

		
		if (userLanguage == "dutch"){
			var filename2 = 'module-'+ moduleID +'.js';
		} else {
			var filename2 = 'module-'+ moduleID +'-en.js';
		}
		console.log(filename2);
		$.ajax({
			type: "GET",
			url: filename2,
			dataType: 'script',
			success: function(success){
				if (userLanguage == "dutch"){
					translateCodeBack(success, editor2);
				} else {
					editor2.getDoc().setValue(success);
				}
			},
			error: function(error){
				console.log('error');
			}
		});

		$('#codechange').click(function(event){
			event.preventDefault();

			var code = getCode(editor2);
			saveCode(code, userID, moduleID, userLanguage);
		});

		$('#codetakeover').click(function(event){
			event.preventDefault();

			var code = getCode(editor2);
			editor1.getDoc().setValue(code);

			saveCode(code, userID, moduleID, userLanguage);
		});

	}

	var stop = document.getElementById("stopform");

	if (stop){
		$('#submithelp').click(function(event){
			event.preventDefault();

			var reason = $('select').val();
			var more = $('textarea').val();
			var url = new URL(window.location.href);
			var userID = url.searchParams.get("userID");

			$.ajax({
				type: "POST",
				url: 'stop.php',
				data: "reason=" + reason+ '&userID=' + userID + '&more=' + more,
				success: function(success)
				{
					console.log(success);
					stop.style.display = 'none';
					var homeurl = document.getElementById("homeurl");
					homeurl.style.display = 'block';

				}
			});
		});
	}

	var nav = $('.navlink');
	if (nav){

		nav.click(function(event){
			var urllink = $(this).attr('href');
			var urluro = encodeURIComponent(urllink);
			var url = new URL(window.location.href);
			var userID = url.searchParams.get("userID");

			console.log('update');

			$.ajax({
				type: "POST",
				url: 'navtimes.php',
				data: "userID=" + userID + '&urllink=' + urluro,
				success: function(success)
				{
					console.log(success);
				}
			});
		});
	}


}, false);

function translateCodeBack(code, editor){

	getJStext()
	.then(function(result){
		
		for (const value in result) {

			if (result[value] === undefined || result[value] === ''){
				delete value;
			} else {
				//var word = result[value].slice(0,-1);
				if (code.includes(value)){
					var wordlength = occurrences(code, value);
					for (var i = wordlength; i > 0; i--) {
					 	code = code.replace(value, result[value]);
					}
				} 
			}		
		}
		editor.getDoc().setValue(code);				

	})
	.catch(function(error) {
		console.log(error);
	});
	
}

function getCode(editor){
	code = editor.getDoc().getValue();

	return code;
}

function occurrences(string, subString, allowOverlapping) {

    string += "";
    subString += "";
    if (subString.length <= 0) return (string.length + 1);

    var n = 0,
        pos = 0,
        step = allowOverlapping ? 1 : subString.length;

    while (true) {
        pos = string.indexOf(subString, pos);
        if (pos >= 0) {
            ++n;
            pos += step;
        } else break;
    }
    return n;
}

function translateCode(code, userID, moduleID, language){

	console.log('here');
	console.log(code);	

	getJStext()
	.then(function(result){

		var checkcode = false;

		for (const key in result) {

			if (result[key] === undefined || result[key] === ''){
				delete result[key];
			} else {
				//var word = result[key].slice(0,-1);
				if (code.includes(result[key])){
					var wordlength = occurrences(code, result[key]);
					for (var i = wordlength; i > 0; i--) {
					 	code = code.replace(result[key], key);
					}
					checkcode = true;
				} else if (code.toLowerCase().includes(result[key].toLowerCase())){
					console.log('bijna');
					checkcode = false;
					break;
				} else {
					checkcode = true;
				}
			}		
		}
		
		if(checkcode == true){
			checkCode(code, userID, moduleID, language);
		} else {

		}
		

	})
	.catch(function(error) {
		console.log(error);
	});
	
}

function checkCode(code, userID, moduleID, language){
	var source = [
	  code
	];
	var options = {
	};
	var predef = {
	};

	JSHINT(source, options, predef);

	var jshint = new Object();
	jshint = JSHINT.data();

	if ('errors' in jshint){
		console.log('there are errors');
		var errors = jshint.errors;
		var errorlength = jshint.errors.length;
		var nummer;

		if ($('#errors')){
			$('#errors').remove();
		}

		if (language == 'dutch'){

			var errorstring = '<div id="errors"><p>Er zijn error(s) gevonden. Kijk of je ze kan oplossen, als dit niet lukt ga door naar de volgende pagina.<ul>';

			for (var m = 0; m < errorlength; m++) {
				nummer = m + 1;
				errorstring += '<li>Error ' + nummer +'<br> Reden: ' + jshint.errors[m].reason 
				+ '<br> Bij letter: ' + jshint.errors[m].character + '</li>';
			}

			errorstring += '</ul></p></div>';

		} else {

			var errorstring = '<div id="errors"><p>There is/are error(s) found. Look if you can solve them, if not go to the next page.<ul>';

			for (var m = 0; m < errorlength; m++) {
				nummer = m + 1;
				errorstring += '<li>Error ' + nummer +'<br> Reason: ' + jshint.errors[m].reason 
				+ '<br> At character: ' + jshint.errors[m].character + '</li>';
			}

			errorstring += '</ul></p></div>';

		}

		$(errorstring).insertBefore("#codeinput");

		saveCode(code, userID, moduleID, language);
	} else {
		console.log('there are no errors');

		if ($('#errors')){
			$('#errors').remove();
		}
		saveCode(code, userID, moduleID, language);

	}
}

function saveCode(code, userID, moduleID, language){
	var uricode = encodeURIComponent(code);

	$.ajax({
		type: "POST",
		url: 'codesave.php',
		data: "attempt=" + uricode + '&userID=' + userID + '&moduleID=' + moduleID + '&finished=0',
		success: function(success)
		{
			console.log('saved');
			console.log(success)
		}
	});

	if (language == 'dutch'){
		alert('Je code is opgeslagen');
	} else {
		alert('Your code is saved');
	}

	var opdrachtklaar = document.getElementById("opdrachtklaar");

	if (opdrachtklaar){
		opdrachtklaar.style.display = 'inline-block';
	}


	var codeoutput = document.getElementById("codeoutput");

	if (codeoutput){
		displayCode(code);
	}			
}

function displayCode(code){
	var script = document.createElement("script");
	// script.type = "text/javascript";
	// script.src = userID +'-'+ moduleID +'.js';
	script.innerHTML = code;
	$("head").append(script);
	// $('script').remove();
	// $('<script>').html(code).appendTo('head');
}

function sendlogin(){
	
	var userID = document.getElementsByName("userID")[0].value;
	var password = document.getElementsByName("password")[0].value;

	if (userID && password){
		
		var input = document.getElementsByClassName("logininput");
		var formData = new FormData(); 

		for(var i=0; i<input.length; i++){
			formData.append(input[i].name, input[i].value);
		}

		var xmlHttp = new XMLHttpRequest();

		xmlHttp.onreadystatechange = function(){

			if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
				if (xmlHttp.responseText != "false"){
					var language = JSON.parse(xmlHttp.responseText)['language'];
					window.location.href = "/home?userID=" + userID + "&language=" + language;
				} else {
					alert("Your account details are not recognized. Please contact Leonie!")
					console.log(xmlHttp.responseText);
				}
			} 
		}
		xmlHttp.open("post", "login.php"); 
		xmlHttp.send(formData);

		var urllink = 'login';

		$.ajax({
			type: "POST",
			url: 'navtimes.php',
			data: "userID=" + userID + '&urllink=' + urllink,
			success: function(success)
			{
				console.log(success);
			}
		});

	} else {
		window.alert("please fill in all inputs");
		return false;
	}

	return false;
}

function getJStext(done){

	return new Promise(function(resolve, reject) {
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.onload = function(){
			var xmlText = this.responseText;

			var dict = xmlText
			.replace(/<!--[\s\S]*?-->/g, '')
			.split('\n')
			.map(function(x) { return x.split(';') })
			.reduce(function(acc, pair) { 
				acc[pair[0]] = pair[1]; 
				return acc; }, {});

			resolve(dict);
	};
	xmlHttp.onerror = reject;

	xmlHttp.open("GET", "jstext.txt", true);
	xmlHttp.send();
});
}
