 <?php
include_once 'header.php';
?>
<style type="text/css">
body {
  background-image: url("background7.jpg") ;
  position: relative;
  opacity: 5;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<h1 class="jumbotron" align="center" >
Feed Back Form
</h1>
<?php
if (isset($_SESSION['feedback'])) {
  if ($_SESSION['feedback'] == "done") {
    echo '<div class="alert alert-success"
            ><strong>Thanks!</strong>Your Help will be useful. </div>';
    $_SESSION['feedback'] = "nohelp";
  }
  if ($_SESSION['feedback'] == "errorempty") {
    echo '<div class="alert alert-danger"
            ><strong>Error!</strong> Please Fill All the fields. </div>';
    $_SESSION['feedback'] = "nohelp";
  }
  if ($_SESSION['feedback'] == "errorinvalid") {
    echo '<div class="alert alert-danger"
            ><strong>Error!</strong> Please Fill The Name Properly</div>';
    $_SESSION['feedback'] = "nohelp";
  }
}
?>
<div class="col-sm-2">
  &nbsp;
</div>
<div class="col-sm-8">
  <form action="includes/feedback.inc.php" method="post">
    <b>Name:</b>  <input type="text" name="name" style="width:100%;"> <br>
    <b>Subject:</b>  <input type="text" name="subject" style="width:100%;"> <br>
    <b>Feedback:</b> <textarea cols=40 rows=10 name="msg" style="width:100%;"></textarea>
    <input type="submit" name="submit" value="Submit" style="width:100%;">
    <br>
    <br>
  </form>
</div>
<div class="col-sm-2">
  &nbsp;
</div>

<?php
include_once 'footer.php';
 ?>
