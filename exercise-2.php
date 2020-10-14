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
<body id="codemirror">
	<h1> Module 1 </h1>

	<div class="codeeditor">
		<?php 
			if ($language == "dutch"){
		?>
			<h1>Code input</h1>
			<h2>Variablen</h2>
			<p> maak deze variabelen en zet de waardes op wat er tussen haakjes staat (als er niks staat geen waarde aan geven):</p>
			<ul>
				<li>opstaan (7)</li>
				<li>middag (12)</li>
				<li>middagEten (13)</li>
				<li>avond (18)</li>
				<li>feest</li>
				<li>MiddagDutje aan die de waarde heeft van middagEten plus 2</li>
			</ul>

		<?php
			}else if ($language == "english"){ 
		?>

		<?php
			}
		?>

		<textarea id="codeinput"></textarea>

		<input id="checkcode" type="submit" value="Check Code"/>

		<!-- <h1>Code output</h1>
		<div id="voorbeeld" ></div> -->
	</div>

</body>
</html>