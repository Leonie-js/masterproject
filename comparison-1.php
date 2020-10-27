<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.css">
	<link rel="stylesheet" type="text/css" href="https://codemirror.net/addon/lint/lint.css">
	<link rel="stylesheet" type="text/css" href="https://codemirror.net/theme/monokai.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.js"></script>
	<?php 
		$language = $_GET["language"];
		$userID = $_GET["userID"];

		if ($language == 'dutch'){
	?>
			<script src="jshint.js"></script>
	<?php 
		}else if ($language == 'english'){ 
	?>
			<script src="https://ajax.aspnetcdn.com/ajax/jshint/r07/jshint.js"></script>
	<?php
		}
	?>
	<script src="https://codemirror.net/mode/javascript/javascript.js"></script>
	<script src="https://codemirror.net/addon/lint/lint.js"></script>
	<script src="https://codemirror.net/addon/lint/javascript-lint.js"></script>
	<script src="script.js"></script>
	<title>Learn Javascript in Dutch!</title>
</head>
<body id="comparison">
	<h1> Module 1 </h1>

		<?php 
			if ($language == "dutch"){
		?>

		<div class="codeeditor2">
			<h1>Vergelijken</h1>
			<p>Hier kun je je antwoord met de juiste oplossing vergelijken. Als jou antwoord klopt kun je op de knop 'Ga verder' drukken. Mocht je dingen willen veranderen dan kun je dat in de bovenste block (jou eigen code) doen en dan op 'Code aanpassen' drukken. Wil je verder met het goede antwoord en dit overnemen? Druk dan op de knop 'Code overnemen'.</p>

			<h2>Jouw code</h2>
			
			<textarea id="codeinput1"></textarea>

			<?php echo "<a id='opdrachtklaar' href='/module-2?userID=".$userID."&language=".$language."'>Ga verder</a>"?>

			<input id="codechange" type="submit" value='Code aanpassen'/>

			<input id="codetakeover" type="submit" value="Code overnemen"/>

			<h2>Juiste oplossing</h2>

			<textarea id="codeinput2"></textarea>

			

		</div>			

		<?php
			}else if ($language == "english"){ 
		?>
		<div class="codeeditor2">
			<h1>Vergelijken</h1>
			<p>Hier kun je je antwoord met de juiste oplossing vergelijken. Als jou antwoord klopt kun je op de knop 'Ga verder' drukken. Mocht je dingen willen veranderen dan kun je dat in de bovenste block (jou eigen code) doen en dan op 'Code aanpassen' drukken. Wil je verder met het goede antwoord en dit overnemen? Druk dan op de knop 'Code overnemen'.</p>
			
			<textarea id="codeinput1"></textarea>

			<textarea id="codeinput2"></textarea>

			<?php echo "<a id='opdrachtklaar' href='/module-2?userID=".$userID."&language=".$language."'>Ga verder</a>"?>

			<input id="codechange" type="submit" value='Code aanpassen'/>

			<input id="codetakover" type="submit" value="Code overnemen"/>

		</div>
		<?php
			}
		?>
		
		

		<!-- <h1>Code output</h1>
		<div id="voorbeeld" ></div> -->
	</div>

</body>
</html>