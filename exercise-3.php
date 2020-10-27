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
				<li>Maak de functie <b>laatActueleTijdZien</b> en zet de volgende acties in de functie: <ul>
					<li>Voeg de variabele <b>klok</b> toe en zet de waarde het element met het id 'klok'</li>
					<li>Zorg ervoor dat de variabele <b>uren</b> de uren krijg van de Datum() functie.</li>
					<li>Zorg ervoor dat de nieuwe variable <b>minuten</b> de actuele minuten van de tijd krijgt met de Datum() functie.</li>
					<li>Zorg ervoor dat de nieuwe variable <b>seconden</b> de actuele seconden van de tijd krijgt met de Datum() functie.</li>
					<li>Zorg er ook nog voor dat als <b>minuten</b> klener is dan 10 <b>minuten</b> "0" + minuten wordt.</li>
					<li>Zorg er ook nog voor dat als <b>seconden</b> klener is dan 10 <b>minuten</b> "0" + seconden wordt.</li>
					<li>Maak een nieuwe variabele <b>klokTijd</b> en zet de waarde naar <b>uren</b> + ':' + <b>minuten</b> + ':' + <b>seconden</b></li>
					<li>Zet als laatste de inHTML van <b>klok</b> naar de <b>klokTijd</b></li>
				</ul></li>
				<li> Gebruik de setInterval functie zodat elke seconde (1000 miliseconden) de <b>laatActueleTijdZien</b> wordt uitgevoerd</li>
				<li>Maak de nieuwe variabele <b>feestKnop</b> en vind het element met het id 'feestTijdKnop'</li>
				<li>Maak de functie <b>feestEvent</b> en zet de vergelijking met de variable <b>feest</b> in de functie</li>
				<li>Pas de vergelijking aan zodat als <b>feest</b> minder dan 0 is <b>feest</b> de actuele uren krijgt van de Datum() functie. Anders moet <b>feest</b> -1 worden. </li>
				<li>Pas de vergelijking aan dat in plaat van de variable <b>bericht</b> de teksten worden gezet naar de inHTML van <b>feestKnop</b></li>
			</ul>

			<p>Als de code goed is zie je onderaan bij de Code Output de tijd voorbij lopen en kun je door de variabele <b>feest</b> de waarde -1 of 1 te geven boven aan de code de tekst veranderen naar 'Feest voorbij!' of 'Feest tijd!'</p>

			<textarea id="codeinput"></textarea>

		<input id="checkcode" type="submit" value="Check Code"/>

		

		<h1 id="codeoutput">Code output</h1>
			<div id="klok">HIER KOMT DE TIJD</div>
			<div id="feestTijdKnop">HIER KOMT HET BERICHT</div>
		</div>

		<?php echo "<a id='opdrachtklaar' href='/'>Je bent klaar klik hier om uit te loggen</a>"?>

		<?php
			}else if ($language == "english"){ 
		?>

			<h1>Code input</h1>
			<p> Add the following actions:</p>
			<ul>
				<li>Make the function <b>showCurrentTime</b> and put the following actions in the function:<ul>
					<li>Add the variable <b>clock</b> and put the value the element with the id 'clock'</li>
					<li>Make sure that the variable <b>hours</b> gets the hours from the Date() function.</li>
					<li>Make sure that the variable <b>minutes</b> gets the minutes from the Date() function.</li>
					<li>Make sure that the variable <b>seconds</b> gets the seconds from the Date() function.</li>
					<li>Also make sure that if <b>minutes</b> is smaller than 10, <b>minutes</b> will become "0" + minutes.</li>
					<li>Also make sure that if <b>seconds</b> is smaller than 10, <b>minutes</b> will become "0" + seconds.</li>
					<li>Declare the new variable <b>clockTime</b> and give it the value of <b>hours</b> + ':' + <b>minutes</b> + ':' + <b>seconds</b></li>
					<li>At last put in the innerHTML of <b>clock</b> the <b>clockTime</b></li>
				</ul></li>
				<li> Gebruik de setInterval functie zodat elke seconde (1000 miliseconden) de <b>showCurrentTime</b> wordt uitgevoerd</li>
				<li>Maak de nieuwe variabele <b>feestKnop</b> en vind het element met het id 'feestTijdKnop'</li>
				<li>Maak de functie <b>feestEvent</b> en zet de vergelijking met de variable <b>feest</b> in de functie</li>
				<li>Pas de vergelijking aan zodat als <b>feest</b> minder dan 0 is <b>feest</b> de actuele uren krijgt van de Datum() functie. Anders moet <b>feest</b> -1 worden. </li>
				<li>Pas de vergelijking aan dat in plaat van de variable <b>bericht</b> de teksten worden gezet naar de inHTML van <b>feestKnop</b></li>
			</ul>

			<p>Als de code goed is zie je onderaan bij de Code Output de tijd voorbij lopen en kun je door de variabele <b>feest</b> de waarde -1 of 1 te geven boven aan de code de tekst veranderen naar 'Feest voorbij!' of 'Feest tijd!'</p>

			<textarea id="codeinput"></textarea>

		<input id="checkcode" type="submit" value="Check Code"/>

		

		<h1 id="codeoutput">Code output</h1>
			<div id="clock">HIER KOMT DE TIJD</div>
			<div id="feestTijdKnop">HIER KOMT HET BERICHT</div>
		</div>

		<?php
			}
		?>

		
	</div>

</body>
</html>