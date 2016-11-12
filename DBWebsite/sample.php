<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sample Database</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
<br>
    <div class="container">
      <div class="jumbotron">
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$link = mysql_connect('localhost', 'root', '');

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<p>Connected successfully to: <strong>".$servername."</strong></p>";

// benutze Datenbank
$selectedDB = 'classicmodels';
mysql_select_db($selectedDB, $link);
echo "<p>Connected successfully to DB: <strong>".$selectedDB."</strong></p>";

// SELECT
// Formuliere Abfrage
$query = sprintf("SELECT * FROM customers");

// Führe Abfrage aus
$result = mysql_query($query);

// falls fehler auftritt:
if (!$result) {
    $message  = 'Ungültige Abfrage: ' . mysql_error() . "\n";
    $message .= 'Gesamte Abfrage: ' . $query;
    die($message);
}

// Ausgabe
#while ($row = mysql_fetch_assoc($result)) {
#    echo $row['customerName'];
#    echo "<br>";
#}

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
while ($row = mysql_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>";
  echo $row['customerNumber'];
  echo "</td>";
  echo "<td>";
  echo $row['customerName'];
  echo "</td>";
  echo "<td>";
  echo $row['contactLastName'];
  echo "</td>";
  echo "<td>";
  echo $row['contactFirstName'];
  echo "</td>";
  echo "</tr>";
}
?>

  </tbody>
</table>
<?php

// Close the connection
$conn->close();
?>

  </div>
  </body>
</html>
