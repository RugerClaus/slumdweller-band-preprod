<?php 

    include 'session.php';

    if(isset($_SESSION['user_id'])){
        unset($_SESSION['user_id']);
    }
    header('location: ../admin/login_page.php');
    die;
?>