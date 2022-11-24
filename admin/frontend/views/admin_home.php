<section class="productEditor">
    <h2>Product Manager: Add Product</h2>
    <form action="addToProducts.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Product Name: ">
        <textarea name="description" style="font-family: helvetica;" id="" placeholder="Description: " cols="30" rows="10"></textarea>
        <input type="file" name="image1" value="image1">
        <input type="file" name="image2" value="image2">
        <input type="file" name="image3" value="image3">
        <input type="file" name="image4" value="image4">
        <input type="file" name="image5" value="image5">
        <label for="type">Type:</label><select name="type" id="type">
            <option value="merch">Merch</option>
            <option value="album">Album</option>
        </select>
        <label for="instock">In Stock?:</label><select name="instock" id="type">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <input type="number" placeholder="Price:" name="price" id="price" />

        <input type="submit" name='addToProducts' value='Submit to Site' class="btn">
        <input type="number" name="stockquantity" placeholder="Quantity In Stock">
    </form>
    <h2>Tour Date Manager: Add</h2>
    <form action="addToTourDates.php" method="post" >
        <input type="text" name="location" placeholder="Location:" />
        <input type="date" name="date" />
        <input type="submit" name="add" value="Add">
    </form>
</section>