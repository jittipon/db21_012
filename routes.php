<?php
$controllers = array('pages'=>['home','error']); //list controller and action
function call($controller,$action)
{
    echo "routes to ".$comtroller."-".$action."<br>";
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
