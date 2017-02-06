<?php 
$dbhandle = mysqli_connect('127.5.225.130:3306', "admin5dtPJN9", "jL-vw2LYpLNN", "feedback");
if (!$dbhandle) {
	die('Could not connect: ' . mysqli_connect_error());
}
//$selected = mysqli_select_db("test",$dbhandle) or die("Could not select forecasting database");
?>