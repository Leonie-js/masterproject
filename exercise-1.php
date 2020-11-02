<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.css">
	<link rel="stylesheet" type="text/css" href="https://codemirror.net/addon/lint/lint.css">
	<link rel="stylesheet" type="text/css" href="monokaistyle.css">
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
			<script src="jshint-en.js"></script>
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
	<header>
	<?php echo "<a class='navlink' href='/home?userID=".$userID."&language=".$language."'>Home</a>"?>
	
	

	<?php echo "<a id='helpbutton' class='navlink' href='/help.php?userID=".$userID."&language=".$language."'>Stop</a>"?>
	</header>
	<footer>
	<h1> Module 1 (<?php echo $userID; ?>) </h1>
	<div class="codeeditor">

		<?php 
			if ($language == "dutch"){
		?>
			<h1>Opdracht</h1>
			<p> maak deze variabelen en zet de waardes op wat er tussen haakjes staat (als er niks staat geen waarde aan geven):</p>
			<ul>
				<li>opstaan (7)</li>
				<li>middag (12)</li>
				<li>middagEten (13)</li>
				<li>avond (18)</li>
				<li>feest</li>
				<li>middagDutje die dezelfde waarde heeft als middagEten plus 2</li>
			</ul>

			<textarea id="codeinput"></textarea>

			<input id="checkcode" type="submit" value="Check Code"/>

			<?php echo "<a id='opdrachtklaar' style='display: none;' class='navlink' href='/comparison-1?userID=".$userID."&language=".$language."'>Zie het goede antwoord</a>"?>

		<?php
			}else if ($language == "english"){ 
		?>
			<h1>Exercise</h1>
			<p> Declare these variables and put the value on the amount between the (), when there is no value declare the variable empty:</p>
			<ul>
				<li>wakeup (7)</li>
				<li>noon (12)</li>
				<li>lunchTime (13)</li>
				<li>evening (18)</li>
				<li>party</li>
				<li>napTime which has the same value as lunchTime plus 2</li>
			</ul>

			<textarea id="codeinput"></textarea>

			<input id="checkcode" type="submit" value="Check Code"/>

			<?php echo "<a id='opdrachtklaar' style='display: none;' class='navlink' href='/comparison-1?userID=".$userID."&language=".$language."'>See the right answer</a>"?>
		<?php
			}
		?>
		
		

		<!-- <h1>Code output</h1>
		<div id="voorbeeld" ></div> -->
	</div>
</footer>
</body>
</html>