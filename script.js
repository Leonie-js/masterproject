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
				window.alert("please enter login details");
			}
		});
	}

	var exercises = document.getElementsByClassName('exercise');

	if (exercises){

		for (var i =  0; i < exercises.length; i++) {
			var exercise = exercises[i];
			var parent = exercise.parentElement.querySelector('code');
			var children = parent.childNodes.length;
			var childrenInput = 1;
			var exerciseid = exercise.id;
			var inputid = exerciseid.substring(exerciseid.length-3, exerciseid.length);


			for (var a = 0; a < children; a++) {
				if(parent.childNodes[a].nodeName == 'INPUT'){
		            childrenInput++;
		        }	
			}
			
			exercise.addEventListener('click', event => {
				exercise = event.srcElement;
				parent = exercise.parentElement.querySelector('code');
				var labels = parent.getElementsByTagName('label').length;
				exerciseid = event.srcElement.id;
				inputid = exerciseid.substring(exerciseid.length-3, exerciseid.length);
				event.preventDefault();

				console.log(labels);
				if (labels > 0){
					var c = labels - 1;
					for (var b = 0; b < labels; b++) {
						
						console.log(parent.getElementsByTagName('label'));
						console.log(c);
						parent.getElementsByTagName('label')[c].remove();
						c --;
					}	
				}

				for (var j = 1; j < childrenInput; j++) {
					var input = document.getElementById(inputid + '-' + j);
					var correctAnswer = input.dataset.answer;
					var givenAnswer = input.value;
					var errorLabel = document.createElement('label');
					
					if (givenAnswer == correctAnswer){
						var errorText = document.createTextNode("this is correct");
						errorLabel.appendChild(errorText);
						input.after(errorLabel);
					} else {
						var errorText = document.createTextNode('this is incorrect');
						errorLabel.appendChild(errorText);
						input.after(errorLabel);
					}
				}
			});
		}
		
	}

	var codemirror = document.getElementById("codemirror");

	if (codemirror){

		var url = new URL(window.location.href);
		var userID = url.searchParams.get("userID");

		var modulename = window.location.pathname;
		var moduleID = modulename.substr(modulename.length - 1);

		var editor = CodeMirror.fromTextArea(document.getElementById('codeinput'), {
			mode: "javascript",
			lineNumbers: true,
			indentWithTabs: true,
			gutters: ["CodeMirror-lint-markers"],
			lint:true,
			theme: 'monokai'
		});
		editor.save();

		loadCode();

		var voorbeeld = document.getElementById('voorbeeld');
		var excerciseCode = '';
		var code = '';
		var	excode = '';

		// $('#ex1').change(function(){

		// 	ex = $('#ex1').val();
		

		// 	excode = 'document.getElementById(\"box\").innerHTML = \"<p>id=\'box\'</p>' + ex + '\";'
		// 	$('script').remove();
		// 	$('<script>').html(excode + translatedcode).appendTo('head');
		// })

		document.getElementById('checkcode').onclick = function(){
			getCode();
			translateCode(code);
		};

		function loadCode(){
			var filename = userID +'-'+ moduleID +'.js';
			$.ajax({
				type: "GET",
				url: filename,
				success: function(success)
				{
					//console.log(success.toString());
					editor.getDoc().setValue(success);
				}
			});
		}

		function getCode(){
			code = editor.getDoc().getValue();
		}

		function translateCode(code){	

			getJStext()
			.then(function(result){

				for (const key in result) {

					if (result[key] === undefined || result[key] === ''){
						delete result[key];
					} else {
						var word = result[key].slice(0,-1);
						if (code.includes(word)){
							translatedcode = code.replace(word, key);
						} else if (code.toLowerCase().includes(word.toLowerCase())){
							console.log('bijna');
						}
					}		
				}

				var source = [
				  code
				];
				var options = {
				};
				var predef = {
				};

				JSHINT(source, options, predef);

				console.log(JSHINT.data());

				// console.log('its so gonna break');
				// JSHINT(code);
				// console.log(JSHINT(code));
				// console.log(JSHINT.data());

				saveCode(code);
			})
			.catch(function(error) {
				console.log(error);
			});
			
		}

		function saveCode(code){

			$.ajax({
				type: "POST",
				url: 'codesave.php',
				data: "attempt=" + code + '&userID=' + userID + '&moduleID=' + moduleID + '&finished=0',
				success: function(success)
				{
					//console.log(success);
				}
			});

			if (voorbeeld){
				displayCode(translatedcode);
			}			
		}

		

		function displayCode(code){
			$('script').remove();
			$('<script>').html(excode + code).appendTo('head');
		}
	}	
}, false);

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
					alert("Your account details are not recognized.")
					console.log(xmlHttp.responseText);
				}
			} 
		}
		xmlHttp.open("post", "login.php"); 
		xmlHttp.send(formData);

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
