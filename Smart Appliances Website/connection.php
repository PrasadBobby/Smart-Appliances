<?php
    $dsn = 'mysql:host=fdb16.awardspace.net;dbname=2390315_smarthome';
    $username = '2390315_smarthome';
    $password = 'bobby@123';

    try {
        $con = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('error.php');
        exit();
    }
?>