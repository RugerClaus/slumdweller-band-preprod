<section class="merch">
    <?php 
        while($row = $products->fetch_assoc()){
    ?>

    <div class="product">
        <h2><?php echo $row['name']; ?></h2>
        <img src="../admin/<?php echo $row['image1']; ?>" alt="<?php echo $row['name']; ?>">
        <form action="details.php">
            <input type="submit" name="details" value="View Details" class="btn">
        </form>
    </div>

    <?php } ?>
</section>