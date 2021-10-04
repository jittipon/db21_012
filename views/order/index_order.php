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
      <td>update</td>
      <td>delete</td>
      </tr>";
  }
echo "</table>";
?>
