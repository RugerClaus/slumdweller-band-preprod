<?php
    include '../backend/Controller/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slumdweller || <?php echo $_SESSION['page']?></title>
</head>
<body>
    <header class="header">

    </header>
    <main>
        <?php 
            if($_SESSION['page'] === 'Landing'){
                include '../frontend/views/landing.php';
            }
            if($_SESSION['page'] === 'Home'){
                include '../frontend/views/home.php';
            }
            if($_SESSION['page'] === 'Tour_Dates'){
                include '../frontend/views/tour_dates.php';
            }
            if($_SESSION['page'] === 'Albums_and_Merch'){
                include '../frontend/views/albums_and_merch.php';
            }
            if($_SESSION['page'] === 'About'){
                include '../frontend/views/About.php';
            }
            if($_SESSION['page'] === 'Landing'){
                include '../frontend/views/landing.php';
            }
        ?>
    </main>
</body>
</html>