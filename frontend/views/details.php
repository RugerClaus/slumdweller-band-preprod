<section class="details">
    

    <h1><?php echo $_SESSION['product']["name"]; ?></h1>
    <img src="<?php echo "../admin/" . $_SESSION['product']['image1'] ?>" alt="">
    <p><?php echo $_SESSION['product']['desc'] ?></p>
    <span><?php echo $ipdat->geoplugin_currencySymbol . "\n"; ?><span class="price"><?php echo intval($_SESSION['product']['price']); ?></span></span>
    <div class="subimages">
        <img src="<?php echo '../admin/' . $_SESSION['product']['image2'] ?>" alt="<?php echo $_SESSION['product']['name'] ?>" class="subimage">
        <img src="<?php echo '../admin/' . $_SESSION['product']['image3'] ?>" alt="<?php echo $_SESSION['product']['name'] ?>" class="subimage">
        <img src="<?php echo '../admin/' . $_SESSION['product']['image4'] ?>" alt="<?php echo $_SESSION['product']['name'] ?>" class="subimage">
        <img src="<?php echo '../admin/' . $_SESSION['product']['image5'] ?>" alt="<?php echo $_SESSION['product']['name'] ?>" class="subimage">
    </div>

</section>
