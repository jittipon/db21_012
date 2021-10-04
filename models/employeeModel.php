<?php
class Employee
{
    public $id, $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public static function getAll()
    {
        $employeeList = [];
        require("connection_connect.php");
        $sql = "select * from Employee";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()) 
        {
            $EmpID = $my_row[Employee_ID];
            $EmpName = $my_row[Employee_Name];
            $employeeList[] = new Customer($EmpID, $EmpName);
        }
        require("connection_close.php");
        return $customerList;
    }
}
?>
