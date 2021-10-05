<form method="get" action="">
<?php $orderDetailID = $orderDetail->orderDetailID?>
<label>OrderDetailID <input type="text" name="orderDetailIDUpdate" value ="<?php echo $orderDetail->orderDetailID;?>"/></label><br>
<label>OrderDetailAmount <input type="text" name="orderDetailAmount" value ="<?php echo $orderDetail->orderDetailAmount;?>"/></label><br>
<label>OrderDetailColorAmount <input type="text" name="orderDetailColorAmount" value ="<?php echo $orderDetail->orderDetailColorAmount;?>"/></label><br>
<label>orderOutID <select name="orderOutID">
    <?php 
    foreach($orderOutList as $orderOut){
        echo "<option value=$orderDetail->orderOutID";
        if($orderOut->orderOutID==$orderDetail->orderOutID){echo "selected='selected'";}
        echo "> $orderOut->orderOutID</option>";
    } 
    ?>
</select></label><br>
<label>productWithColor <select name="productWithColorID">
    <?php foreach($productWithColorList as $productWithColor){
        echo "<option value=$orderDetail->productWithColorID";
        if($productWithColor->productWithColorID==$orderDetail->productWithColorID){echo "selected='selected'";}
        echo "> $productWithColor->productWithColorID</option>";
    } 
    ?>
</select></label><br>
<input type = "hidden" name ="controller" value ="orderDetail"/>
<input type = "hidden" name ="ID" value ="<?php echo $orderDetail->orderDetailID;?>"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="update">update</button>
</form>