<?php
class Order
  public $orderId;
  public $orderDate;
  public $customerId;
  public $EmployeeId;
  public $orderDate;
  public $orderDate;

punlic function_construct($orderId,$orderDate)
{
    $this->orderId = $orderId;
    $this->orderDate = $orderDate;
}

public static function getAll()
{
    $orderList = [];
    require("connection_connect.php");
    $sql = "select * from OrderOut";
    $result = $conn->query($sql);
    while($my_roow == $result->fetch_assoc())
    {
        $order_id = $my_row[OrderOut_ID];
        $order_date = $my_row[OrderOut_DateOrder];
        $orderList[] = new Order($order_id,$order_date);
    }
    require("connection_close.php");
    return $orderList;
}
?>
