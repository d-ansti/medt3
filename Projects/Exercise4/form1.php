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
    <h1>Ohne Bootstrap</h1>
    
    <form action="http://localhost/medt3/Projects/Exercise4/form1.php">
      <h3>Anmeldeinfos bitte eingeben:</h3>
      <p>Vorname:</p>
      <input type="text" name="vn">
      <p>Nachname:</p>
      <input type="text" name="nn">
      <br>
      <p><input type="submit" value="Anmelden"></p>
    </form>

    <h1>Mit Bootstrap</h1>

    <h3>Anmeldeinfos bitte eingeben:</h3>
    <form class="form-inline">
  <div class="form-group">
    <label for="email">Vorname:</label>
    <br>
    <input type="text" class="form-control" id="vn">
  </div><br>
  <div class="form-group">
    <label for="pwd">Nachname:</label>
    <br>
    <input type="text" class="form-control" id="nn">
  </div>
  <br>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <br>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

  </body>
</html>
