<?php
include_once 'header.php';
?>
<?php 
if (isset($_SESSION['errors'])) {
	if ($_SESSION['errors'] == "empty" ) {
		echo '<div class="alert alert-danger">
  <strong>Error!</strong> Fill all the empty fields!
</div>' ;
	} else if ($_SESSION['errors'] == "notvalid" ) {
		echo '<div class="alert alert-danger">
  <strong>Error!</strong> Only Letters are allowed for First And Last name.
</div>';
	} else if ($_SESSION['errors'] == "emailnotvalid" ) {
		echo '<div class="alert alert-danger">
  <strong>Error!</strong> Give a valid email address.
</div>';
	} else if ($_SESSION['errors'] == "takenuser" ) {
		echo '<div class="alert alert-danger">
  <strong>User Taken </strong> Try Loging In
</div>';
	} else if ($_SESSION['errors'] == "success" ) {
		echo '<div class="alert alert-success">
  <strong>Success!</strong> You have been registered . <a href="login.php">Log In</a>
</div>';
	} 
}
?>
<style type="text/css">
body {
  background-image: url("background4.jpg") ;
  position: relative;
  opacity: 1;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

label {
  color:white;
}

h2 {
  color:white;
}

</style>
<div align="center">
<section class="main-container" >
<div class="main-wrapper" >
<div align="center">
<div class="col-sm-4">
  </div>
<div class="col-sm-4">
<h2>Sign Up</h2>
<form class="signup-form" action="includes/signup.inc.php" method="POST">
<div class="form-group">
  <label for="usr">FirstName</label>
  <input type="text" class="form-control" id="usr" name="first" placeholder="FirstName" >
</div>
<div class="form-group">
  <label for="usr">LastName</label>
  <input type="text" class="form-control" id="usr" name="last" placeholder="LastName" >
</div>

<div class="form-group">
  <label for="usr">Email</label>
  <input type="text" class="form-control" id="usr" name="email" placeholder="Email" >
</div> 

<div class="form-group">
  <label for="usr">UserName</label>
  <input type="text" class="form-control" id="usr" name="uid" placeholder="UserName" >
</div>

<div class="form-group">
  <label for="pwd">Password</label>
  <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
</div>

<div class="form-group">
  <label for="submit"></label>
  <button type="submit" name="submit" class="form-control" style="font-size:17px;"><b>Sign Up</b></button>
</div>

</form>
</div>
<div class="col-sm-4">
</div>
</div>
</div>
</div>
</section>
<?php
include_once 'footer.php';
?>