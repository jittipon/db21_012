<?php
class Order
{
    public $O_ID;
    public $orderDate;
    public $customerId;
    public $customerName;
    public $employeeId;
    public $employeeName;

  public function _construct($orderId,$orderDate,$customerId,$customerName,$employeeId,$employeeName)
  {
      $this->orderId = $orderId;
      $this->orderDate = $orderDate;
      $this->customerId = $customerId;
      $this->customerName = $customerName;
      $this->employeeId = $employeeId;
      $this->employeeName = $employeeName;
  }

  public static function get($orderId)
  {
      require("connection_connect.php");
      $sql = "";
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
}
?>
