<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercise6</title>
  </head>
  <body>
    <form action="form.php">
      <p> Reset Button <input type="submit" name="resetBtn"></p>
    </form>
    <hr>
    <form action="#">
      <p><input type="radio" name="alter" value="cat1" checked>18 - 20</p>
      <p><input type="radio" name="alter" value="cat2">21 - 24</p>
      <p><input type="radio" name="alter" value="cat3">25 - 30</p>
      <p><input type="submit" name="submitBtn"></p>
    </form>

<?php
if(isset($_GET['alter'])) {
  echo "Alter: ".$_GET['alter'];
}
?>
    <hr>
    <form action="#">
      <p><input type="checkbox" name="agb" value="agb">AGB gelesen</p>
      <p><input type="submit" name="submitBtn"></p>
    </form>

<?php
if(isset($_GET['agb'])) {
  echo "AGBs akzeptiert!";
}
?>
    <hr>
    <form action="#">
      <p><input type="checkbox" name="city[NYC]" value="NYC">New York City</p>
      <p><input type="checkbox" name="city[B]" value="B">Boston</p>
      <p><input type="checkbox" name="city[SF]" value="SF">San Francisco</p>
      <p><input type="checkbox" name="city[DC]" value="DC">Washington DC</p>
      <p><input type="submit" name="submitBtn"></p>
    </form>

<?php
if(isset($_GET['city'])) {
  foreach ($_GET['city'] as $city) {
    echo "$city <br>";
  }
}
if(isset($_GET['city']['NYC'])) {
  echo "<br>It's NYC!<br>";
  }
?>
    <hr>
    <form action="#">
      <select size="4" name="auto1">
        <option>Audi</option>
        <option>BMW</option>
        <option>Renault</option>
        <option>Seat</option>
        <option>VW</option>
      </select>
      <p><input type="submit" name="submitBtn"></p>
    </form>

<?php
if(isset($_GET['auto1'])) {
  echo "Gewähltes Auto: ".$_GET['auto1'];
}
?>

    <hr>
    <form action="#">
      <select name="auto[]" size="6" multiple>
        <option>Audi</option>
        <option>BMW</option>
        <option>Renault</option>
        <option>Seat</option>
        <option>VW</option>
      </select>
      <p><input type="submit" name="submitBtn"></p>
    </form>

<?php
if(isset($_GET['auto'])) {
  var_dump($_GET['auto']);
  echo "<br><br>2";
  foreach ($_GET['auto'] as $auto) {
    echo "$auto <br>";
  }
}
?>
    <hr>
    <form action="#">
      <p>Farbe auswählen: </p>
      <input name="farbe" type="color">
      <p><input type="submit" name="submitBtn"></p>
    </form>

<?php
if(isset($_GET['farbe'])) {
  $farbe = $_GET['farbe'];
  echo "<p style=\"color:$farbe\">Farbe ausgewählt!</p>";
}
?>
    <hr>
    <form action="#">
      <input list="browsers" name="browsers">
      <datalist id="browsers">
        <option value="Internet Explorer">
        <option value="Firefox">
        <option value="Chrome">
        <option value="Opera">
        <option value="Safari">
      </datalist>
      <p><input type="submit" name="submitBtn"></p>
    </form>

<?php
if(isset($_GET['browsers'])) {
  echo "Gewählter Browser: ".$_GET['browsers'];
}
?>

    <hr>
    <form action="#">
      Username: <input type="text" name="user">
      Encryption: <keygen name="security">
      <p><input type="submit" name="submitBtn"></p>
    </form>

<?php
if(isset($_GET['user'])) {
  echo "Username: ".$_GET['user'];
}
?>

    <hr>
    <form action="#"
      oninput="x.value=parseInt(a.value)+parseInt(b.value)">
      0
      <input type="range"  id="a" name="a" value="50">
      100 +
      <input type="number" id="b" name="b" value="50">
      =
      <output name="x" for="a b"></output>
      <br>
    </form>

  </body>
</html>
