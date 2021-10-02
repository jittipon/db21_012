<?php
$controllers = array('pages'=>['home','error']); //list controller and action
function call($controller,$action)
{
    require_once();
    switch($controller)
    {
        case "pages":   $controller = new PagesController();
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
