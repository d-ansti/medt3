<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagination</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
      <br>

<?php

// DB Settings
$host = 'localhost';
$dbname = 'classicmodels';
$user ='root';
$pwd = '';

// Establish & check connection
try {
   $db = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pwd);
   echo "<h1>Connected successfully to database $dbname</h1><hr>";
} catch (PDOException $e) {
   echo "<h1>Error: " . $e->getMessage()."</h1>";
   die();
}

// SELECT Statement

if (is_null($_GET['id'])) {
  header('Location: http://localhost/medt3/Projects/UE7/pagination.php?id=0');
}

$limit = 20;
$res = $db->query("SELECT COUNT(*) FROM customers");
$tmp = $res->fetchAll();

$idcount = intval($tmp[0][0]/$limit);

if ($_GET['id']<0) {
	$_GET['id'] = 0;
	}

elseif ($_GET['id']>$idcount) {
	$_GET['id'] = $idcount;
	}

$sql = "SELECT * FROM customers LIMIT ".($_GET['id']*$limit).",".$limit;
$res = $db->query($sql);
$tmp = $res->fetchAll(PDO::FETCH_OBJ);

// Show Table
echo "<table class=\"table table-bordered table-hover\">
  <thead>
    <tr>
      <th>customerNumber</th>
      <th>customerName</th>
      <th>contactLastName</th>
      <th>contactFirstName</th>
    </tr>
  </thead>
  <tbody>";

$items = 0;
foreach ($tmp as $row) {
  echo "<tr>
  <td>" . $row->customerNumber . "</td>
  <td>" . $row->customerName . "</td>
  <td>" . $row->contactLastName . "</td>
  <td>" . $row->contactFirstName . "</td>";
  $items += 1;
  echo "</tr>";
}

// Pagination
?>

<nav aria-label="id navigation">
  <ul class="pagination">
    <li <?php if ($_GET['id']<=0) {
    	echo "class=\"disabled\"";
    } ?>>
      <a href="<?php echo $_SERVER['PHP_SELF']."?id=".($_GET['id']-1); ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for ($i=0; $i <= $idcount ; $i++) {
    	echo "<li><a href=".$_SERVER['PHP_SELF']."?id=".$i.">".($i+1)."</a></li>";
    	} ?>
    <li <?php if ($_GET['id']>$idcount) {
    	echo "class=\"disabled\"";
    } ?>>
      <a href="<?php echo $_SERVER['PHP_SELF']."?id=".($_GET['id']+1); ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>

    </div>
  </body>
</html>
