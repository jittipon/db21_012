<?php class orderDetailController{

            public function index()
            {
                $orderDetailList=orderDetail::getAll();
                require_once('views/orderDetail/index_orderDetail.php');
            }
            public function delete()
            {

                $id = $_GET['orderDetailID'];
              
                //$orderDetail = orderDetail::delete($id);
                echo ">>>>>>>>>>>>>>$id<<<<<<<<<<<<<";
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
    }
?>