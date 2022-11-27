<?php

include '../Model/connection.php';
include 'session.php';

$name = $_POST['name'];
$type = $_POST['type'];
$image = $_POST['image'];
$price = $_POST['price'];
$id = $_POST['id'];

$slumdweller->query("INSERT INTO `cart` (product,qty,type,image,price,id) values ('$name',1,'$type','$image','$price','$id')");
if($slumdweller->error){
    echo "Product is already in cart";
}
$_SESSION['page'] = "Albums_and_Merch";
$page = $_SESSION['page'];
header("location: ../../public/index.php?=$page");