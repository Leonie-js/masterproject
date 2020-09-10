<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "masterproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$userID = $_POST['userID'];
$moduleID = $_POST['moduleID'];
$time = time();
$timestamp = date("Y-m-d H:i:s", $time);
$attempt = $_POST['attempt'];
$finished = $_POST['finished'];



$sql = "UPDATE progress SET timestamp = '". $timestamp ."', attempt='". $attempt . "', noa = noa+1 WHERE userID = ". $userID ." AND moduleID = ". $moduleID .";";

if ($conn->query($sql) === !TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
	echo "update complete";
	echo $sql;
}


$conn->close();

?>