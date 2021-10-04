<?php class productWithColor{

    public $productWithColorID;
    public function __construct($productWithColorID){
        $this->productWithColorID = $productWithColorID;
    }
    public static function getAll(){

        $productWithColorList = [];

    
        require("connection_connect.php");
        $sql = "select distinct * from ProductWithColor";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){
            #echo $myRow['ProductWithColor_ID'];
            $productWithColorID = $myRow['ProductWithColor_ID'];
            $productWithColorList[] = new productWithColor($productWithColorID);
        }
        require("connection_close.php");
        return $productWithColorList;

    }

}
?>