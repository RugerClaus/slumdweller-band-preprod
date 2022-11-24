<?php
include 'backend/session.php';
$_SESSION['page'] = 'Landing';
header('location: public/index.php');
