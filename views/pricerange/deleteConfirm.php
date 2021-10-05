<?php echo 
"<br> Are you sure to delete this PriceRange <br>
<br> This ID = $priceRange->priceProductID <br>
<br> This ID = $Product->name ";?>

<form method="get" action="">
    <input type="hidden" name="controller" value="PriceRange"/>
    <input type="hidden" name="Product_ID" value="<?php echo $priceRange->Product_ID; ?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>