<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
      <br>

<?php
// DB Settings
$host = 'localhost';
$dbname = 'medt3';
$user ='root';
$pwd = '';

// Establish & check connection
try {
$db = new PDO ( "mysql:host=$host;dbname=$dbname", $user, $pwd);

} catch (PDOException $e) {
   print "<h1>Error: " . $e->getMessage()."</h1>";
   die();
}
if ($db) {
  echo "<h1>Connected successfully to database $dbname</h1>";
}

// SELECT Statement
$sql = "SELECT * FROM project";

?>
<hr>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>description</th>
      <th>createDate</th>
    </tr>
  </thead>
  <tbody>

<?php

// Mit Bootstrap
foreach ($db->query($sql) as $row) {
  echo "<tr>";
  echo "<td>";
  echo $row['id'];
  echo "</td>";
  echo "<td>";
  echo $row['name'];
  echo "</td>";
  echo "<td>";
  echo $row['description'];
  echo "</td>";
  echo "<td>";
  echo $row['createDate'];
  echo "</td>";
  echo "</tr>";
}

?>
