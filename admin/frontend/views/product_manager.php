<table>
    
    <?php 
        while($row = $products->fetch_assoc()){
            echo "<tr>";
            echo "<td>";
            echo $row['name'];
            echo "</td>";

            echo "<td>";
            echo $row['product_id'];
            echo "</td>";

            echo "<td>";
            echo $row['description'];
            echo "</td>";

            echo "<td>";
            echo $row['type'];
            echo "</td>";

            echo "<td>";
            echo "<img src='" . $row['image1'] . "' alt='" . $row['name'] ."' />";
            echo "</td>";
            echo "<td>";
            echo $row['price'];
            echo "</td>";
            echo "<td>";
            echo $row['stockqty'];
            echo "</td>";

            echo "<td>";
            echo "<form action='product.php' method='post'>";
            echo "<input type='hidden' name='id' value='" . $row['product_id'] . "' />";
            echo "<input type='hidden' name='name' value='" . $row['name'] . "' />";
            echo "<input type='hidden' name='type' value='" . $row['type'] . "' />";
            echo "<input type='hidden' name='description' value='" . $row['description'] . "' />";
            echo "<input type='hidden' name='instock' value='" . $row['in_stock'] . "' />";
            echo "<input type='hidden' name='image1' value='" . $row['image1'] . "' />";
            echo "<input type='hidden' name='image2' value='" . $row['image2'] . "' />";
            echo "<input type='hidden' name='image3' value='" . $row['image3'] . "' />";
            echo "<input type='hidden' name='image4' value='" . $row['image4'] . "' />";
            echo "<input type='hidden' name='image5' value='" . $row['image5'] . "' />";
            echo "<input type='hidden' name='price' value='" . $row['price'] . "' />";
            echo "<input type='hidden' name='stockquantity' value='" . $row['stockqty'] . "'/>";
            echo "<input class='btn' type='submit' name='edit' value='edit'/>";
            echo "</form>";
            echo "</td>";

            echo "<td>";
            echo "<form action='deleteProduct.php' method='post'>";
            echo "<input type='hidden' name='image1' value='" . $row['image1'] . "' />";
            echo "<input type='hidden' name='image2' value='" . $row['image2'] . "' />";
            echo "<input type='hidden' name='image3' value='" . $row['image3'] . "' />";
            echo "<input type='hidden' name='image4' value='" . $row['image4'] . "' />";
            echo "<input type='hidden' name='image5' value='" . $row['image5'] . "' />";
            echo "<input type='hidden' name='id' value='" . $row['product_id'] . "' />";
            echo "<input class='btn' type='submit' name='delete' value='Delete'/>";
            echo "</form>";
            echo "</td>";

            echo "</tr>";
        }
    ?>
</table>