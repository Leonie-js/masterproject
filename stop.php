<?php

$userID = $_POST['userID'];
$reason = $_POST['reason'];
$timesubmit = time();
$timestampsubmit = date("Y-m-d H:i:s", $timesubmit);
$more = $_POST['more'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO stop VALUES ('". $timestampsubmit ."', ". $userID . ", '". $reason ."', '". $more ."');";

if ($conn->query($sql) === !TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
}


$conn->close();

?>