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

// INSERT Statement
echo "<p><a href=\"dbaccess.php?insert\"><button type=\"button\" class=\"btn btn-default\">Insert</button></a>";

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
echo "<p><a href=\"dbaccess.php?new\"><button type=\"button\" class=\"btn btn-default\">Create Project</button></a>";

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
    <a href=\"dbaccess.php?change=$row->id\"><span class=\"glyphicon glyphicon-pencil\"></span>
    <a href=\"dbaccess.php?delete=$row->id\"><span class=\"glyphicon glyphicon-trash\"></span>
  </td>";
  $items += 1;
  echo "</tr>";
}

// Print Form
function PrintForm($tmp)
{
?>

<h2>Projekt bearbeiten</h2>
<form class="form-horizontal" action="dbaccess.php">
  <div class="form-group">
    <label class="control-label col-sm-2">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" value="<?php if (isset($_GET['change'])) echo $tmp->name; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="desc" value="<?php if (isset($_GET['change'])) echo $tmp->description; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Date</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="date" value="<?php if (isset($_GET['change'])) echo $tmp->createDate; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
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
<br>

<?php
}

// Pagination
  $page = ceil($items / 20);
      echo "<nav aria-label=\"Page navigation\">
        <ul class=\"pagination\">
        <li class=\"page-item\"><a class=\"page-link\" href=\"?id=first\"><<</a></li>
        <li class=\"page-item\"><a class=\"page-link\" href=\"?id=prev\"><</a></li>";
        for ($i=1; $i <= $page; $i++) {
          echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?id=$i\">$i</a></li>";
        }
      echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?id=next\">></a></li>
      <li class=\"page-item\"><a class=\"page-link\" href=\"?id=last\">>></a></li>
      </ul></nav>";

?>
    </div>
  </body>
</html>
