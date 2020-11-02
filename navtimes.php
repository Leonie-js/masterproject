<?php

$userID = $_POST['userID'];
$urllink = $_POST['urllink'];
$timesubmit = time();
$timestampsubmit = date("Y-m-d H:i:s", $timesubmit);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO navtimes VALUES ('". $timestampsubmit ."', ". $userID . ", '". $urllink ."');";

if ($conn->query($sql) === !TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
}


$conn->close();

?>