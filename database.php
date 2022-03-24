<?php

$db_host = "localhost";
$db_userName = "root";
$db_password = "";
$db_databaseName = "signup_form";

$conn = mysqli_connect($db_host, $db_userName, $db_password, $db_databaseName);
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

?>