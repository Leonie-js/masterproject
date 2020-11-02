<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="script.js"></script>
	<title>Learn Javascript in Dutch!</title>
</head>
<body >
	<footer>

	<?php 
		$language = $_GET["language"];
		$userID = $_GET["userID"];

		if ($language == 'english'){

	?>
	
		<h1> Stopping with the participation </h1>
		<form id="stopform">
			<p>Please fill in this form to tell why you want to stop with the application</p>
			<label>Reason:</label>
			<select>
				<option value="hard">The application is too hard to use</option>
				<option value="long">It takes to long to finish all the modules</option>
				<option value="confusing">I don't understand the assignment</option>
				<option value="fun">I don't enjoy using the application</option>
				<option value="broken">The application doesn't work right (please add details below)</option>
			</select><br>

			<label>More to add:</label>
			<textarea></textarea>

			<p>Thank you for helping. After submitting the form you get the link to back to the home page and there you can log out.</p>

			<input type="submit" id="submithelp" value="Submit form">
		</form>

		<?php echo "<a id='homeurl' style='display:none;' href='/home.php?userID=".$userID."&language=".$language."'>Go to home</a>"?>

	<?php
		}else{

	?>

		<h1> Stoppen met de deelname </h1>
		<form id="stopform">
			<p>Vul alsjeblieft dit formulier in om te vertellen waarom je stopt met je deelname.</p>
			<label>Reden:</label>
			<select>
				<option value="hard">De web applicatie is te moeilijk om te gebruiken</option>
				<option value="long">Het duurt te lang om modules af te maken</option>
				<option value="confusing">I snap niet wat ik moet doen bij de opdrachten.</option>
				<option value="fun">Ik vind het niet leuk om met de applicatie te werken</option>
				<option value="broken">De applicatie werkt niet goed (voeg details hieronder toe)</option>
			</select><br>

			<label>Meer om toe te voegen:</label>
			<textarea></textarea>

			<p>Bedankt voor het helpen. Als je het formulier verstuur krijg je de link naar de home pagina waar je kunt uitloggen.</p>

			<input type="submit" id="submithelp" value="Verzend formulier">
		</form>

		<?php echo "<a id='homeurl' style='display:none;' href='/home.php?userID=".$userID."&language=".$language."'>Ga naar de home pagina</a>"?>
	<?php
	}
	?>
	</footer>
</body>
</html>