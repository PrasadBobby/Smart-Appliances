<?php

$servername = 'fdb16.awardspace.net';
$username = '2390315_smarthome';
$password = 'bobby@123';
$dbname = '2390315_smarthome';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo 'Connection Error '.mysqli_connect_error();
}