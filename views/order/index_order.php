<html>
     <body>
     <br>
     จัดทำโดย 6220504666 นายธนพัฒน์ วงษ์ตั้งเจริญสุข
     <br>
     <br>
New Order : <a href="?controller=order&action=newOrder">Click </a><br>

<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="order" />
        <button type="submit" name="action" value="searchOrder"> Search </button>
    </form>
    <br>
     </body>
</html>
<table border = 1>
<tr>
     <td>OrderID</td>
     <td>OrderDate</td>
     <td>CustomerName</td>
     <td>EmployeeName</td>
     <td>update</td>
     <td>delete</td>
</tr>
  
<?php
  foreach($order_list as $OrderOut)
  {
       echo 
      "<tr>
      <td>$OrderOut->orderId</td>
      <td>$OrderOut->orderDate</td>
      <td>$OrderOut->customerName</td>
      <td>$OrderOut->employeeName</td>
      <td> <a href=?controller=order&action=updateFormOrder&orderId=$OrderOut->id> Update </a></td>
      <td> <a href=?controller=order&action=deleteConfirmOrder&orderId=$OrderOut->id> Delete </a></td>
      </tr>";
  }
echo "</table>";
?>
