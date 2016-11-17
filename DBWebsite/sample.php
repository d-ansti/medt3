<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sample</title>

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
      <div class="jumbotron">

<?php // MYSQL Improved (mysqli)

// variables
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'classicmodels';

// Create connection
$con = mysqli_connect($servername,$username,$password,$database);

// Check if server is alive
if (mysqli_ping($con)) {
  echo "<p>Connected successfully to <strong>".mysqli_get_host_info($con)."</strong> and database <strong>".$database."</strong></p>";
  }
else {
  echo "Error: ". mysqli_error($con);
  }

// Select
$sql = "SELECT * FROM customers";

// Print
$result = mysqli_query($con,$sql);

// Ausgabe mit Tabellen
?>
</div>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Kundennummer</th>
      <th>Kundenname</th>
      <th>Nachname</th>
      <th>Vorname</th>
    </tr>
  </thead>
  <tbody>

<?php
while ($fdg = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>";
  echo $fdg['customerNumber'];
  echo "</td>";
  echo "<td>";
  echo $fdg['customerName'];
  echo "</td>";
  echo "<td>";
  echo $fdg['contactLastName'];
  echo "</td>";
  echo "<td>";
  echo $fdg['contactFirstName'];
  echo "</td>";
  echo "</tr>";
}

// Close connection
mysqli_close($con);
?>

  </body>
</html>
