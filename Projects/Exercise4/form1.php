<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Form Demo 1</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
    <h1>Ohne Bootstrap</h1>

    <form action="http://localhost/medt3/Projects/Exercise4/form1.php">
      <h3>Anmeldeinfos bitte eingeben:</h3>
      <p>Vorname: <input type="text" name="vn"></p>
      <p>Nachname: <input type="text" name="nn"></p>
      <p>Textfarbe: <input type="text" name="tf"></p>
      <br>
      <p><input type="submit" value="Anmelden" name="submitBtn"></p>
    </form>

    <br>
    <?php
    if (isset($_GET['submitBtn'])) {
      print_r($_GET); #Ausgabe des Array-Inhaltes
      echo "<p style=\"color:".$_GET['tf']."\">Vorname: ".$_GET['vn']."</p>";
      echo "<p style=\"color:".$_GET['tf']."\">Nachname: ".$_GET['nn']."</p>";
    }
    ?>
    <br>

    <h1>Mit Bootstrap</h1>

    <h3>Anmeldeinfos bitte eingeben:</h3>
    <form class="form-inline" action="http://localhost/medt3/Projects/Exercise4/form1.php">
  <div class="form-group">
    <label for="text">Vorname:</label>
    <input type="text" class="form-control" name="vn">
  </div><br>
  <div class="form-group">
    <label for="text">Nachname:</label>
    <input type="text" class="form-control" name="nn">
  </div><br>
  <div class="form-group">
    <label for="text">Textfarbe:</label>
    <input type="text" class="form-control" name="tf">
  </div><br>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <br>
  <button type="submit" class="btn btn-default" name="submitBtn">Submit</button>
</form>

  </div>
  </body>
</html>
