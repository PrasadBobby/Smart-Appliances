<?php
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
include('connection.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from tbllogin where username='$username' and password='$password'";
$qry = $con->query($sql);
 
if ($qry->fetchColumn() > 0) 
{
	$_SESSION['username'] = $username;
	header('location:change_password.php');
	exit();
}	
else
{
	$error = "Please check your username and password.";
	header('location:error.php?error='.$error.'');
	exit();
}
?>