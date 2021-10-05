<?php
//$controllers = array('pages'=>['home','error']); //list controller and action
$controllers = array('pages'=>['home','error'],'order'=>['index','newOrder'],
'priceRange'=>['index','newOrder','search','addPriceRange','newPriceRange', 'deleteConfirm','delete']);

function call($controller,$action)
{
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":   $controller = new PagesController();
                        break;
        case "order":   require_once("models/orderModel.php");
                        require_once("models/customerModel.php");
                        require_once("models/employeeModel.php");
                        $controller = new OrderController();
                        break;
        case "priceRange":  
                        require_once("models/priceRangeModel.php");
                        require_once("models/productModel.php");
                        $controller = new PriceRangeController();
                        break;
    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
      call($controller,$action);
    }
    else
    {
      call('pages','error');
    }
}
else
{
  call('pages','error');
}
?>
