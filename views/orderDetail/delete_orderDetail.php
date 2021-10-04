<?php
   
         echo "<br>Are you sure to delete this orderDetail<br>
            
            <br>$orderDetail->orderDetailID
            $orderDetail->orderDetailAmount
            $orderDetail->orderDetailColorAmount 
            $orderDetail->orderOutID
            $orderDetail->productWithColorID<br>";?>
<form method="get" action="">
   <input typte = "hidden" name="controller" value="orderDetail"/>
   <input type = "hidden" name="orderDetailID" value ="<?php echo $orderDetail->orderDetailID;?>"/>
   <button type="submit" name="action" value ="index">back</button>
   <button type="submit" name="action" value="delete">Delete</button>
<from>

