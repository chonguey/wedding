<?php 
$dbCredentials = array(
	'host' => '',
	'user' => '',
	'password' => '',
	'db' => ''
);

$db = mysqli_connect($dbCredentials['host'], $dbCredentials['user'], $dbCredentials['password'], $dbCredentials['db']);							

if (mysqli_connect_errno()){
	echo "Failed to connect to Guest List Database: " . mysqli_connect_error();	
}

?>