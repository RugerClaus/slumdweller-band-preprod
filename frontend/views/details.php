<section class="details">
    

    <h1><?php echo $_SESSION['product']["name"]; ?></h1>
    <img src="<?php echo "../admin/" . $_SESSION['product']['image1'] ?>" alt="">
    <p><?php echo $_SESSION['product']['description']; ?></p>
</section>
