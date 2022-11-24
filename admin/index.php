<?php
    include '../backend/router.php';
    session_start();

    $logged_in = check_login($login_system);

    if(!$logged_in){
        header('location: login_page.php');
    }else {
        $_SESSION['page'] = 'adminlanding';
        $page = $_SESSION['page'];
        header("location: admin.php?=$page");
    }