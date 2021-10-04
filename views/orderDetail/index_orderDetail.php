
<table border = 1>
<tr> <td>order detail id</td><td>order detail amount</td><td>order detail color amount</td><td>order out id</td><td>product with color</td>
<td>update</td><td>delete</td></tr>
new orderDetail <a href=?controller=orderDetail&action=newOrderDetail>click</a><br>
<?php 
       
        foreach($orderDetailList as $orderDetail){
            echo "<tr><td>$orderDetail->orderDetailID</td>

            <td>$orderDetail->orderDetailAmount</td>
            <td>$orderDetail->orderDetailColorAmount</td>
            <td>$orderDetail->orderOutID</td>
            <td>$orderDetail->productWithColorID</td>
            <td>[<a href=?controller=orderDetail&action=update>update </a>]</td>
            <td>[<a href=?controller=orderDetail&action=delete&orderDetailID=$orderDetail->orderDetailID>delete</a>]</td>
            </tr>";
    }
    
    echo "</table>";
?>

