<?php
include 'backend/Controller/session.php';
$_SESSION['page'] = 'Landing';
$page = $_SESSION['page'];
header("location: public/index.php?=$page");
