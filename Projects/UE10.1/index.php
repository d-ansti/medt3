<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <form class="form-signin" action="index.php" method="post">
        <h2 class="form-signin-heading">Bitte einloggen:</h2>
        <label for="inputUser" class="sr-only">Username</label>
        <input type="user" name="inputUser" id="inputUser" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Passwort</label>
        <input type="password" name="inputPass" id="inputPassword" class="form-control" placeholder="Passwort" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submitBtn">Einloggen</button>
      </form>

<?php
$user = "root";
$pass = "toor";

if(isset($_POST["submitBtn"])) {
  if($_POST["inputUser"] == $user && $_POST["inputPass"] == $pass) {
    session_start();
    $_SESSION["user"] = $_POST["inputUser"];
    header("Location: project-list.php");
  } else {
	echo "<h3 class=\"text-danger\">Username oder Passwort falsch!</h3>";
	}
}
?>

    </div> <!-- /container -->
  </body>
</html>
