
<table border = 1>
<tr> <td>order detail id</td><td>order detail amount</td><td>order detail color amount</td><td>order out id</td><td>product with color</td>
<td>update</td><td>delete</td></tr>
<br>ชาญวิชญ์ จำปา 6220504640 <br>
<br><br>new orderDetail <a href=?controller=orderDetail&action=newOrderDetail>: click</a><br><br>

<form method="get"action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="orderDetail"/>
    <button type="submit" name="action" value="search">
Search</button>
</form>
</form>

<?php 
       
        foreach($orderDetailList as $orderDetail){
            echo "<tr><td>$orderDetail->orderDetailID</td>

            <td>$orderDetail->orderDetailAmount</td>
            <td>$orderDetail->orderDetailColorAmount</td>
            <td>$orderDetail->orderOutID</td>
            <td>$orderDetail->productWithColorID</td>
            <td>[<a href=?controller=orderDetail&action=updateForm&orderDetailID=$orderDetail->orderDetailID >update </a>]</td>
            <td>[<a href=?controller=orderDetail&action=deleteConfirm&orderDetailID=$orderDetail->orderDetailID >delete</a>]</td>
            </tr>";
    }
    
    echo "</table>";
?>


