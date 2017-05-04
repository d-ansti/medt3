<?php
require "db.php";
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

<!-- Bootstrap Modal Static -->

    <div id="delete-project-modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Projekt löschen</h4>
          </div>
          <div class="modal-body">
            <p>Wollen Sie das Projekt wirklich löschen?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
            <button id="delete-project-btn" type="button" class="btn btn-danger">Löschen</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
</html>
