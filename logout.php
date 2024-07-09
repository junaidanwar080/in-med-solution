<?php
session_start();
include 'connection.php';
if ($_SESSION["name"] != "") {
	session_unset();
	session_destroy();
	header("location:index.php");
} else {
	echo "You Are Loged Out";
	header("location:index.php");
}


 ?>