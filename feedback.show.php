<?php

session_start();

if (isset($_SESSION['admin'])) {
  if ($_SESSION['admin'] == "true") {
    include 'dbh.inc.php';

    $sql="SELECT name,feedback FROM feedback ORDER BY id ";

    if ($result=mysqli_query($conn,$sql))
      {
      // Fetch one and one row
      while ($row=mysqli_fetch_row($result))
        {
        printf ("%s (%s)\n",$row[0],$row[1]);
        echo '<hr><br>';
        }
      // Free result set
      mysqli_free_result($result);
    }

    mysqli_close($conn);

    unset($_SESSION['admin']);
  } else {
    if ($_SESSION['admin'] == "false") {
      echo '<div class="alert alert-danger"> <strong>Scam!</strong>Get away you ediot.
      </div>';
      unset($_SESSION['admin']);
    }
  }
} else {
  echo '    <form action="includes/adminverify.inc.php" method="post">
          <input type="text" name="name" placeholder="Name">
          <input type="password" name="pwd" placeholder="Age">
          <input type="submit" name="submit" value="Submit">
      </form>';
      unset($_SESSION['admin']);
}
?>
