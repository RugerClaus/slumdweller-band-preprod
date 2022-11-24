<?php

include 'Controller/session.php';
include 'functions.php';
require_once 'Controller/mail.php';
include 'Model/geolocation.php';
include 'Model/connection.php';

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
    $_SESSION['page'] = 'about';
    $page = $_SESSION['page'];
    header("location: ../public/index.php?=$page");
}
if(isset($_GET['Contact'])){
    $_SESSION['page'] = 'Contact';
    $page = $_SESSION['page'];
    header("location: ../public/index.php?=$page");
}


