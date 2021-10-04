<?php

class PriceRangeController
{
    public function index()
    {
        
        $pricerange_list = Pricerange::getAll();
        require_once('views/pricerange/index_priceRange.php');
    }

    public function search(){
        echo "SEARCHHHHHHHHHHHH"
        $key = $_GET['key'];
        $pricerange_list = Pricerange::search($key);

        require_once('views/pricerange/index_priceRange.php');
    }


}
?>
