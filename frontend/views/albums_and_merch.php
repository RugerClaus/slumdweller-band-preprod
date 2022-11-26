<section class="merch">
    <?php 
        while($row = $products->fetch_assoc()){
    ?>

    <div class="product">
        <h2><?php echo $row['name']; ?></h2>
        <img src="../admin/<?php echo $row['image1']; ?>" alt="<?php echo $row['name']; ?>">
        <form action="../backend/router.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">
            <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
            <input type="hidden" name="image1" value="<?php echo $row['image1'] ?>">
            <input type="hidden" name="image2" value="<?php echo $row['image2'] ?>">
            <input type="hidden" name="image3" value="<?php echo $row['image3'] ?>">
            <input type="hidden" name="image4" value="<?php echo $row['image4'] ?>">
            <input type="hidden" name="image5" value="<?php echo $row['image5'] ?>">
            <input type="hidden" name="type" value="<?php echo $row['type'] ?>">
            <input type="hidden" name="description" value="<?php echo $row['description'] ?>">
            <input type="hidden" name="instock" value="<?php echo $row['in_stock'] ?>">
            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
            <input type="submit" name="details" value="View Details" class="btn">
        </form>
    </div>
            
    <?php } ?>
</section>