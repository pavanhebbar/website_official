<?php
//Credits: 1stwebdesigner.com
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent = "From: $name \n  Email: $email \n Message: $message";
$recipent = "hebbar@ualberta.ca";
$mailheader = "From website contact";
mail($recipent, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you. You will get a reply soon!!";
?>
