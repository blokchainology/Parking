<?php

$server = "localhost";
$username = "" /* Enter Username */;
$password = "" /* Enter Password */;
$database = "" /* Enter Database name */;


$conn = mysqli_connect($server, $username, $password, $database);

if($conn){
	$plack = $_POST["plack"];
	$pass = $_POST["pass"];
	$timeVOROD = $_POST["timeVOROD"];

	$query = "INSERT INTO ``/* Enter Tabel name */( `pass`  , `plack` ,`timeVOROD` ) VALUES ( '$pass' , '$plack' , '$timeVOROD' )";

	$result = mysqli_query($conn , $query);

	if($result){
		header("location: index.php?login=true");
	}else {
		header('location: index.php?login=false');
	}

};