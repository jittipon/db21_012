
?>
<html>
<head></head>
<body>
   <?php //echo "controller = ".$controller.",action = ".$action;?>
  
    
   <br>
        [<a href="">Home(หน้าหลัก) </a>]
        [<a href="?controller=order&action=index">order/Dream </a>]
        [<a href="?controller=orderDetail&action=index">orderDetail </a>]
        [<a href="?controller=priceRange&action=index">priceRange/T </a>]
   <br>
   <?php echo "controller = ".$controller.",action = ".$action;?>
   <?php require_once("routes.php");?>
</body>
</html> 