<?php
$to = "email1@localhost";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: veermetri@vm.inc" . "\r\n" .
"CC: email2@localhost";
if (mail($to, $subject, $txt, $headers)) {
    echo ("Message successfully sent!");
} else {
    echo ("Message delivery failed...");
}
?>
<?php include_once 'footer.php';
?>
