<?php 
    echo "<br> Are you sure to delete this Order <br>
        $orderId
        <br> $order->orderId <br>"; 
?>

<form method="get" action="">

    <input type="hidden" name="controller" value="order" />
    <input type="hidden" name="OrderOut_ID" value="<?php echo $order->orderId; ?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="deleteOrder">Delete</button>

</form>
