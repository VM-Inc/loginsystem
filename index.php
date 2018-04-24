<?php
include_once 'header.php';
include_once 'dbh.inc.php';?>
<?php

$sql = "SELECT * FROM datamang WHERE name='live' ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
$numlive = $row['value'];
$_SESSION['liveincre'] = '1' + $numlive ;
$liveincre = $_SESSION['liveincre'];
if (isset($_SESSION['live'])) {
  if ($_SESSION['live'] == "yes") {
    $sql = "SELECT * FROM datamang WHERE name='live' ";
    $result = mysqli_query($conn, $sql);$resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $sql = "UPDATE datamang SET value='$liveincre' WHERE name='live'";
    mysqli_query($conn, $sql);
    $_SESSION['live'] = "no" ;
  }

}

if (isset($_SESSION['u_id'])) {
  $uid = $_SESSION['u_uid'] ;
	if ($_SESSION['error'] == "no") {
    echo '	<div class="alert alert-success"
            ><strong>Success!</strong> You loged In. </div>' ; $_SESSION['error'] = "done";
    }
     if (isset($_SESSION['u_view'])) {
      if ($_SESSION['u_view'] == '1') {
        echo '
    <div class="alert alert-danger"> <strong>Alert!</strong>Some one tried to
      login with your user wrong password. <a href="index.php"><span class="glyphicon glyphicon-remove"></span></a>
    </div>
    ' ;
    $_SESSION['u_view'] = 'done' ;
  } else if ($_SESSION['u_view'] == 'done') {
    $sql = "UPDATE users SET view='0' WHERE user_uid='$uid';";
    mysqli_query($conn, $sql);
  }
} echo '
    <style type="text/css">
body {
  background-image: url("background5.jpg") ;
  position: relative;
  opacity: 1;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
<div class="content" >
    <div class="container">
      <div class="jumbotron" align="center">
        <h1> Welcome '.$_SESSION['u_first'].' </h1>
        <p align="center"> Let s start by startup manual. </p>
      </div>
    </div>
    ';
     } else {
      echo '
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family:lobster;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3,  .bgimg-4{
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("background1.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("background2.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("background3.jpg");
  min-height: 400px;
}

.bgimg-4 {
  background-image: url("background.jpg");
  min-height: 400px;
}


.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font-family :lobster;
  color: #111;
}

</style>

</head>
<body>

<div class="bgimg-1" align="center">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7; color:black; font-size:60px;">Welcome</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Intro</h3>
  <p>Welcome to this site of VM.</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Amazing Animations</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>We make best sites on VM Inc.</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Donate</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Want to work with us then please help us by donationg.</p>
  </div>
</div>

<div class="bgimg-4">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Hello</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>We welcome you .</p>
  </div>
</div>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">Thank You</span>
  </div>
</div>
<div style="font-size:30px;" align="center"><p>Total live now '.$numlive.'&nbsp;'.'</p></div>
</body>

</html>
    '; }
?>
<?php

?>

<?php include_once 'footer.php';
?>
