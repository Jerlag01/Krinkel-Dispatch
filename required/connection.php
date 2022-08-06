<?php 
$host = "192.168.1.68";
$user = "krinkel";
$password = "VTIkontich00";
$database = "dispatchkrinkel";

$conn = new mysqli($host, $user, $password, $database);

$conn->connect_errno;

print $conn->error;

if (mysqli_connect_error()) {
	echo "Failed to connect to Database: $database" . mysqli_connect_error();
}
?>