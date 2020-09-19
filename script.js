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

	var modulestart = document.getElementById("module");

	if (modulestart){

		getJStext()
			.then(function(result){
				console.log(result);
			})
			.catch(function() {
				console.log("error occured");
			});

		var editor = CodeMirror.fromTextArea(document.getElementById('codeinput'), {
			mode: "javascript",
			lineNumbers: true,
			indentWithTabs: true,
			gutters: ["CodeMirror-lint-markers"],
			lint:true
		});
		editor.save();

		const object = {
			"vind": "get",
			"Met" : "By",
			"inHTML" : "innerHTML"
		};

		var ex;
		var excode = '';
		var code = '';
		var translatedcode;

		$('#ex1').change(function(){

			ex = $('#ex1').val();
			excode = '';

			excode = 'document.getElementById(\"box\").innerHTML = \"<p>id=\'box\'</p>' + ex + '\";'
			$('script').remove();
			$('<script>').html(excode + translatedcode).appendTo('head');
		})

		document.getElementById('checkcode').onclick = function(){
			getcode();
			savecode(code);
			translatecode(code);
			displayCode(translatedcode);
		};

		function getcode(){
			code = editor.getDoc().getValue();
		}

		function savecode(code){

			console.log(code);
			
			var url = new URL(window.location.href);
			var userID = url.searchParams.get("userID");
			console.log(userID);

			var modulename = window.location.pathname;
			var moduleID = modulename.substr(modulename.length - 1);
			console.log(moduleID);

			$.ajax({
				type: "POST",
				url: 'codesave.php',
				data: "attempt=" + code + '&userID=' + userID + '&moduleID=' + moduleID + '&finished=0',
				success: function(success)
				{
					console.log(success);
				}
			});
		}

		function translatecode(code){		
			for (const property in object) {
				translatedcode = code.replace(`${property}`, `${object[property]}`);
				code = translatedcode;
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
			.reduce(function(acc, pair) { acc[pair[0]] = pair[1]; return acc }, {});

			console.log(dict);

			resolve(dict);
	};
	xmlHttp.onerror = reject;

	xmlHttp.open("GET", "jstext.txt", true);
	xmlHttp.send();
});
}
