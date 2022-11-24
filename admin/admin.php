<?php 

    include '../backend/Model/objects.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || <?php echo $admin->name; ?></title>
</head>
<body>
    <header class="header">
        <form action="backend/router.php" method="get">
            <input type="submit" name="Admin_Home" value="Home"/>
            <input type="submit" name="About_Manager" value="About Manager"/>
            <input type="submit" name="Product_Manger" value="Product Manager" />
            <input type="submit" name="Tour_Date_Manager" value="Tour Manager" />
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