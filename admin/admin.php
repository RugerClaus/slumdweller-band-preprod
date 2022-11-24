<?php 
    include 'backend/session.php';
    include '../backend/Model/objects.php';
    include '../backend/Model/connection.php';
    
    $query = "SELECT * FROM products";

    $products = $slumdweller->query($query);
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
    <main style='text-align:center;'>
        <?php
            if($_SESSION['page'] === 'adminlanding'){
                echo "<h1 >Welcome</h1>";
            }
            if(isset($_GET['adminhome'])){
                $_SESSION['page'] = 'Admin_Home';
                $page = $_SESSION['page'];
                include 'frontend/views/admin_home.php';
                
            }
            if(isset($_GET['aboutmanager'])){
                $_SESSION['page'] = 'About_Manager';
                $page = $_SESSION['page'];
                include 'frontend/views/about_manager.php';
                
            }
            if(isset($_GET['productmanager'])){
                $_SESSION['page'] = 'Product_Manager';
                $page = $_SESSION['page'];
                include 'frontend/views/product_manager.php';
            }
            if(isset($_GET['tourdatemanager'])){
                $_SESSION['page'] = 'Tour_Date_Manger';
                $page = $_SESSION['page'];
                include 'frontend/views/tour_date_manager.php';
                
            }
        ?>
    </main>
</body>
</html>