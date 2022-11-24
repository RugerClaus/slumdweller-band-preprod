<?php

include '../../backend/functions.php';
include '../../backend/Model/geolocation.php';
include '../../backend/Model/connection.php';

if(isset($_GET['Admin_Home'])){
    $_SESSION['page'] = 'Admin_Home';
    $page = $_SESSION['page'];
    header("location: ../admin/admin.php?=$page");
}
if(isset($_GET['About_Manager'])){
    $_SESSION['page'] = 'About_Manager';
    $page = $_SESSION['page'];
    header("location: ../admin/admin.php?=$page");
}
if(isset($_GET['Product_Manager'])){
    $_SESSION['page'] = 'Product_Manager';
    $page = $_SESSION['page'];
    header("location: ../admin/admin.php?=$page");
}
if(isset($_GET['Tour_Date_Manger'])){
    $_SESSION['page'] = 'Tour_Date_Manger';
    $page = $_SESSION['page'];
    header("location: ../admin/admin.php?=$page");
}

