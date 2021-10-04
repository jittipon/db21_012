<?php
class PriceRange
{
    public $priceID;
    public $pricePrice;
    public $priceColor;
    public $priceRangeAmount;
    public $priceProductID;

  public function __construct($priceID,$pricePrice,$priceColor,$priceRangeAmount,$priceProductID)
  {
      $this->priceID = $priceID;
      $this->pricePrice = $pricePrice;
      $this->priceColor = $priceColor;
      $this->priceRangeAmount = $priceRangeAmount;
      $this->priceProductID = $priceProductID;
  }

  public static function get($priceID)
  {
      require("connection_connect.php");
      $sql = "SELECT * FROM Price";
      $result = $conn->query($sql);
      $priceID = $my_row["Price_ID"];
      $pricePrice = $my_row["Price_Price"];
      $priceColor = $my_row["Price_ColorPrice"];
      $priceRangeAmount = $my_row["Price_RangeAmount"];
      $priceProductID = $my_row["Product_ID"];
      require("connection_close.php");
      return $pricerangeList;
  }
    
  public static function getAll()
  {
      $pricerangeList = [];
      require("connection_connect.php");
      $sql = "SELECT * FROM Price";
      $result = $conn->query($sql);
      while($my_row = $result->fetch_assoc())
      {
            $priceID = $my_row["Price_ID"];
            $pricePrice = $my_row["Price_Price"];
            $priceColor = $my_row["Price_ColorPrice"];
            $priceRangeAmount = $my_row["Price_RangeAmount"];
            $priceProductID = $my_row["Product_ID"];
            $pricerangeList[] = new PriceRange($priceID,$pricePrice,$priceColor,$priceRangeAmount,$priceProductID);
      }
      require("connection_close.php");
      return $pricerangeList;
  }

  public static function search($key){
    $pricerangeList=[];
    require("connection_connect.php");
    $sql = "select * from Price where Price_ID like '%$key%' or Price_Price like '%$key%' or Price_ColorPrice like '%$key%' or Price_RangeAmount like '%$key%' or Product_ID like '%$key%'";
    $result = $conn->query($sql);
    while($my_row = $result->fetch_assoc()){
        $priceID = $my_row["Price_ID"];
        $pricePrice = $my_row["Price_Price"];
        $priceColor = $my_row["Price_ColorPrice"];
        $priceRangeAmount = $my_row["Price_RangeAmount"];
        $priceProductID = $my_row["Product_ID"];
        $pricerangeList[] = new PriceRange($priceID,$pricePrice,$priceColor,$priceRangeAmount,$priceProductID);
    }
    require("connection_close.php");

    return $pricerangeList;
}

public static function add($Price_ID,$Price_Price,$Price_ColorPrice,$Price_RangeAmount,$Product_ID){
    require("connection_connect.php");
    $sql = "insert into Price (Price_ID,Price_Price,Price_ColorPrice,Price_RangeAmount,Product_ID) values ('$Price_ID','$Price_Price','$Price_ColorPrice','$Price_RangeAmount','$Product_ID')";
    $result = $conn->query($sql);
    require("connection_close.php");
    return "add success $result rows";
}

    
  
}
?>
