<?php class orderOut{

    public $orderOutID;
    public function __construct($orderOutID){
        $this->orderOutID = $orderOutID;
    }
    public static function getAll(){

        $orderOutList = [];
        
       
        require("connection_connect.php");
        $sql = "select distinct * from OrderOut";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){
            #echo $orderOutID;
            $orderOutID = $myRow['OrderOut_ID'];
            $orderOutList[] = new orderOut($orderOutID);
        }
        require("connection_close.php");
        return $orderOutList;

    }
}

?>