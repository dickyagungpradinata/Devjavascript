<?php
session_start();

$user = $_POST["inEmail"];
$pass = $_POST["inPass"];

$dbuser = 'admin@gmail.com';
$dbpass = 'admin';

if($user == $dbuser && $pass == $dbpass){
	echo '<h1>ANDA SUKSES LOGIN</h1>';	
} else {
	if(isset($_SESSION['gagal'])){
		$_SESSION['gagal']++;				
	} else {
		$_SESSION['gagal'] = 1;
	}
	header('location.login.php');
}
?>


