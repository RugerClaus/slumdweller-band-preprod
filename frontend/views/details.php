<section class="details">
    

    <h1><?php echo $_SESSION['product']["name"]; ?></h1>
    <img class="productImage" src="<?php echo "../admin/" . $_SESSION['product']['image1'] ?>" alt="<?php echo $_SESSION['product']['name'] ?>">
    <p><?php echo $_SESSION['product']['desc'] ?></p>
    <span class="currencySymbol"><?php echo $ipdat->geoplugin_currencySymbol . "\n"; ?><span class="price"><?php echo intval($_SESSION['product']['price']); ?></span></span>
    <div class="subimages">
        <img src="<?php if(strlen($_SESSION['product']['image2']) > 1){ echo '../admin/' . $_SESSION['product']['image2'];}else{echo "No Image";} ?>" class="subimage">
        <img src="<?php if(strlen($_SESSION['product']['image3']) > 1){ echo '../admin/' . $_SESSION['product']['image3'];}else{echo "No Image";} ?>" class="subimage">
        <img src="<?php if(strlen($_SESSION['product']['image4']) > 1){ echo '../admin/' . $_SESSION['product']['image4'];}else{echo "No Image";} ?>" class="subimage">
        <img src="<?php if(strlen($_SESSION['product']['image5']) > strlen('../admin/assets/images')){ echo '../admin/' . $_SESSION['product']['image5'];}?>" class="subimage">
    </div>

</section>
