<?php

// localhost credendtials
$servername = "localhost";
$username = "root";
$password = "";
// $db_name = "medical";
$db_name = 'hospital_management'; // personal laptop database

// live server credendtials
// $servername = "localhost"; 
// $username = "gocpyfzr_ureka";
// $password = "ureka";
// $db_name = "gocpyfzr_ureka";
$con =  mysqli_connect($servername, $username, $password , $db_name);


function execute_query($query) {
	global $con;
	$result = mysqli_query($con , $query);
	return $result;
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}




?>