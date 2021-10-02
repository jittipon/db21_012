<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
  $controller = $_GET['controller'];
  $action = $_GET['action'];
}
else
{
  $controller = 'pages';
  $action = 'home';
}
?>
<html>
<head></head>
<body>
   <?php echo "controller = ".$controller.",action = ".$action;?>
   <br>
        [<a href="">Home(หน้าหลัก) </a>]
        [<a href="">quotation/Dream </a>]
        [<a href="">quotationDetail/Aor </a>]
        [<a href="">priceRange/T </a>]
   <br>
   <?php require_once("routes.php");?>
</body>
</html> 
