<section class="cart">
<?php while($row = $cart->fetch_assoc()){ 
    $product = new Product($row['id'],$row['product'],$row['image'],null,null,null,null,$row['type'],null,null,$row['price'],null)
    ?>

    
        <table>
            <tr>
                <td class="productName">
                    <?php echo $row['product'] ?>
                </td>
                <td class='productImage'>
                    <img src="../admin/<?php echo $row['image'] ?>" alt="">
                </td>
                <td style="display: flex;">
                    <label for="prePrice"><?php echo $ipdat->geoplugin_currencySymbol; ?></label><input name="prePrice" class="productPrice" style="background: none;color: white; border:none;" type="number" disabled="true" value="<?php echo $row['price'] ?>">
                </td>
                <td>
                    <form action="../backend/Controller/deleteFromCart.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <input type="submit" name="delete" value="Delete">
                    </form>
                </td>
            </tr>
        </table>
        
        
    <?php } ?>
    <form action="../backend/Controller/proceedToCheckout.php" method="post">
        <input type="hidden" name="price" id="finalprice" value="">
        <input type="submit" name="checkout" value="Checkout" id="checkout" class="btn">
    </form>
</section>