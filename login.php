<?php
include_once 'header.php';
?>

<?php
if (isset($_SESSION['error'])) {
	if ($_SESSION['error'] == "yes") {
	echo '<div class="alert alert-danger">
  <strong>No User/Password Found |</strong> (Try Signing Up)
</div>';
} else if ($_SESSION['error'] == "empty" ) {
	echo '<div class="alert alert-danger">
  <strong>Error!</strong> Fill all the empty fields!
</div>';
} else {
	echo '<div class="alert alert-success">
  <strong>Success!</strong> You loged In.
</div>';
}
}

?>
<style type="text/css">
body {
  background-color:black;
  background-image: url("background4.jpg") ;
  position: relative;
  opacity: 1;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.content {
	color:white;
	margin-top: 12%;
}

</style>
<div class="content" >
		<div align="center">
			<h1>Login</h1>
			<br>
			<form class="form-horizontal" action="includes/login.inc.php" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-3" >Email</label>
						<div class="col-sm-6">
							<input class="form-control" placeholder="Enter email/UserId" name="uid">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="pwd">Password</label>
						<div class="col-sm-6">
							<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
						</div>
				</div>
				<div class="form-group" align="center">
					<div class="col-sm-offset-3 col-sm-6" align="center">
						<button type="submit" class="btn btn-default" name="submit" align="center" style="width:100%;">Submit</button>
					</div>
				</div>
			</form>
		</div>
<div>

	<?php include_once 'footer.php';
	?>
