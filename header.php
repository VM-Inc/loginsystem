<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="VM,Inc WE make website for $20 only .World's Very low cost Web Developers. $10 For Indian websites only.">
<meta name="keywords" content="Veer Metri,Vir Metryi,Veer, Metri Veer, VM Inc,VM,Low cost websites by vm,Vm web developers,Veer Metri Institution, Veer Mhetry, Veer Mahtre,Veer Metri Is Great, Everthing is VM,Vm,MV Veer's VM,etc">
<meta name="author" content="Veer Metri">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Latest compiled and minified CSS -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery library -->

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Latest compiled JavaScript -->

<!--W3 school-->
<link rel="stylesheet" href="w3.css">
<!--W3 school-->
<link rel="icon" href="icon.ico" type="image/gif" sizes="16x16">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117119391-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117119391-1');
</script>

<!-- Google Analytics -->

<!-- Google Adsense -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9214018883690570",
    enable_page_level_ads: true
  });
</script>
<!-- Google Adsense -->
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
<style>
body {
    font-family: 'Lobster', cursive;font-size: 22px;
}
</style>
<title>VM</title>

</head>
<body>
  <nav class="navbar navbar-inverse">
 <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">VM</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="about.php">About<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="contact.php">Contact</a></li>
          <li><a href="aim.php">Our Aim</a></li>
          <li><a href="future.php">Future</a></li>
        </ul>
      </li>
      <li><a href="contact.php">Help</a></li>
    </ul>
<?php
 if (isset($_SESSION['u_id'])) {
 			echo '<ul class="nav navbar-nav navbar-right">
				<form action="includes/logout.inc.php" method="POST" >
				<span class="glyphicon glyphicon-log-out" style="background-color:#333; color:white;"></span>
				<button type="submit" name="submit" class="btn navbar-btn" style="background-color:#333; color:white;">Log Out</button></a>
        </form>
				</ul>
				</div>

			' ;
 			} else {
 				echo '<ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
	</div>
	' ;
 			}
?>
  </div>
</nav>

  </div>
