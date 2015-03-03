<?php
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $from = 'From: CISCFF Contact Form';
    $to = 'emile@blue1647.com';
    $subject = 'Contact from CISCFF Website';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>