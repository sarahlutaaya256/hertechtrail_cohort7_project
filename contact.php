<?php


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    // $subject=$_POST['sub'];
    $message=$_POST['mess'];

    $mailTo = "sarahlory2@gmail.com";
    $headers ="from: ".$email;
    $text ="You have a message .$name:\n\n" .$message;
     
    mail( $mailTo,$name,$text,$headers);
    header( "Location:contact.html?Message sent");



}




?>