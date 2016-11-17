<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <br>
    <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Variable</th>
          <th>Wert</th>
        </tr>
      </thead>
      <tbody>

    <?php
      echo "<tr>"."<td>";
      echo 'Skript-Pfad';
      echo "</td>";
      echo "<td>";
      echo $_SERVER['PHP_SELF'];
      echo "</td>"."</tr>";
      echo "<tr>"."<td>";
      echo 'Server-Name / IP';
      echo "</td>";
      echo "<td>";
      echo $_SERVER['SERVER_NAME'];
      echo " / ";
      echo $_SERVER['SERVER_ADDR'];
      echo "</td>"."</tr>";
      echo "<tr>"."<td>";
      echo 'Protokoll';
      echo "</td>";
      echo "<td>";
      echo $_SERVER['SERVER_PROTOCOL'];
      echo "</td>"."</tr>";
      echo "<tr>"."<td>";
      echo 'Client-IP';
      echo "</td>";
      echo "<td>";
      echo $_SERVER['REMOTE_ADDR'];
      echo "</td>"."</tr>";
      echo "<tr>"."<td>";
      echo 'URI';
      echo "</td>";
      echo "<td>";
      echo $_SERVER['REQUEST_URI'];
      echo "</td>"."</tr>";
      echo "<tr>"."<td>";
      echo 'Server-Info';
      echo "</td>";
      echo "<td>";
      echo $_SERVER['SERVER_SOFTWARE'];
      echo "</td>"."</tr>";
    ?>

      </tbody>
    </table>
  </div>
  </body>
</html>
