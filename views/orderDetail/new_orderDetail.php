

    <form method="get" action="">
        <label>orderDetailID  <input type="text" name="orderDetailID"  /></label><br>
        <label>orderAmount  <input type="text" name="orderDetailAmount"  /></label><br>
        <label>orderColorAmount  <input type="text" name="orderDetailColorAmount" /></label><br>
        <label>orderOutID  <select name="orderOutID">
        <?php foreach($orderOutList as $orderOut){
            echo"<option value=$orderOut->orderOutID>$orderOut->orderOutID</option>";
            }
        ?>
        </select></label><br>
        <label>productWithColor  <select name="productWithColorID">
        <?php foreach($productWithColorList as $productWithColor){
            echo"<option value=$productWithColor->productWithColorID>$productWithColor->productWithColorID</option>";
            }
        ?>
        </select></label><br>
        <input type="hidden" name="controller" value="orderDetail"/>
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="addOrderDetail">save</button>
    
      
    </form>
    


