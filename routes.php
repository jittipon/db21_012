<?php
//$controllers = array('pages'=>['home','error']); //list controller and action
$controllers = array('pages'=>['home','error'],'order'=>['index']);

function call($controller,$action)
{
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":   $controller = new PagesController();
                        break;
        case "order":   echo "Dream1";
                        require_once("models/orderModel.php");
                        echo "Dream2";
                        require_once("models/customerModel.php");
                        echo "Dream3";
                        require_once("models/employeeModel.php");
                        echo "Dream4";
                        $controller = new OrderController();
                        echo "Dream5";
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
