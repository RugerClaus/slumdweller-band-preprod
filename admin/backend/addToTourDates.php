<?php

include '../../backend/Model/connection.php';

if(isset($_POST['addtour'])) {
    $date = $_POST['date'];
    $location = $_POST['location'];

    $slumdweller->query("INSERT INTO tour(location,date) values ('$location','$date')");
    header('location: ../index.php');
}