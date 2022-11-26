<?php

include 'Controller/session.php';
include 'functions.php';
require_once 'Controller/mail.php';
include 'Model/geolocation.php';
include 'Model/connection.php';
include 'Model/classes.php';
include 'Model/geolocation.php';

if(isset($_GET['Home'])){
    $_SESSION['page'] = 'Home';
    $page = $_SESSION['page'];
    header("location: ../public/index.php?=$page");
}
if(isset($_GET['Tour_Dates'])){
    $_SESSION['page'] = 'Tour_Dates';
    $page = $_SESSION['page'];
    header("location: ../public/index.php?=$page");
}
if(isset($_GET['Albums_and_Merch'])){
    $_SESSION['page'] = 'Albums_and_Merch';
    $page = $_SESSION['page'];
    header("location: ../public/index.php?=$page");
}
if(isset($_GET['About'])){
    $_SESSION['page'] = 'About';
    $page = $_SESSION['page'];
    header("location: ../public/index.php?=$page");
}
if(isset($_GET['Contact'])){
    $_SESSION['page'] = 'Contact';
    $page = $_SESSION['page'];
    header("location: ../public/index.php?=$page");
}
if(isset($_POST['details'])){
    $_SESSION['page'] = 'Details';
    $page = $_SESSION['page'];
    $_SESSION['product'] = array(
        'id' => $_POST['product_id'],
        'name'=> $_POST['name'],
        'image1'=>$_POST['image1'],
        'image2'=>$_POST['image2'],
        'image3'=>$_POST['image3'],
        'image4'=>$_POST['image4'],
        'image5'=>$_POST['image5'],
        'type'=>$_POST['type'],
        'desc'=>$_POST['description'],
        'instock'=>$_POST['instock'],
        'price'=>$_POST['price']
    );
    $page = $_POST['product_id'];
    header("location: ../public/index.php?=$page");
}


