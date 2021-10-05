<?php class orderDetailController{

            public function index()
            {
                $orderDetailList=orderDetail::getAll();
                require_once('views/orderDetail/index_orderDetail.php');
            }
            public function deleteConfirm()
            {

                $id = $_GET['orderDetailID'];
                $orderDetail = orderDetail::get($id);
                require_once('views/orderDetail/delete_orderDetail.php');

            }
            public function newOrderDetail(){
                $orderOutList=orderOut::getAll();  
                $productWithColorList=productWithColor::getAll();   
                require_once('views/orderDetail/new_orderDetail.php');
            }
            public function addOrderDetail()
            {
              
                $orderDetailID = $_GET['orderDetailID'];
                $orderDetailAmount = $_GET['orderDetailAmount'];
                $orderDetailColorAmount = $_GET['orderDetailColorAmount'];
                $orderOutID= $_GET['orderOutID'];
                $productWithColorID = $_GET['productWithColorID'];

               

                orderDetail::add($orderDetailID, $orderDetailAmount,$orderDetailColorAmount , $orderOutID, $productWithColorID);
                orderDetailController::index();
            }   
            public function delete(){
                $id = $_GET['orderDetailID'];
                echo "555";
                echo $id;
                orderDetail::delete($id);
                orderDetailController::index();
            }
            public function search(){
                $key = $_GET['key'];
                $orderDetailList=orderDetail::search($key);
                require_once('views/orderDetail/index_orderDetail.php');
            }

            public function updateForm(){
                $id = $_GET['orderDetailID'];
                #$productWithColorID = $_GET['productWithColorID'];
                $orderDetail = orderDetail::get($id);
                $productWithColorList = productWithColor::getAll();
                $orderOutList = orderOut::getAll();
                echo "order Detail produectWithColor is $orderDetail->prductWithColorID";
                echo "now is up date : ";
                echo $id;
                require_once('views/orderDetail/updateForm_orderDetail.php');    
            }

            public function update(){
                $ID = $_GET['ID'];
                echo "<< update orderDetail ID is $ID >>";
                $orderDetailID = $_GET['orderDetailIDUpdate'];
                $orderDetailAmount = $_GET['orderDetailAmount'];
                $orderDetailColorAmount = $_GET['orderDetailColorAmount'];
                $orderOutID = $_GET['orderOutID'];
                $productWithColorID = $_GET['productWithColorID'];
                echo"<< $orderDetailID , $orderDetailAmount , $orderDetailColorAmount , $orderOutID , $productWithColorID , $ID >>";
                orderDetail::update($orderDetailID, $orderDetailAmount,$orderDetailColorAmount , $orderOutID, $productWithColorID,$ID);
                orderDetailController::index();
            }
    }
?>