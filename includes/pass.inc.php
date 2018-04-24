<?php
include_once 'dbh.inc.php';
 ?>
 <?php

session_start();

$uid = $_SESSION['u_uid'] ;

if (isset($_POST['submit'])) {
	$oldpwd = mysqli_real_escape_string($conn, $_POST['old-pwd']);
  $newpwd = mysqli_real_escape_string($conn, $_POST['new-pwd']);
  $repwd = mysqli_real_escape_string($conn, $_POST['re-pwd']);

  if (empty($oldpwd) || empty($newpwd) || empty($repwd) ) {
	header("Location: ../password.php?password=empty");
  $_SESSION['passerror'] = "empty";
	die("File not found");
	exit();
	}


  $hashedPwd = password_hash($newpwd, PASSWORD_DEFAULT);

  $sql = "SELECT * FROM users WHERE user_uid='$uid'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck < 1) {

  } else {
    if ($row = mysqli_fetch_assoc($result)){

      $HashedPwdCheck = password_verify($oldpwd, $row['user_pwd']);
      if ($newpwd === $repwd) {
      if ($HashedPwdCheck == true) {
        $sql = "UPDATE users SET user_pwd = '$hashedPwd' WHERE user_uid = '$uid';";
        mysqli_query($conn, $sql);
        $_SESSION['passerror'] = "done";
        header("Location: ../password.php?password=done");
      } elseif ($HashedPwdCheck == false) {
            $_SESSION['passerror'] = "wrongold";
            header("Location: ../password.php?password=wrongold");
      }
} else {
  $_SESSION['passerror'] = "notverify" ;
  header("Location: ../password.php?password=noverify");
    }
  }
  }
}
 ?>

 <?php
echo $_SESSION['passerror'] ;
  ?>
