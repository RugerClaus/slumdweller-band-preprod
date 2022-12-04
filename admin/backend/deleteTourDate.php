<?php

include '../../backend/Model/connection.php';

$id = $_POST['id'];


$slumdweller->query("DELETE FROM tour WHERE id = '$id'");
header('location: ../admin.php');