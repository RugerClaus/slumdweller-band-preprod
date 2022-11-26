<?php 

    include '../../backend/Model/connection.php';

    $product_id = rand(200000,10000000);
    $name = $_POST['name'];
    $type = $_POST['type'];
    $instock = $_POST['instock'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $shopQTY = $_POST['stockquantity'];
    $uploaddir = '../assets/images';
    $uploadfile1 = $uploaddir . basename($_FILES['image1']['name']);
    $uploadfile2 = $uploaddir . basename($_FILES['image2']['name']);
    $uploadfile3 = $uploaddir . basename($_FILES['image3']['name']);
    $uploadfile4 = $uploaddir . basename($_FILES['image4']['name']);
    $uploadfile5 = $uploaddir . basename($_FILES['image5']['name']);
    
    echo '<pre>';
    if (move_uploaded_file($_FILES['image1']['tmp_name'], $uploadfile1)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
    if (move_uploaded_file($_FILES['image2']['tmp_name'], $uploadfile2)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
    if (move_uploaded_file($_FILES['image3']['tmp_name'], $uploadfile3)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
    if (move_uploaded_file($_FILES['image4']['tmp_name'], $uploadfile4)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
    if (move_uploaded_file($_FILES['image5']['tmp_name'], $uploadfile5)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
    echo 'Here is some more debugging info:';
    print_r($_FILES); 
    
    $slumdweller->query("INSERT INTO `products`(product_id,name,image1,image2,image3,image4,image5,type,in_stock,description,price) VALUES('$product_id','$name','$uploadfile1','$uploadfile2','$uploadfile3','$uploadfile4','$uploadfile5','$type','$instock','$desc','$price')") or die($connection->error);
    header('location: ../index.php');

    