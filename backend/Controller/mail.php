<?php


include '../Model/Mail.php';
include '../Model/connection.php';

if(isset($_POST['send-email'])) {
    $email = new Mail($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message'],true);
    $email->send();

    
}