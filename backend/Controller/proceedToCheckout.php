<?php

include 'session.php';
include '../Model/connection.php';

if(isset($_POST['checkout'])){
    $_SESSION['cart'] = 0;
    $slumdweller->query("DELETE FROM cart WHERE 1");
    $_SESSION['page'] = "Checkout";
    $page = $_SESSION['page'];
    $_SESSION['price'] = $_POST['price'];
    $price = $_SESSION['price'];
    header("location: ../../public/index.php?=$page?=$price");
}else {
    echo "not set post";
}