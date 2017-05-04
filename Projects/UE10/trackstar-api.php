<?php
require "db.php";

// API: Delete Project by ID
if(isset($_POST["deletepid"])) {
  // SQL Injektion immer noch möglich!
  $del = "DELETE FROM project WHERE id = ".$_POST['deletepid'];
  $db->exec($del);
  if (true) {
    echo 1;
  }
  else {
    echo 0;
  }
  exit;
}
?>
