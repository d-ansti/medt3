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

// DELETE Statement
if(isset($_POST["deletepid"])) {
  echo $_POST["deletepid"];
  $del = "DELETE FROM project WHERE id = ".$_POST['deletepid'];
  $db->exec($del);
  exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trackstar</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <br>

<?php

// SELECT Statement
$sql = "SELECT * FROM project";
$res = $db->query($sql);
$projects = $res->fetchAll(PDO::FETCH_OBJ);

// Show Table
?>

<h1>Trackstar - Projektübersicht</h1><hr>

<p id="info-box"></p>

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Beschreibung</th>
      <th>Erstellungsdatum</th>
      <th>Operationen</th>
    </tr>
  </thead>
  <tbody>

<?php

foreach ($projects as $row) {
  echo "<tr id=" . $row->id . ">
  <td>" . $row->id . "</td>
  <td>" . $row->name . "</td>
  <td>" . $row->description . "</td>
  <td>" . $row->createDate . "</td>
  <td>
    <span class=\"glyphicon glyphicon-pencil change-icon\" style=\"cursor:pointer;\"></span>
    <span class=\"glyphicon glyphicon-trash delete-icon\" style=\"cursor:pointer;\"></span>
  </td>";
  echo "</tr>";
}

?>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
</html>
