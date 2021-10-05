<?php

class PriceRangeController
{
    public function index()
    {
        echo "INDEXXXXXX";
        
        $pricerange_list = Pricerange::getAll();
        require_once('views/pricerange/index_priceRange.php');
    }

    public function search(){
        echo "SEARCHHHHHHHHHHHH";
        $key = $_GET['key'];
        $pricerange_list = Pricerange::search($key);

        require_once('views/pricerange/index_priceRange.php');
    }

    public function newPriceRange(){
        $product_list = Product::getAll();
        require_once('views/pricerange/newPriceRange.php');
    }

    public function addPriceRange(){
        $priceID = $_GET['priceID'];
        $pricePrice = $_GET['pricePrice'];
        $priceColor = $_GET['priceColor'];
        $priceRangeAmount = $_GET['priceRangeAmount'];
        $priceProductID = $_GET['priceProductID'];
        PriceRange::add($priceID,$pricePrice,$priceColor,$priceRangeAmount,$priceProductID);
        PriceRangeController::index();
    }

    public function deleteConfirm(){
        $priceProductID = $_GET['priceProductID'];
        $priceRange = PriceRange::get($priceProductID);

        require_once("./views/pricerange/deleteConfirm.php");

    }

    public function delete(){
        
        $priceProductID = $_GET['priceID'];

        PriceRange::delete($priceProductID);

        PriceRangeController::index();
    }


}
?>
