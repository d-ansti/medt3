<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register your user account - MySQL</title>

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
    <h1>Anmeldedaten eingeben:</h1>

    <form>
  <div class="form-group">
    <label for="firstname">Vorname</label>
    <input type="text" class="form-control" name="vn" placeholder="Max">
  </div>
  <div class="form-group">
    <label for="lastname">Nachname</label>
    <input type="text" class="form-control" name="nn" placeholder="Mustermann">
  </div>
  <div class="form-group">
    <label for="id">Identification (ID)</label>
    <input type="number" class="form-control" name="id" placeholder="001 - 999">
  </div>
  <button type="submit" class="btn btn-default" name="submitBtn">Submit</button>
</form>
<br>
<?php
if (isset($_GET['submitBtn'])) {
  print_r($_GET); #Ausgabe des Array-Inhaltes
}
?>
<br><br>

<?php // MYSQL Improved (mysqli)

// variables
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'test';

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

<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Vorname</th>
      <th>Nachname</th>
    </tr>
  </thead>
  <tbody>

<?php
while ($fdg = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>";
  echo $fdg['id'];
  echo "</td>";
  echo "<td>";
  echo $fdg['firstName'];
  echo "</td>";
  echo "<td>";
  echo $fdg['lastName'];
  echo "</td>";
  echo "</tr>";
}

// Close connection
mysqli_close($con);
?>

  </div>
  </body>
</html>
