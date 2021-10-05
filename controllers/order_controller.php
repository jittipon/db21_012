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
        //$order_list = Order::getAll();
        $employee_list = Employee::getAll();
        $customer_list = Customer::getAll();
        require_once('views/order/newOrder.php');
    }

    public function addOrder()
    {
        $orderId = $_GET['orderId'];
        $orderDate = $_GET['orderDate'];
        $customerId = $_GET['customerId'];
        $employeeId = $_GET['employeeId'];
        Order::add($orderId,$orderDate,$customerId,$employeeId);
        OrderController::index();
    }

    public function searchOrder()
    {
        $key = $_GET['key'];
        $order_list = Order::search($key);
        require_once('views/order/index_order.php');
    }

    public function updateOrder()
    {
        $orderId = $_GET['orderId'];
        
        $orderDate = $_GET['orderDate'];
        $customerId = $_GET['customerId'];
        $employeeId = $_GET['employeeId'];
        echo "$orderId,$orderDate,$customerId,$employeeId";
        Order::update($orderId,$orderDate,$customerId,$employeeId);
        OrderController::index();
    }

    public function updateFormOrder()
    {
        $id = $_GET['orderId'];
        $order = Order::get($id);
        $customer_list = Customer::getAll();
        $employee_list = Employee::getAll();
        require_once('views/order/updateFormOrder.php');
    }

    public function deleteOrder()
    {
        $id = $_GET['orderId'];
        Order::delete($id);
        OrderController::index();
    }

    public function deleteConfirmOrder()
    {
        $id = $_GET['orderId'];
        $order = Order::get($id);
        require_once('views/order/deleteConfirmOrder.php');
    }
}
?>
