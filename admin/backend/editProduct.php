<?php 
    if(isset($_POST['update'])){
        include '../../backend/Model/connection.php';
        $id = $_POST['id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $price = $_POST['price'];
        $instock = $_POST['instock'];
        $desc = $_POST['description'];
        $shopQTY = $_POST['stockquantity'];
        

        $query = "UPDATE `products`  SET `name`='$name',`description`='$desc',`type`='$type',`in_stock`='$instock',`price`='$price', `stockqty`='$shopQTY' where `product_id` = '$id'";
        $slumdweller->query($query);
        header("location: ../index.php");
    }
?>