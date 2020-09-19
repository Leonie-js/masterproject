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

$username = $_POST["userID"];
$password = $_POST["password"];

$sql = "SELECT language FROM users WHERE userID = '". $username ."' AND  password = '" . $password ."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo json_encode($result->fetch_assoc());

} else {
	echo 'false';
}

$conn->close();

?>