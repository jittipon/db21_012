<?php

class OrderController
{
    public function index()
    {
        $order_list = Order::getAll();
        require_once('views/order/index_order.php');
    }

    public function newOrder()
    {
        $order_list = Order::getAll();
        $employee_list = Employee::getAll();
        $customer_list = Customer::getAll();
        require_once('views/order/newOrder.php');
    }

    public function addOrder(){
        
        $orderId = $_GET['orderId'];
        $orderDate = $_GET['orderDate'];
        $customerId = $_GET['customerId'];
        $employeeId = $_GET['employeeId'];
        Order::add($orderId,$orderDate,$customerId,$employeeId);
        OrderController::index();
    }
}
?>
