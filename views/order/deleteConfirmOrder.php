<?php 
    echo "<br> Are you sure to delete this Order $order->orderId <br><br>"; 
?>

<form method="get" action="">

    <input type="hidden" name="controller" value="order" />
    <input type="hidden" name="orderId" value="<?php echo $order->orderId; ?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="deleteOrder">Delete</button>

</form>
