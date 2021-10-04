<?php

class OrderController
{
    public function index()
    {
        echo "plai";
        $order_list = Order::getAll();
        echo "plai1";
        require_once('views/order/index_order.php');
        echo "plai2";
    }
}
?>
