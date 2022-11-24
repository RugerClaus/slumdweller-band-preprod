<?php
    include '../../admin/backend/session.php';
    include 'classes.php';
    
    $admin = new Admin($_SESSION['user_name']);