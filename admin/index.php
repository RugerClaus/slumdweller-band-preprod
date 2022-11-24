<?php
    include '../backend/router.php';

    $logged_in = check_login($login_system);

    if(!$logged_in){
        header('location: login_page.php');
    }else {
        header('location: admin.php');
    }