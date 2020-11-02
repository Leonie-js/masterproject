<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.css">
	<link rel="stylesheet" type="text/css" href="https://codemirror.net/addon/lint/lint.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jshint/r07/jshint.js"></script>
	<script src="https://codemirror.net/mode/javascript/javascript.js"></script>
	<script src="https://codemirror.net/addon/lint/lint.js"></script>
	<script src="https://codemirror.net/addon/lint/javascript-lint.js"></script>
	<script src="script.js"></script>
	<title>Learn Javascript in Dutch!</title>
</head>
<body>
	<?php
	$userID = $_GET["userID"];
	$language = $_GET["language"];
	?> 
	<?php 
	if ($language == "dutch"){
		?>
		<h1>Home (NL)</h1>
		<p > UserID 
			<?php
			echo $userID;
			?> 
		is ingelogd. </p> <button id="logoutbutton"><a class='navlink' href="/">Uitloggen</a></button>

		<p> Status is: </p>
		<?php
		$_POST["userID"] = $userID;
		$data = include("getprocess.php");

		$newdata = json_decode($data);

		echo "<table><tr><th>ModuleID</th><th>Module link</th><th>Voltooid</th></tr>";

		for ($i = 0; $i < count($newdata); $i++) {

			$usingdata = $newdata[$i];

			$moduleID = $usingdata->moduleID;
			$finished = $usingdata->finished;

			if ($finished == 0){
				$finishedtext = 'nee';
				if($i != 0){
					$usingdatalink = $newdata[$i-1];
					$finishedlink = $usingdatalink->finished;
					if ($finishedlink == 0){
						$stylea = 'style="pointer-events: none; cursor: default; color: gray;"';
					}else{
						$stylea = '';
					}
				} else{
					$stylea = '';
				}

			} else {
				$finishedtext = 'ja';
				$stylea = '';
			}

			echo "<tr><td>".$moduleID."</td><td><a class='navlink' ".$stylea." href='/module-".$moduleID.".php?userID=".$userID."&language=".$language."'>Module link</a></td><td>".$finishedtext ."</td></tr>";
		}
		echo "</table>";
	}else {
		?>
		<h1>Home (EN)</h1>
		<p > UserID 
			<?php
			echo $userID;
			?> 
		is logged in </p>

		<button id="logoutbutton"><a class='navlink' href="/">Logout</a></button>

		<p> Progress is: </p>

		<?php
		$_POST["userID"] = $userID;
		$data = include("getprocess.php");

		$newdata = json_decode($data);

		echo "<table><tr><th>ModuleID</th><th>Module link</th><th>Finished</th></tr>";

		for ($i = 0; $i < count($newdata); $i++) {

			$usingdata = $newdata[$i];

			$moduleID = $usingdata->moduleID;
			$finished = $usingdata->finished;

			if ($finished == 0){
				$finishedtext = 'false';
				if($i != 0){
					$usingdatalink = $newdata[$i-1];
					$finishedlink = $usingdatalink->finished;
					if ($finishedlink == 0){
						$stylea = 'style="pointer-events: none; cursor: default; color: gray;"';
					}else{
						$stylea = '';
					}
				} else{
					$stylea = '';
				}

			} else {
				$finishedtext = 'true';
				$stylea = '';
			}

			echo "<tr><td>".$moduleID."</td><td><a class='navlink' ".$stylea." href='/module-".$moduleID.".php?userID=".$userID."&language=".$language."'>Module link</a></td><td>".$finishedtext ."</td></tr>";
		}
		echo "</table>";
	};?>

</body>
</html>