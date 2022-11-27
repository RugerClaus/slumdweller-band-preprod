<section class="cart">
<?php while($row = $cart->fetch_assoc()){ ?>

    <form action="../backend/Controller/proceedToCheckout.php" method="post">
        <table>
            <tr>
                <td>
                    <?php echo $row['product'] ?>
                </td>
                <td>
                    <input type="number" name="qty" value="<?php echo $row['qty'] ?>">
                </td>
                <td>
                    <img src="../admin/<?php echo $row['image'] ?>" alt="">
                </td>
                <td>
                    <?php echo $row['price'] ?>
                </td>
                <td>
                    <form action="../backend/Controller/deleteFromCart.php" method="post">
                        <input type="submit" name="delete" value="Delete">
                    </form>
                </td>
            </tr>
        </table>
        <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
        <input type="submit" value="Checkout" id="checkout" class="btn">
    </form>
    <?php } ?>
</section>