<?php
include_once 'header.php';
 ?>

<?php
if (isset($_SESSION['u_id'])) {
  if (isset($_SESSION['passerror'])) {
    if ($_SESSION['passerror'] == "done") {
      echo '<div class="alert alert-success">
        <strong>Success!</strong>
         Password Changed
      </div>
      ' ;
      $_SESSION['passerror'] = "used" ;
    } elseif ($_SESSION['passerror'] == "wrongold") {
      echo '<div class="alert alert-danger">
        <strong>Alert!</strong>
        Wrong Old Password
      </div>
      ';
      $_SESSION['passerror'] = "used";
    } elseif ($_SESSION['passerror'] == "notverify" ) {
      echo '<div class="alert alert-danger">
        <strong>Alert!</strong>
        Wrong re-typed password
      </div>
      ';

      $_SESSION['passerror'] = "used";
    } elseif ($_SESSION['passerror'] == "empty") {
      echo '<div class="alert alert-danger">
        <strong>Error!</strong>
        Fill all the fields.
      </div>
      ';

      $_SESSION['passerror'] = "used";
    }
    echo '</div></div> ';
  }
  echo '
  <div class="col-sm-12" align="center">
    <form action="includes/pass.inc.php" method="POST">
    Old-Password:<input type="password" name="old-pwd" placeholder="Old-Password"><br><br>
    New-Password:<input type="password" name="new-pwd" placeholder="New-Password"><br><br>
    Retype-Password:<input type="password" name="re-pwd" placeholder="Retype-Password"><br><br>
    <button type="submit" name="submit">Submit</button><br><br>
    </form>
  </div>
  ';
} else {
  echo '
  <div class="col-sm-12">
  <p>
  Login To access this page.
  </p>
  </div>
  ' ;
}
 ?>

 <?php
include_once 'footer.php';
  ?>
