<?php 
    $product = new Product($_POST['product_id'],$_POST['name'],$_POST['image1'],$_POST['image2'],$_POST['image3'],$_POST['image4'],$_POST['image5'],$_POST['type'],$_POST['instock'],$_POST['description'],$_POST['price'], null)
?>
<section class="details">
<?php 
    echo "<h1>$product->name</h1>";
    echo "<img class='albumCover' src='$product->image1' alt='$product->name' />";
    echo "<p>" . $product->description . "</p>";
    echo $ipdat->geoplugin_currencySymbol . "\n";
    echo "<h1 class='price'>";
    echo $product->price;
    echo "</h1>";
    echo "<div class='subImages'>";
    echo "<img class='subimage' src='$product->image2' />"; 
    echo "<img class='subimage' src='$product->image3' />"; 
    echo "<img class='subimage' src='$product->image4' />"; 
    echo "<img class='subimage' src='$product->image5' />";
    echo "</div>";

?>
</section>