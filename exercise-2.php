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
			<script src="jshint-en.js"></script>
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
	<header>
	<?php echo "<a class='navlink' href='/home?userID=".$userID."&language=".$language."'>Home</a>"?>
	
	

	<?php echo "<a id='helpbutton' class='navlink' href='/help.php?userID=".$userID."&language=".$language."'>Stop</a>"?>
	</header>
	<footer>
		<h1> Module 2 (<?php echo $userID; ?>) </h1>

	<div class="codeeditor">
		<?php 
			if ($language == "dutch"){
		?>
			<h1>Opdracht</h1>
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

			<textarea id="codeinput"></textarea>

			<input id="checkcode" type="submit" value="Check Code"/>

			<?php echo "<a id='opdrachtklaar' style='display: none;' class='navlink' href='/comparison-2?userID=".$userID."&language=".$language."'>Zie het goede antwoord</a>"?>

		<?php
			}else if ($language == "english"){ 
		?>
			<h1>Exercise</h1>
			<p> Add the following actions to the code.</p>
			<ul>
				<li>Add the variable <b>hours</b> with no value.</li>
				<li>Add the variable <b>message</b> with no value.</li>
				<li>Make sure the the (new) variable <b>partyMessage</b> will be changed because of the <b>party</b> variable.<br>
				When <b>party</b> is smaller than 0 the message has to be 'Party over!' otherwise it will be 'Party time!'.</li>
				<li>Make sure that when <b>hours</b> is the same as <b>party</b> the variable <b>message</b> will become 'Party!'.</li>
				<li>After this make sure that you check if <b>hours</b> is equal to <b>wakeup</b> (Wake up!), <b>lunchTime</b> (Hungry!) and <b>napTime</b> (Sleep tight!). And change <b>message</b> to the text in the (). </li>
				<li>Also make sure that the code will check that <b>hours</b> is smaller than <b>noon</b> (Good morning!) and if it is bigger or equal to <b>evening</b> (Good evening!) and add the text in the () to <b>message</b></li>
				<li> At last make sure that <b>message</b> gets the text 'Good afternoon' when all the comparisons above are false.</li>
			</ul>

			<textarea id="codeinput"></textarea>

			<input id="checkcode" type="submit" value="Check Code"/>

			<?php echo "<a id='opdrachtklaar' style='display: none;' class='navlink' href='/comparison-2?userID=".$userID."&language=".$language."'>See the right answer</a>"?>
		<?php
			}
		?>

		

		<!-- <h1>Code output</h1>
		<div id="voorbeeld" ></div> -->
	</div>
	</footer>

</body>
</html>