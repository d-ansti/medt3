<!DOCTYPE html>
<html>
<head>
	<title>Grid Generator</title>
	<style type="text/css">
		* {font-family: Arial;}
		th {padding: 15px; font-size: 24pt;}
		td {padding: 15px; text-align: center;}
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<h1>Grid Generator</h1>
		<p><label><input type="checkbox" name="day[]" value="Sunday">Sunday</label></p>
		<p><label><input type="checkbox" name="day[]" value="Monday">Monday</label></p>
		<p><label><input type="checkbox" name="day[]" value="Tuesday">Tuesday</label></p>
		<p><label><input type="checkbox" name="day[]" value="Wednesday">Wednesday</label></p>
		<p><label><input type="checkbox" name="day[]" value="Thursday">Thursday</label></p>
		<p><label><input type="checkbox" name="day[]" value="Friday">Friday</label></p>
		<p><label><input type="checkbox" name="day[]" value="Saturday">Saturday</label></p>
		<p><label>Enter number of fields <input type="texbox" name="nof"></label></p>
		<p><label><input type="submit" name="generatebtn" value="Generate"></label></p>
	</form>
	<hr>
	<?php
		if (isset($_GET['generatebtn']) && $_GET['nof']!=0 && isset($_GET['day'])){
			echo "<table><tr>";
			for ($k=0; $k <= $_GET['nof']; $k++) { 
				echo "<th>";
				if ($k==0) {
					echo "Day";
				}
				else {
					echo "Event ".$k;
				}
				echo "</th>";
			}
			echo "</tr>";
			for ($i=0; $i < sizeof($_GET['day']); $i++) { 

				echo "<tr><td>".$_GET['day'][$i]."</td>";

				for ($j=1; $j <= $_GET['nof']; $j++) { 
					echo "<td>event ".($i+1).".".$j."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}
	?>
</body>
</html>