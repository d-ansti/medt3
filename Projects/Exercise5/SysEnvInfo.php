<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SysEnvInfo</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
    <div class="page-header">
      <h1>$_SERVER <small>im Überblick</small></h1>
    </div>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Variable</th>
          <th>Wert</th>
        </tr>
      </thead>
      <tbody>

    <?php
function PrintValues($variable, $value)
{
  echo "<tr>"."<td>";
  echo "$variable";
  echo "</td>";
  echo "<td>";
  echo $_SERVER[$value];
  echo "</td>"."</tr>";
}

PrintValues('Skript-Pfad','PHP_SELF');
PrintValues('Server-Name / IP','SERVER_NAME');
PrintValues('Protokoll','SERVER_PROTOCOL');
PrintValues('Client-IP','REMOTE_ADDR');
PrintValues('URI','REQUEST_URI');
PrintValues('Server-Info','SERVER_SOFTWARE');
    ?>

      </tbody>
    </table>
  </div>
  </body>
</html>
