<?php
// DB Settings
$host = 'localhost';
$dbname = 'medt3';
$user ='root';
$pwd = '';

// Establish & check connection
try {
   $db = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pwd);
} catch (PDOException $e) {
   echo "<h1>Error: " . $e->getMessage()."</h1>";
   die();
}
?>
