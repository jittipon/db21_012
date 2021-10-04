<?php class orderDetail{
    public $orderDetailID, $orderDetailAmount, $orderDetailColorAmount, $orderOutID, $productWithColorID;
    public function __construct( $orderDetailID, $orderDetailAmount, $orderDetailColorAmount, $orderOutID, $productWithColorID){
        $this->orderDetailID = $orderDetailID;
        $this->orderDetailAmount = $orderDetailAmount;
        $this->orderDetailColorAmount = $orderDetailColorAmount;
        $this->orderOutID = $orderOutID;
        $this->productWithColorID = $productWithColorID;
    }

    public static function getAll(){
        $orderDetailList = [];
        require("connection_connect.php");
        $sql = "select * from OrderDetail";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){

            $orderDetailID = $myRow['OrderDetail_ID'];
            $orderDetailAmount = $myRow['OrderDetail_Amount'];
            $orderDetailColorAmount = $myRow['OrderDetail_ColorAmount'];
            $orderOutID = $myRow['OrderOut_ID'];
            $productWithColorID  = $myRow['ProductWithColor_ID']; 

            $orderDetailList[] = new orderDetail( $orderDetailID, $orderDetailAmount, $orderDetailColorAmount, $orderOutID, $productWithColorID);
        }
        require("connection_close.php");
        return $orderDetailList;
    }

    public static function delete($id){
        require("connection_Connecct.php");
        $sql = "select * from OrderDetail where OrderDetail_ID=$id";
        $result = $conn->query($sql);
        $myRow=$result->fetch_assoc();
        $orderDetailID = $myRow['OrderDetail_ID'];
        $orderDetailAmount = $myRow['OrderDetail_Amount'];      
        $orderDetailColorAmount = $myRow['OrderDetail_ColorAmount'];
        $orderOutID = $myRow['OrderOut_ID'];
        $productWithColorID  = $myRow['ProductWithColor_ID']; 

        require("connection_close.php");
        return new orderDetail( $orderDetailID, $orderDetailAmount, $orderDetailColorAmount, $orderOutID, $productWithColorID);
        
    }
    public static function add($orderDetailID, $orderDetailAmount,$orderDetailColorAmount , $orderOutID, $productWithColorID){
        echo "$orderDetailID, $orderDetailAmount,$orderDetailColorAmount , $orderOutID, $productWithColorID";

        require("connection_connect.php");
        $sql = "INSERT INTO `OrderDetail` (`OrderDetail_ID`, `OrderDetail_Amount`, `OrderDetail_ColorAmount`, `OrderOut_ID`, `ProductWithColor_ID`) VALUES ('$orderDetailID', '$orderDetailAmount', '$orderDetailColorAmount', '$orderOutID', '$productWithColorID');";
        $result= $conn->query($sql);
        require("connection_close.php");
        return ;

    }
    
}

?>