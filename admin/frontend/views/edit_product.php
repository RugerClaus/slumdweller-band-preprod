<?php 
 $product = new Product($_GET['id'],$_GET['name'],$_GET['image1'],$_GET['image2'],$_GET['image3'],$_GET['image4'],$_GET['image5'],$_GET['type'],$_GET['instock'],$_GET['description'],$_GET['price'],$_GET['stockquantity']);
?>

<section class="productEditor">
    <img src="<?php echo $product->image1 ?>" alt="Error">
    <form action="backend/editProduct.php" enctype="multipart/form-data" method="post">
        <input type="hidden" name="id" value="<?php echo $product->product_id ?>">
        <p>Name:</p>
        <input type="text" name="name" value="<?php echo $product->name?>">
        <p>Type:</p>
        <input type="text" name="type" value="<?php echo $product->type?>">
        <p>Price:</p>
        <span>$:<input type="text" name="price" value="<?php echo $product->price?>"></span>
        <p>In Stock?:</p>
        <input type="text" name="instock" value="<?php if($product->in_stock == 1){echo "yes";}else{echo "no";} ?>">
        <p>Quantity in stock:</p>
        <input type="number" name="stockquantity" value="<?php echo $product->shopQTY?>">
        <p>Description: </p>
        <textarea name="description" style="font-family: helvetica; resize: none;"  cols="30" rows="10"><?php echo $product->description ?></textarea>
        
        
        <input type="submit" name="update" class="btn" />
        
        
    </form>
    <h1>Edit Images</h1>
    <p>Note: you will have to update every image when you use this form.</p>
    <form action="backend/editImages.php" enctype="multipart/form-data" method="post">
            <h2>Image 1:</h2>
            <input type="file" name="image1" value="<?php echo $product->image1?>">
            <h2>Image 2:</h2>
            <input type="file" name="image2" value="<?php echo $product->image2?>">
            <h2>Image 3:</h2>
            <input type="file" name="image3" value="<?php echo $product->image3?>">
            <h2>Image 4:</h2>
            <input type="file" name="image4" value="<?php echo $product->image4?>">
            <h2>Image 5:</h2>
            <input type="file" name="image5" value="<?php echo $product->image5?>">
            <input type="submit" class="btn" name="updateImages">
        </form>
</section>