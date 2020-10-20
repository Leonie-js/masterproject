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
	<h1> Module 3 </h1>

	<div class="codeeditor">
		<?php 
			if ($language == "dutch"){
		?>
			<h1>Code input</h1>
			<p> Voeg de volgende acties toe aan de code.</p>
			<ul>
				<li>Make de functie <b>laatActueleTijdZien</b> en zet de volgende acties in de functie: <ul>
					<li>Voeg de variabele <b>klok</b> toe en zet de waarde het element met het id 'klok'</li>
					<li>Zorg ervoor dat de variabele <b>uren</b> de uren krijg van de Datum() functie.</li>
					<li>Zorg ervoor dat de nieuwe variable <b>minuten</b> de actuele minuten van de tijd krijgt met de Datum() functie.</li>
					<li>Zorg ervoor dat de nieuwe variable <b>seconden</b> de actuele seconden van de tijd krijgt met de Datum() functie.</li>
					<li>Zorg er ook nog voor dat als <b>minuten</b> klener is dan 10 <b>minuten</b> "0" + minuten wordt.</li>
					<li>Zorg er ook nog voor dat als <b>seconden</b> klener is dan 10 <b>minuten</b> "0" + seconden wordt.</li>
					<li>Maak een nieuwe variabele <b>klokTijd</b> en zet de waarde naar <b>uren</b> + ':' + <b>minuten</b> + ':' + <b>seconden</b></li>
					<li>Zet als laatste de inHTML van <b>klok</b> naar de <b>klokTijd</b></li>
				</ul></li>
				<li>Maak de nieuwe variabele <b>feestKnop</b> en vind het element met het id 'feestTijdKnop'</li>
				<li>Maak de functie <b>feestEvent</b> en zet de vergelijking met de variable <b>feest</b> in de functie</li>
				<li>Pas de vergelijking aan zodat als <b>feest</b> minder dan 0 is <b>feest</b> de actuele uren krijgt van de Datum() functie. Anders moet <b>feest</b> -1 worden. </li>
				<li>Pas de vergelijking aan dat in plaat van de variable <b>bericht</b> de teksten worden gezet naar de inHTML van <b>feestKnop</b></li>
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