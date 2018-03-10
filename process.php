<?php ob_start();
if (isset($_POST['submit'])) {


$to = "sherif98@hotmail.com";
$subject = $_POST['subject'];
$email = $_POST['email'];
$txt = $_POST['message'];
$header = "From: {$email}" . "\r\n" .
"CC: somebodyelse@example.com";
  mail ($to, $subject, $txt, $headers);
header("Location: contact.html");

}
 ?>
