<?php

$host = "localhost";
$username = "root";
$pass = "";
$database = "tma_db";
// koneksi ke database
$conn = mysqli_connect($host, $username, $pass, $database);

if (!$conn) {
	die("Error: Failed Connect to Database");
}

?>