<html>
<head><title>PHP Mail Sender</title></head>
<body>
<?php

# Retrieve the form data
$email      = $_POST['email'];
$subject    = $_POST['subject'];
$message    = $_POST['message'];

# Sends mail and report success or failure
if (mail($email,$subject,$message)) {
  echo "<h4>Thank you for sending email</h4>";
} else {
  echo "<h4>Can't send email to $email</h4>";
}
?>
</body>
<?php include_once 'footer.php';
?>
