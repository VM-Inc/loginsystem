<?php

session_start();

if (isset($_POST['submit'])) {
	 
	 include 'dbh.inc.php';
	 
	 $uid = mysqli_real_escape_string($conn, $_POST['uid']);
	 $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	 
	 //Error handlers
	 //Check if inputs are empty 
	 if (empty($uid) || empty($pwd)) {
		 header("Location: ../login.php?login=empty");
		 $_SESSION['error'] = "empty" ;
		 exit();
		 } else {
				$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck < 1) {
					header("Location: ../login.php?login=error");
					$_SESSION['error'] = "yes" ;
		            exit();
				} else {
					if ($row = mysqli_fetch_assoc($result)){
						echo $row['user_uid'];
						$sqlname = $row['user_uid'] ;
						//De-hashing hashed password 
						$HashedPwdCheck = password_verify($pwd, $row['user_pwd']);
						
						if ($HashedPwdCheck == false) {
							$_SESSION['error'] = "yes" ;
							$sql = "UPDATE users SET view='1' WHERE user_uid='$sqlname'";
							mysqli_query($conn, $sql);
							$_SESSION['u_view'] = $row[view] ;
							header("Location: ../login.php?login=error");
		                    exit();
						} elseif ($HashedPwdCheck == true ) {
							//Login the user here
							$_SESSION['u_id'] = $row[user_id] ;
							$_SESSION['u_first'] = $row[user_first] ;
							$_SESSION['u_last'] = $row[user_last] ;
							$_SESSION['u_email'] = $row[user_email] ;
							$_SESSION['u_uid'] = $row[user_uid] ;
							$_SESSION['u_view'] = $row[view] ;
							$_SESSION['live'] = "yes" ;

							header("Location: ../index.php?login=success");
							$_SESSION['error'] = "no" ;
		                    exit();
						}
					}
				}
		 }
	} else {
		header("Location: ../login.php?login=error");
		$_SESSION['error'] = "yes" ;
		exit();
	}