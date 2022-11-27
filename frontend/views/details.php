<section class="details">
    

    <h1><?php echo $_SESSION['product']["name"]; ?></h1>
    <img class="productImage" src="<?php echo "../admin/" . $_SESSION['product']['image1'] ?>" alt="<?php echo $_SESSION['product']['name'] ?>">
    <p><?php echo $_SESSION['product']['desc'] ?></p>
    <span class="currencySymbol"><?php echo $ipdat->geoplugin_currencySymbol . "\n"; ?><span class="price"><?php echo intval($_SESSION['product']['price']); ?></span></span>
    <div class="subimages">
    <?php 
            if(strlen($_SESSION['product']['image2']) < strlen('../admin/assets/images/a')){
                return;
            }else {
                echo "<img src='../admin/" . $_SESSION['product']['image2'] . "' class='subimage'/>";
            }
            if(strlen($_SESSION['product']['image3']) < strlen('../admin/assets/images/a')){
                return;
            }else {
                echo "<img src='../admin/" . $_SESSION['product']['image3'] . "' class='subimage'/>";
            }
            if(strlen($_SESSION['product']['image4']) < strlen('../admin/assets/images/a')){
                return;
            }else {
                echo "<img src='../admin/" . $_SESSION['product']['image4'] . "' class='subimage'/>";
            }
            if(strlen($_SESSION['product']['image5']) < strlen('../admin/assets/images/a')){
                return;
            }else {
                echo "<img src='../admin/" . $_SESSION['product']['image5'] . "' class='subimage'/>";
            }
        ?>
    </div>

</section>
