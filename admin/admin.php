<?php 
    include 'backend/session.php';
    include '../backend/Model/objects.php';
    if(isset($_GET['adminhome'])){
        $_SESSION['page'] = 'Admin_Home';
        $page = $_SESSION['page'];
        header("location: admin.php?=$page");
        
    }
    if(isset($_GET['aboutmanager'])){
        $_SESSION['page'] = 'About_Manager';
        $page = $_SESSION['page'];
        header("location: admin.php?=$page");
        
    }
    if(isset($_GET['productmanager'])){
        $_SESSION['page'] = 'Product_Manager';
        $page = $_SESSION['page'];
        header("location: admin.php?=$page");
    }
    if(isset($_GET['tourdatemanager'])){
        $_SESSION['page'] = 'Tour_Date_Manger';
        $page = $_SESSION['page'];
        header("location: admin.php?=$page");
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || <?php echo $admin->name; ?></title>
    <link rel="stylesheet" href="assets/stylesheets/index.css">
</head>
<body>
    <header class="header">
        <form action="" method="get">
            <input type="submit" name="adminhome" value="Home"/>
            <input type="submit" name="aboutmanager" value="About Manager"/>
            <input type="submit" name="productmanager" value="Product Manager" />
            <input type="submit" name="tourdatemanager" value="Tour Manager" />
        </form>
    </header>
    <main>
        <?php
            while($row = $result->fetch_assoc()){
                if($_SESSION['page'] === 'Admin_Home'){
                    include_once '../frontend/views/admin/admin_home.php';
                }
                if($_SESSION['page'] === 'About_Manager'){
                    include_once '../frontend/views/admin/about_manager.php';
                }
                if($_SESSION['page'] === 'Product_Manger'){
                    include_once '../frontend/views/admin/product_manager.php';
                }
                if($_SESSION['page'] === 'Tour_Date_Manager'){
                    include_once '../frontend/views/admin/tour_date_manager.php';
                }
            }
        ?>
    </main>
</body>
</html>