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
			<script src="codemirrorjavascript.js"></script>
	<?php 
		}else if ($language == 'english'){ 
	?>
			<script src="https://ajax.aspnetcdn.com/ajax/jshint/r07/jshint.js"></script>
			<script src="https://codemirror.net/mode/javascript/javascript.js"></script>
	<?php
		}
	?>
	
	<script src="https://codemirror.net/addon/lint/lint.js"></script>
	<script src="https://codemirror.net/addon/lint/javascript-lint.js"></script>
	<script src="script.js"></script>
	<title>Learn Javascript in Dutch!</title>
</head>
<body id="codemirror">
	<h1> Module 2 </h1>

	<div class="codeeditor">
		<?php 
			if ($language == "dutch"){
		?>
			<h1>Code input</h1>
			<p> Voeg de volgende acties toe aan de code.</p>
			<ul>
				<li>Voeg de variabele <b>uren</b> toe zonder waarde.</li>
				<li>Voeg de variabele <b>bericht</b> toe zonder waarde.</li>
				<li>Zorg ervoor dat de (nieuwe) variabele <b>feesttekst</b> veranderd door de <b>feest</b> variabele.<br>
			Wanneer <b>feest</b> kleiner is dan 0 moet de tekst 'Feest voorbij!' worden en anders wordt het 'Feest tijd!'.</li>
				<li>Zorg ervoor dat als <b>uren</b> gelijk is aan <b>feest</b> het <b>bericht</b> de tekst 'Feestje!' wordt.</li>
				<li>Zorg daarna ervoor dat er wordt gekeken of <b>uren</b> gelijk is aan <b>opstaan</b> (Wordt wakker!), <b>middagEten</b> (Honger!) en <b>middagDutje</b> (Slaap lekker!). En verander <b>bericht</b> naar de tekst in de haakjes erachter. </li>
				<li>Zorg er ook nog voor dat er wordt gekeken of <b>uren</b> kleiner is dan <b>middag</b> (Goede morgen!) en groter of gelijk aan <b>avond</b> (Goede avond!)en voeg de tekst toe aan <b>bericht</b></li>
				<li>Zorg ervoor dat als laatste <b>bericht</b> de tekst 'Goede middag' krijgt als als deze vergelijkingen niet waar zijn. </li>
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