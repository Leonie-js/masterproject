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
	<h1>home</h1>
	<p > UserID 
		<?php
			$userID = $_GET["userID"];
			echo $userID;
		?> 
		is logged in </p>

	<p> Progress is: </p>
		<?php
			$_POST["userID"] = $userID;
			$data = include("getprocess.php");

			$newdata = json_decode($data);

			echo "<table><tr><th>ModuleID</th><th>Module link</th><th>Number of attempts</th><th>Finished</th></tr>";

		    for ($i = 0; $i < count($newdata); $i++) {

		    	$usingdata = $newdata[$i];

                $moduleID = $usingdata->moduleID;
                $noa = $usingdata->noa;
                $finished = $usingdata->finished;

                if ($finished == 0){
                	$finishedtext = 'false';
                } else {
                	$finishedtext = 'true';
                }

		        echo "<tr><td>".$moduleID."</td><td><a href='/module-".$moduleID."?userID=".$userID."'>Module ".$moduleID."</a></td><td>".$noa."</td><td>".$finishedtext ."</td></tr>";
		    }
		    echo "</table>";
		?>

</body>
</html>