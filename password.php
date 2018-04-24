<?php
include_once 'header.php';
 ?>

<?php
if (isset($_SESSION['u_id'])) {
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
