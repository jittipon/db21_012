<?php
class Order
{
    public $orderId;
    public $orderDate;
    public $customerId;
    public $customerName;
    public $employeeId;
    public $employeeName;

  public function __construct($orderId,$orderDate,$customerId,$customerName,$employeeId,$employeeName)
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
      $sql = "SELECT OrderOut_ID,OrderOut_DateOrder,Customer_Name,Employee_Name FROM OrderOut
                NATURAL JOIN Customer NATURAL JOIN Employee
                WHERE OrderOut_ID = '$orderId'";
      $result = $conn->query($sql);
      $my_row = $result->fetch_assoc();
      $orderId = $my_row["OrderOut_ID"];
      $orderDate = $my_row["OrderOut_DateOrder"];
      $customerId = $my_row["Customer_ID"];
      $customerName = $my_row["Customer_Name"];
      $employeeId = $my_row["Employee_ID"];
      $employeeName = $my_row["Employee_Name"];
      require("connection_close.php");
      return new Order($orderId,$orderDate,$customerId,$customerName,$employeeId,$employeeName);
  }
    
  public static function getAll()
  {
      $orderList = [];
      require("connection_connect.php");
      $sql = "SELECT OrderOut_ID,OrderOut_DateOrder,Customer_Name,Employee_Name FROM OrderOut
                NATURAL JOIN Customer NATURAL JOIN Employee
                ORDER BY OrderOut_ID";
      $result = $conn->query($sql);
      while($my_row = $result->fetch_assoc())
      {
            $orderId = $my_row["OrderOut_ID"];
            $orderDate = $my_row["OrderOut_DateOrder"];
            $customerId = $my_row["Customer_ID"];
            $customerName = $my_row["Customer_Name"];
            $employeeId = $my_row["Employee_ID"];
            $employeeName = $my_row["Employee_Name"];
            $orderList[] = new Order($orderId,$orderDate,$customerId,$customerName,$employeeId,$employeeName);
      }
      require("connection_close.php");
      return $orderList;
  }
  
  public static function search($key)
  {
      $orderList = [];
      require("connection_connect.php");
      $sql = "SELECT OrderOut_ID,OrderOut_DateOrder,Customer_Name,Employee_Name FROM OrderOut
                NATURAL JOIN Customer NATURAL JOIN Employee
                WHERE (OrderOut_ID LIKE '%$key%' OR OrderOut_DateOrder LIKE '%$key%' OR Customer_Name LIKE '%$key%' OR Employee_Name LIKE '%$key%')";
      $result = $conn->query($sql);
      while($my_row = $result->fetch_assoc())
      {
            $orderId = $my_row["OrderOut_ID"];
            $orderDate = $my_row["OrderOut_DateOrder"];
            $customerId = $my_row["Customer_ID"];
            $customerName = $my_row["Customer_Name"];
            $employeeId = $my_row["Employee_ID"];
            $employeeName = $my_row["Employee_Name"];
            $orderList[] = new Order($orderId,$orderDate,$customerId,$customerName,$employeeId,$employeeName);
      }
      require("connection_close.php");
      return $orderList;
  }
    
  public static function add($orderId,$orderDate,$customerId,$employeeId)
  {
      require("connection_connect.php");
      echo "$orderId,$orderDate,$customerId,$employeeId";
      $sql = "INSERT INTO `OrderOut` (`OrderOut_ID`, `OrderOut_DateOrder`, `Customer_ID`, `Employee_ID`, `OrderOut_PaymentCondition`, `OrderOut_EarnestMoneyREQ`, `OrderOut_EarnestMoneyREQStatus`, `OrderOut_EarnestMoneyPaidDate`, `Approver_ID`, `OrderOut_DateApprove`, `OrderOut_ReservePercent`, `OrderOut_Vat`, `OrderOut_Status`, `OrderOut_DeliveryStatus`) VALUES ('$orderId', '$orderDate', '$customerId', '$employeeId', '0', NULL, NULL, NULL, NULL, NULL, NULL, '0.7', 'offered', NULL);";
      $result = $conn->query($sql);
      require("connection_close.php");
      return "Add Success rows";
  }
    
  public static function update($orderId,$orderDate,$customerId,$employeeId)
  {
      require("connection_connect.php");
      $sql = "UPDATE OrderOut SET OrderOut_DateOrder = '$orderDate',Employee_ID = '$employeeId',Customer_ID = 'customerId' WHERE OrderOut.Order_ID = '$orderId'";
      $result = $conn->query($sql);
      require("connection_close.php");
      return "Update Success rows";
  }
  
  public static function delete($orderId)
  {
      require("connection_connect.php");
      $sql = "DELETE FROM OrderOut WHERE OrderOut.Order_ID = '$orderId'";
      $result = $conn->query($sql);
      require("connection_close.php");
      return "Delete Success rows";
  }
}
?>
