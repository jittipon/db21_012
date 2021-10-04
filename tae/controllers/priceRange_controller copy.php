<?php

class PriceRangeController
{
    public function index()
    {
        echo "KUYYYYYYYYYYYYYYYYYYYYY";
        $pricerange_list = Pricerange::getAll();
        require_once('views/pricerange/index_priceRange.php');
    }
}
?>
