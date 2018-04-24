<?php

include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
	session_start();
	$sql = "SELECT * FROM datamang WHERE name='live' ";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
	$livedecre = $row['value'] - '1' ;
	$sql = "UPDATE datamang SET value='$livedecre' WHERE name='live'";
	mysqli_query($conn, $sql);
	session_unset();
	session_destroy();
	header("Location: ../index.php");
	exit();
}

?>