<?php
include_once 'dbh.inc.php';
 ?>
 <?php

session_start();

$uid = $_SESSION['u_uid'] ;
echo $uid;
if (isset($_POST['submit'])) {
	$oldpwd = mysqli_real_escape_string($conn, $_POST['old-pwd']);
  $newpwd = mysqli_real_escape_string($conn, $_POST['new-pwd']);
  $repwd = mysqli_real_escape_string($conn, $_POST['re-pwd']);

  if (empty($oldpwd) || empty($newpwd) || empty($repwd) ) {
	header("Location: ../password.php?password=empty");
	die("File not found");
	exit();
	}

  $hashedPwd = password_hash($newpwd, PASSWORD_DEFAULT);

  $sql = "SELECT * FROM users WHERE user_uid='$uid'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck < 1) {
    $_SESSION['error'] = "yes" ;
  } else {
    if ($row = mysqli_fetch_assoc($result)){

      $HashedPwdCheck = password_verify($oldpwd, $row['user_pwd']);

      if ($HashedPwdCheck == true) {
        $sql = "UPDATE users SET user_pwd = '$hashedPwd' WHERE user_uid = '$uid';";
        mysqli_query($conn, $sql);
        $_SESSION['error'] = "veeeeee" ;
      } elseif ($HashedPwdCheck == false) {
            $_SESSION['error'] = "hashedpwd" ;
      }

    }
  }
}
 ?>

 <?php
echo $_SESSION['error'] ;
  ?>
