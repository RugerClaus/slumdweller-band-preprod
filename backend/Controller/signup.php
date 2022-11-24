<?php

include '../Model/connection.php';
include 'session.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //something was posted

    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm"];
    $password_hash = password_hash($confirm_password,PASSWORD_BCRYPT);

    if(!empty($password) && !is_numeric($user_name)){
        //save to db

        $user_id = random_num(20);
        $query = "INSERT INTO users (user_id,user_name,password) values ($user_id,'$user_name','$password_hash')";

        mysqli_query($login_system,$query);
        header("location: ../../admin/login_page.php");
        die;
    }

    else {
        echo "Please enter valid info";
    }
    
}