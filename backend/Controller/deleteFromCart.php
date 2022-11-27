<?php
    include '../Model/connection.php';
    include 'session.php';
    $id = $_POST['id'];

    $slumdweller->query("DELETE FROM cart WHERE id = '$id'");

    $_SESSION['page'] = 'Cart';
    $page = $_SESSION['page'];
    header("location: ../../public/index.php?=$page");
