<section class="merch">
    <?php 
        while($row = $products->fetch_assoc()){
    ?>

    <div class="product">
        <img src="../admin/<?php echo $row['image1']; ?>" alt="error">
    </div>

    <?php } ?>
</section>