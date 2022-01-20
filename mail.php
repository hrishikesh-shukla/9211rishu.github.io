<?php

$recepient = "hello@hrishikeshshukla.in";
$sitename = "Hrishikesh Anila Shukla Portfolio Website";

$name = trim($_POST["name"]);
$subject = trim($_POST["subject"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);
$genMessage = "Name: $name \nEmail: $email \nText: $text";

$pagetitle = "New message from the \"$sitename\"";
boolean isMailSent = mail($recepient, $pagetitle, $genMessage, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
if(isMailSent){
    alert('Great! The mailhas been sent.');
    window.location.href='index.html#contact';
}else{
    alert('O Ho! There has been some error and we could not send your mail.');
    window.location.href='index.html#contact';
}