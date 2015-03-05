<?php

$name =  $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$from = 'From: CISCFF Contact Form';
$to = 'info@blue1647.com'; //Change this email to whatever email you want the form being sent to
$subject = 'Contact from CISCFF Website';

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if (mail ($to, $subject, $body, $from)){
            //Successfully mailed!
        }
        else
        {
            //Not Successfully Mailed
        }
    }
}
?>