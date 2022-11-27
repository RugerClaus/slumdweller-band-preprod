<section class="details">
    
    
    <h1><?php echo $_SESSION['product']["name"]; ?></h1>
    <img class="productImage" src="<?php echo "../admin/" . $_SESSION['product']['image1'] ?>" alt="<?php echo $_SESSION['product']['name'] ?>">
    <p><?php echo $_SESSION['product']['desc'] ?></p>
    <span class="currencySymbol"><?php echo $ipdat->geoplugin_currencySymbol . "\n"; ?><span class="price"><?php echo intval($_SESSION['product']['price']); ?></span></span>
    <form action="../backend/Controller/addToCart.php" method="POST">
        <input type="hidden" name="name" value="<?php echo $_SESSION['product']['name'] ?>">
        <input type="hidden" name="type" value="<?php echo $_SESSION['product']['type'] ?>">
        <input type="hidden" name="image" value="<?php echo $_SESSION['product']['image1'] ?>">
        <input type="hidden" name="price" value="<?php echo $_SESSION['product']['price'] ?>">
        <input type="hidden" name="id" value="<?php echo $_SESSION['product']['id'] ?>">
        <input type="submit" name="add" value="Add To Cart" class="btn">
    </form>
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
