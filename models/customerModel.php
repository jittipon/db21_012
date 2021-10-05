<?php
class Customer
{
    public $id, $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public static function getAll()
    {
        $customerList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Customer";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()) 
        {
            $CusID = $my_row['Customer_ID'];
            $CusName = $my_row['Customer_Name'];
            $customerList[] = new Customer($CusID, $CusName);
        }
        require("connection_close.php");
        return $customerList;
    }
}
?>
