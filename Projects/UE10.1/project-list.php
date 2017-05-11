<?php
require 'checklogin.php';
require 'logout.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>dbAccess</title>

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
   $db = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pwd);
   echo "<h1>Connected successfully to database $dbname</h1><hr>";
} catch (PDOException $e) {
   echo "<h1>Error: " . $e->getMessage()."</h1>";
   die();
}

// Buttons
?>
<p><a href="project-list.php?insert"><button type="button" class="btn btn-info">Renew Table</button></a>
<a href="project-list.php?new"><button type="button" class="btn btn-success">Create Project</button></a>
<a href="project-list.php?logout" style="float: right;"><button type="button" class="btn btn-danger">Logout</button></a></p><hr>
<?php
// Renew Table
if (isset($_GET['insert'])) {
  $ins = "
    USE medt3;
    DROP TABLE IF EXISTS project;
    CREATE TABLE project (id INTEGER NOT NULL auto_increment, name varchar(255) NOT NULL, description text, createDate DATETIME NOT NULL, PRIMARY KEY (id));
    INSERT INTO project (name, description, createDate) VALUES ('Demo App A','Some text','2014-02-10 12:00:00'), ('Demo App B','Some text text','2014-02-10 12:01:00'), ('Demo App C','Some text text text','2014-02-10 12:02:00'), ('Demo App D','Some text text text text','2014-02-07 12:02:00'), ('Demo App E','Some text text text text text','2014-02-09 11:02:00'), ('Demo App F','Some text','2014-02-10 12:00:00'), ('Demo App G','Some text text','2014-02-10 12:01:00'), ('Demo App H','Some text text text','2014-02-10 12:02:00'), ('Demo App I','Some text text text text','2014-02-07 12:02:00');
  ";
  $db->exec($ins);
}
echo "</p>";

// DELETE Statement
if (isset($_GET['delete'])) {
  $del = "DELETE FROM project WHERE id = ".$_GET['delete'];
  $db->exec($del);
}

// UPDATE Statement
if (isset($_GET['change'])) {
  $sql = "SELECT * FROM project WHERE id = ".$_GET['change'];
  $res = $db->query($sql);
  $tmp = $res->fetch(PDO::FETCH_OBJ);
  PrintForm($tmp);
}

if (isset($_GET['changed'])) {
  $name = $_GET['name'];
  $desc = $_GET['desc'];
  $date = $_GET['date'];
  $chg = "UPDATE project SET name='$name', description='$desc', createDate='$date' WHERE id = ".$_GET['changed'];
  $db->query($chg);
}

// INSERT Statement
if (isset($_GET['new'])) {
  $tmp = "";
  PrintForm($tmp);
}

if (isset($_GET['add'])) {
  $name = $_GET['name'];
  $desc = $_GET['desc'];
  $date = $_GET['date'];
  $chg = "INSERT INTO project (name, description, createDate) VALUES ('$name', '$desc', '$date')";
  $db->query($chg);
}

// SELECT Statement
$sql = "SELECT * FROM project";
$res = $db->query($sql);
$tmp = $res->fetchAll(PDO::FETCH_OBJ);

// Show Table
echo "<table class=\"table table-bordered table-hover\">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>description</th>
      <th>createDate</th>
      <th>operations</th>
    </tr>
  </thead>
  <tbody>";

$items = 0;
foreach ($tmp as $row) {
  echo "<tr>
  <td>" . $row->id . "</td>
  <td>" . $row->name . "</td>
  <td>" . $row->description . "</td>
  <td>" . $row->createDate . "</td>
  <td>
    <a href=\"project-list.php?change=$row->id\"><span class=\"glyphicon glyphicon-pencil\"></span>
    <a href=\"project-list.php?delete=$row->id\"><span class=\"glyphicon glyphicon-trash\"></span>
  </td>";
  $items += 1;
  echo "</tr>";
}

// Print Form
function PrintForm($tmp)
{
  if (isset($_GET['change'])) echo "<h2>Projekt bearbeiten</h2>";
  elseif (isset($_GET['new'])) echo "<h2>Projekt erstellen</h2>";
?>
<form class="form-horizontal" action="project-list.php">
  <div class="form-group">
    <label class="control-label col-sm-1">Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="name" placeholder="Project Name" value="<?php if (isset($_GET['change'])) echo $tmp->name; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-1">Description</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="desc" placeholder="Description" value="<?php if (isset($_GET['change'])) echo $tmp->description; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-1">Date</label>
    <div class="col-sm-4">
      <input type="<?php if (isset($_GET['new'])) echo "datetime-local"; elseif (isset($_GET['change'])) echo "text"?>" class="form-control" name="date" value="<?php if (isset($_GET['change'])) echo $tmp->createDate; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-1 col-sm-10">
      <?php
      if (isset($_GET['change']))
        echo "<button type=\"submit\" name=\"changed\" value=\"".$_GET['change']."\" class=\"btn btn-success\">Aktualisieren</button>";
      if (isset($_GET['new']))
        echo "<button type=\"submit\" name=\"add\" value=\"".$_GET['new']."\" class=\"btn btn-success\">Erstellen</button>";
      ?>
      <button type="cancel" class="btn btn-danger">Abbrechen</button>
    </div>
  </div>
</form>
<hr>

<?php
}
?>
    </div>
  </body>
</html>
