<?php

class OrderController
{
    public function index()
    {
        
        $order_list = Order::getAll();
        require_once('views/order/index_order.php');
    }

    public function search(){
        $key = $_GET['key'];
        $rateList = Rate::search($key);
        require_once('views/rate/index_rate.php');
    }
}
?>
