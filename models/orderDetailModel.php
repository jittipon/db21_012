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
        require("connection_connect.php");
        $sql = "Delete from OrderDetail where OrderDetail.OrderDetail_ID='$id'";
        $result = $conn->query($sql);
        require("connection_close.php");

        
    }
    public static function add($orderDetailID, $orderDetailAmount,$orderDetailColorAmount , $orderOutID, $productWithColorID){
       

        require("connection_connect.php");
        $sql = "INSERT INTO `OrderDetail` (`OrderDetail_ID`, `OrderDetail_Amount`, `OrderDetail_ColorAmount`, `OrderOut_ID`, `ProductWithColor_ID`) VALUES ('$orderDetailID', '$orderDetailAmount', '$orderDetailColorAmount', '$orderOutID', '$productWithColorID');";
        $result= $conn->query($sql);
        require("connection_close.php");
        return ;

    }
    public static function get($id){
        require("connection_connect.php");
        $sql = "select * from OrderDetail where OrderDetail_ID='$id'";
        $result=$conn->query($sql);
        $myRow = $result->fetch_assoc();
        $orderDetailID=$myRow['OrderDetail_ID'];
        $orderDetailAmount=$myRow['OrderDetail_Amount'];
        $orderDetailcolorAmount=$myRow['OrderDetail_ColorAmount'];
        $orderOutID=$myRow['OrderOut_ID'];
        $productWithColorID=$myRow['ProductWithColor_ID'];
        
        require("connection_close.php");
        return new orderDetail($orderDetailID, $orderDetailAmount, $orderDetailcolorAmount, $orderOutID, $productWithColorID);
    }

    public static function search($key){
        $orderDetailList = [];

        require("connection_connect.php");
        $sql ="select * from OrderDetail where OrderDetail_ID like '%$key%' or OrderDetail_Amount like '$key' or OrderDetail_ColorAmount like '%$key%' or OrderOut_ID like '%$key%' or ProductWithColor_ID like '%$key%' ";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $orderDetailID = $my_row['OrderDetail_ID'];
            $orderDetailAmount = $my_row['OrderDetail_Amount'];
            $orderDetailColorAmount = $my_row['OrderDetail_ColorAmount'];
            $orderOutID = $my_row['OrderOut_ID'];
            $productWithColor= $my_row['ProductWithColor_ID'];


            $orderDetailList[] = new orderDetail($orderDetailID, $orderDetailAmount, $orderDetailColorAmount, $orderOutID, $productWithColor);
        }
        require("connection_close.php");
        return $orderDetailList;
    }

    public static function update($orderDetailID, $orderDetailAmount,$orderDetailColorAmount , $orderOutID, $productWithColorID,$ID){
        require("connection_connect.php");
        echo "con firm data update is $orderDetailID, $orderDetailAmount,$orderDetailColorAmount , $orderOutID, $productWithColorID , $ID";
        $sql = "UPDATE `OrderDetail` SET `OrderDetail_ID` = '$orderDetailID', `OrderDetail_Amount` = ' $orderDetailAmount', `OrderDetail_ColorAmount` = '$orderDetailColorAmount', `OrderOut_ID` = '$orderOutID', `ProductWithColor_ID` = '$productWithColorID' WHERE `OrderDetail`.`OrderDetail_ID` = '$ID';";
        $result=$conn->query($sql);
        require("connection_close.php");

    }
    
}

?>