<?php

session_start();

if (isset($_POST['submit'])) {
  include 'dbh.inc.php';

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $Subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $msg = mysqli_real_escape_string($conn, $_POST['msg']);

  if (empty($name) || empty($Subject) || empty($msg)) {
    header("Location: ../feedback.php?feedback=empty");
    $_SESSION['feedback'] = "errorempty";
  } else {
    if (!preg_match("/^[a-zA-Z]*$/", $name)) {
      header("Location: ../feedback.php?feedback=invalid");
      $_SESSION['feedback'] = "errorinvalid";
    } else {
      $sql = "INSERT INTO feedback (name, feedback) VALUES ('$name', '$msg');";
      mysqli_query($conn, $sql);
      header("Location: ../feedback.php?feedback=done");
      $_SESSION['feedback'] = "done";
    }
  }
}
