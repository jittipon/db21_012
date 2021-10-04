<form method="get" action="">
    <label>Product_ID  <input type="text" name="Price_ID"  /></label><br>
    <label>Price_Price  <input type="text" name="Price_Price"  /></label><br>
    <label>Price_ColorPrice  <input type="text" name="Price_ColorPrice" /></label><br>
    <label>Product_ID  <select name="Product_ID">
    <?php foreach($product_list as $product){
        echo"<option value=$product->id>$product->id</option>";
        }
    ?>
    </select></label><br><br>
    <input type="hidden" name="controller" value="PriceRange"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addPriceRange">save</button>
    
</form>
