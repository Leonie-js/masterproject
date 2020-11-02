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
<body id="comparison">
	<header>
	<?php echo "<a class='navlink' href='/home?userID=".$userID."&language=".$language."'>Home</a>"?>
	
	

	<?php echo "<a id='helpbutton' class='navlink' href='/help.php?userID=".$userID."&language=".$language."'>Stop</a>"?>
</header> <footer>
<h1> Module 2 (<?php echo $userID; ?>) </h1>
		<?php 
			if ($language == "dutch"){
		?>

		<div class="codeeditor2">
			<h1>Code vergelijken</h1>
			<p>Hier kun je je antwoord met de juiste oplossing vergelijken. Als jou antwoord klopt kun je op de knop 'Ga verder' drukken. Mocht je dingen willen veranderen dan kun je dat in de bovenste block (jou eigen code) doen en dan op 'Code aanpassen' drukken. Wil je verder met het goede antwoord en dit overnemen? Druk dan op de knop 'Code overnemen'. Als je een van deze twee opties gebruikt moet je nog steeds op 'Ga verder' drukken om verder te gaan.</p>

			<h2>Jouw code</h2>
			
			<textarea id="codeinput1"></textarea>

			<?php echo "<a id='opdrachtklaar' class='navlink' href='/module-3.php?userID=".$userID."&language=".$language."'>Ga verder met Module 3</a>"?>

			<input id="codechange" type="submit" value='Code aanpassen'/>

			<input id="codetakeover" type="submit" value="Code overnemen"/>

			<h2>Juiste oplossing</h2>

			<textarea id="codeinput2"></textarea>

			

		</div>			

		<?php
			}else if ($language == "english"){ 
		?>
		<div class="codeeditor2">
			<h1>Compare code</h1>
			<p>Here you can find the right answer. If your code looks the same you can go to the next page. If you still want to change things you can do that by changing the code and then clicking on 'Change code'. If you want to use the code of the right answer you can use the 'Use right answer' button. After use one of these options you still have to click 'Go to the next page' to continue.</p>
			
			<textarea id="codeinput1"></textarea>

			<?php echo "<a id='opdrachtklaar' class='navlink' href='/module-3?userID=".$userID."&language=".$language."'>Start with Module 3</a>"?>

			<input id="codechange" type="submit" value='Change code'/>

			<input id="codetakover" type="submit" value="Use right answer"/>

			<textarea id="codeinput2"></textarea>

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