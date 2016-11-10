<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="http://localhost/medt3/Projects/Exercise4/form1.php">
      <h3>Anmeldeinfos bitte eingeben:</h3>
      <p>Vorname: <input type="text" name="vn"></p>
      <p>Nachname: <input type="text" name="nn"></p>
      <p>Textfarbe: <input type="text" name="tf"></p>
      <br>
      <p><input type="submit" value="Anmelden" name="submitBtn"></p>
    </form>

    <?php
        if (isset($_GET['submitBtn'])) {
          # var_dump
          echo "<p style=\"color:".$_GET['tf']."\">Vorname: ".$_GET['vn']."</p>";
          echo "<p style=\"color:".$_GET['tf']."\">Nachname: ".$_GET['nn']."</p>";

    ?>

  </body>
</html>
