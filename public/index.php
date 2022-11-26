<?php
    include '../backend/Controller/session.php';
    include '../backend/Model/connection.php';
    
    $products = $slumdweller->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slumdweller || <?php echo $_SESSION['page']?></title>
    <link rel="stylesheet" href="assets/stylesheets/main/index.css">
</head>
<body>
    <header class="header">
        <form action="../backend/router.php" method="get">
            <input type="submit" name="Home" value="Home">
            <input type="submit" name="Tour_Dates" value="Tour Dates">
            <input type="submit" name="Albums_and_Merch" value="Albums and Merch">
            <input type="submit" name="About" value="About">
            <input type="submit" name="Contact" value="Contact">
        </form>
    </header>
    <div class="sidebar">
            <a href="https://www.facebook.com/Slumdwellerband/" target="_blank"><img src="assets/icons/facebook.png" alt="Facebook"></a>
            <a href="https://twitter.com/Slumdweller4" target="_blank"><img src="assets/icons/twitter.svg" alt="Twitter"></a>
            <a href="https://www.instagram.com/slumdweller_/" target="_blank"><img src="assets/icons/instagram.svg" alt="Instagram"></a>
            <a href="https://open.spotify.com/artist/0OivFr63rPkaxNgXI3iweU?si=OKpsgI8RQgKZ_aBxvde09w" target="_blank"><img src="assets/icons/spotify.svg" alt="Spotify"></a>
            <a href="https://www.youtube.com/channel/UCbZ4oFgZPT7tRYscrwjUEwg" target="_blank"><img src="assets/icons/youtube.svg" alt="YouTube"></a>
            <a href="https://slumdweller.bandcamp.com/" target="_blank"><img src="assets/icons/bandcamp.svg" alt="BandCamp"></a>
    </div>
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
                include '../frontend/views/about.php';
            }
            if($_SESSION['page'] === 'Contact'){
                include '../frontend/views/contact.php';
            }
            if($_SESSION['page'] === 'Details'){
                include '../frontend/views/details.php';
            }
            
            
        ?>
    </main>
</body>
</html>