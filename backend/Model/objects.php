<?php
    include 'classes.php';
    include 'connection.php';

    $result = $slumdweller->query('SELECT * FROM products');

    $admin = new Admin($_SESSION['user_name']);