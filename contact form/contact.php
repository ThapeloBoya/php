<?php

if (isset($_POST['submit'])) {
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

$myMail = "thapeloboya@gmail.com";
$header = "FROM: " . $email;
$message2 = "You have received a message from " . $name . ". \n\n" . $message;

mail($myMail, $subject, $message2, $header);
header("location: contact.html?mailsend");


if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
}

?>