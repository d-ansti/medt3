<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Form</title>

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
    <label for="textcolor">Textfarbe</label>
    <input type="text" class="form-control" name="tf" placeholder="black">
  </div>
  <div class="form-group">
    <label for="id">Identification (ID)</label>
    <input type="number" class="form-control" name="id" placeholder="0">
  </div>
  <button type="submit" class="btn btn-default" name="submitBtn">Submit</button>
</form>
<br>
  <div class="jumbotron" style="background-color: lightblue">
<?php
if (isset($_GET['submitBtn'])) {
  #print_r($_GET); #Ausgabe des Array-Inhaltes
  echo "<p style=\"color:".$_GET['tf']."\">Vorname: ".$_GET['vn']."</p>";
  echo "<p style=\"color:".$_GET['tf']."\">Nachname: ".$_GET['nn']."</p>";
  echo "<p style=\"color:".$_GET['tf']."\">ID: ".$_GET['id']."</p>";
}
?>
  </div>
  <a href="form1.php" class="btn btn-default" role="button">Reset</a>
<br>
  </div>
  </body>
</html>
