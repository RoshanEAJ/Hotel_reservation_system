<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$receiver = "roshaneajr@gmail.com";

$email_content = "\n\n You have recieve an email from ".$name."(".$email.").\n\n".$message;

$email_headers = "From: roshaneajr@gmail.com";

if(mail($receiver,$email_content, $email_headers)){

    echo"Email sent!";
}else{
    echo"Email sent!";
}

?>