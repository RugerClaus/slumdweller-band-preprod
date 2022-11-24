<?php

include 'session.php';
include '../Model/connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //something was posted

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    


    if(!empty($password) && !is_numeric($user_name)){
        //read from db

        
        $query = "SELECT * FROM users WHERE user_name = '$user_name' limit 1";

        $result =  mysqli_query($login_system,$query);
        $user_data = mysqli_fetch_assoc($result);
        if($result && mysqli_num_rows($result) > 0 && password_verify($password,$user_data['password'])) {
            $_SESSION['user_id'] = $user_data['user_id'];
            $_SESSION['user_name'] = $user_name;
            $_SESSION['page'] = 'Admin_Home';
            $page = $_SESSION['page'];
            header("location: ../../admin/admin.php?=$page");
            die;
        }  else {
            header('location: ../../admin/login_page.php');
        }
    }
}