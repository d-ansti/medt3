<?php
// DB Settings
$host = 'localhost';
$dbname = 'medt3';
$user ='root';
$pwd = '';

// Establish connection
$db = new PDO ( "mysql:host=$host;dbname=$dbname", $user, $pwd );
?>
