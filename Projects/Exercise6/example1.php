<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MEDT - Beispiel 1</title>

		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="container">
			<h1>Beispiel 1</h1>
			<form>
			  <div class="form-group">
			    <label for="input">Ihre Eingabe: </label>
			    <input type="text" class="form-control" name="input" value="Das ist ein Demo-Satz">
			  </div>
			  <button type="submit" class="btn btn-default" name="submitBtn">Explode</button>
			  <button class="btn btn-default" href="example1.php">Reset</button>
			</form><br>
			<table class="table table-striped">
		    <tbody>
<?php
if (isset($_GET['submitBtn'])) {
	$input = $_GET['input'];
	$exinput = explode(" ", $input);
	PrintInput($exinput);
}

function PrintInput($exinput)
{
	echo "<h3>Ihre Eingabe als Liste:</h3>";
	foreach ($exinput as $item) {
		echo "<tr><td>".$item."</td></tr>";
}
}
?>
		    </tbody>
		  </table>
		</div>
	</body>
</html>
