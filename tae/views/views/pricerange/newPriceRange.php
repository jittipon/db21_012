echo "I HEAAAAAAAAAAAAA FROMMMMMMMMMM";
<!DOCTYPE html>
echo "I HEAAAAAAAAAAAAA FROMMMMMMMMMM";
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label>Product_ID<input type="text" name="Price_ID"></label><br>
        <label>Price_Price</label><input type="text" name="Price_Price"></label><br>
        <label>Price_ColorPrice<input type="text" name="Price_ColorPrice"></label><br>
        <label>Price_RangeAmount<input type="text" name="Price_RangeAmount"></label>
        <label>Product_ID<select name="Product_ID">
            <?php 
            foreach($product_list as $product){
                echo "<option value=$product->id>$product->name</option>";
            }
            ?>
        </select></label><br>
        <input type="hidden" name="controller" value="PriceRange">
        <button type="submit" name="action" value="index"> Back </button>
        <button type="submit" name="action" value="addPriceRange"> Save </button>
    </form>
</body>
</html>

echo "I HEAAAAAAAAAAAAA FROMMMMMMMMMM";