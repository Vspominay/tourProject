<?php

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];

$error = '';

if (trim($email) == '') {
    $error = 'Enter your email!';
} else if (trim($name) == '') {
    $error = 'Enter your name!';
} else if (trim($date) == '') {
    $error = 'Enter date for your trip!';
}

if ($error != '') {
    echo $error;
    exit;
}

$subject = "=?utf-8?B?" . base64_encode("New booking trip. User {$email}") . "?=";
$prepearedMail = "New booking!. User name: {$name}. User email: {$email}. Trip date: {$date}";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

header('Location: ../../index.php');
exit;
mail('dmytro.horkun@nure.ua', $subject, $prepearedMail, $headers);
