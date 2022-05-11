<?php

// dbh.inc.php connecter databasen med siden

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "triptipdatabase";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
