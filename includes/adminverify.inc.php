<?php
session_start();
include 'dbh.inc.php';
$name = mysqli_real_escape_string($conn, $_POST['name']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

if ($name == "admin" and $pwd == "admin"){
  $_SESSION['admin'] = "true" ;
  header("Location: ../feedback.show.php?admin=true");
} else {
  header("Location: ../feedback.show.php?admin=false");
  $_SESSION['admin'] = "false" ;
}
?>
