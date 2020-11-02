<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.css">
	<link rel="stylesheet" type="text/css" href="https://codemirror.net/addon/lint/lint.css">
	<link rel="stylesheet" type="text/css" href="monokaistyle.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.js"></script>
	<script src="https://codemirror.net/mode/javascript/javascript.js"></script>
	<script src="script.js"></script>
	<title>Learn Javascript in Dutch!</title>
</head>
<body id="comparison">
	<header>
	<?php 
		$language = $_GET["language"];
		$userID = $_GET["userID"];

	echo "<a class='navlink' href='/home?userID=".$userID."&language=".$language."'>Home</a>"?>
	
	

	<?php echo "<a id='helpbutton' class='navlink' href='/help.php?userID=".$userID."&language=".$language."'>Stop</a>"?>
</header><footer>

<h1> Module 3 (<?php echo $userID; ?>) </h1>
		<?php 
			if ($language == "dutch"){
		?>

		<div class="codeeditor2">
			<h1>Code vergelijken</h1>
			<p>Hier kun je je antwoord met de juiste oplossing vergelijken. Dit is de laatste opdracht dus je kunt nu uitloggen. Hieronder kun je nog wel het goede antwoord zien.</p>

			<h2>Jouw code</h2>
			
			<textarea id="codeinput1"></textarea>

			<?php echo "<a id='opdrachtklaar' class='navlink' href='/'>Uitloggen</a>"?>

			<h2>Juiste oplossing</h2>

			<textarea id="codeinput2"></textarea>

			<div style="display: none;">
			<div id="klok">HIER KOMT DE TIJD</div>
				<div id="feestTijdKnop">HIER KOMT HET BERICHT</div>
				<div id="clock">HIER KOMT DE TIJD</div>
			<div id="partyButton">HIER KOMT HET BERICHT</div>
				</div>

		</div>			

		<?php
			}else if ($language == "english"){ 
		?>
		<div class="codeeditor2">
			<h1>Compare code</h1>
			<p>Here you can find the right answer. This was the final exercise so you can now logout. If you want you can look at the right answer below.</p>
			
			<textarea id="codeinput1"></textarea>

			<?php echo "<a id='opdrachtklaar' class='navlink' href='/'>Logout</a>"?>

			<textarea id="codeinput2"></textarea>

			<div style="display: none;">
			<div id="clock">HIER KOMT DE TIJD</div>
			<div id="partyButton">HIER KOMT HET BERICHT</div>
			<div id="klok">HIER KOMT DE TIJD</div>
				<div id="feestTijdKnop">HIER KOMT HET BERICHT</div>
			</div>
		</div>
		<?php
			}
		?>
		
		

		<!-- <h1>Code output</h1>
		<div id="voorbeeld" ></div> -->
	</div>
</footer>
</body>
</html>