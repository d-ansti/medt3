<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercise6</title>
  </head>
  <body>
    <form action="#">
      <p><input type="radio" name="alter" value="cat1" checked>18 - 20</p>
      <p><input type="radio" name="alter" value="cat2">21 - 24</p>
      <p><input type="radio" name="alter" value="cat3">25 - 30</p>
      <p><input type="submit" name="submitBtn"></p>
    </form><hr>

<?php
if(isset($_GET['alter'])) {
  echo "Alter: ".$_GET['alter'];
}
?>

    <form action="#">
      <p><input type="checkbox" name="agb" value="agb">AGB gelesen</p>
      <p><input type="submit" name="submitBtn"></p>
    </form><hr>

<?php
if(isset($_GET['agb'])) {
  echo "AGBs akzeptiert!";
}
?>

    <form action="#">
      <p><input type="checkbox" name="city[]" value="NYC">New York City</p>
      <p><input type="checkbox" name="city[]" value="B">Boston</p>
      <p><input type="checkbox" name="city[]" value="SF">San Francisco</p>
      <p><input type="checkbox" name="city[]" value="DC">Washington DC</p>
      <p><input type="submit" name="submitBtn"></p>
    </form><hr>

<?php
if(isset($_GET['city'])) {
  var_dump($_GET['city']);
}
?>

  </body>
</html>
