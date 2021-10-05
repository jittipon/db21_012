
<form action="" method="get">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="priceRange">
        <input type="hidden" name="action" value="search">
        <button>Search</button>
</form>

<table border = 1>
New Order : <a href="?controller=priceRange&action=newOrder">Click </a><br>
<tr>
     <td>priceID</td>
     <td>pricePrice</td>
     <td>priceColor</td>
     <td>priceRangeAmount</td>
     <td>priceProductID</td>
     <td>update</td>
     <td>delete</td>
</tr>
  
<?php
  foreach($pricerange_list as $PriceRange)
  {
       echo 
      "<tr>
      <td>$PriceRange->priceID</td>
      <td>$PriceRange->pricePrice</td>
      <td>$PriceRange->priceColor</td>
      <td>$PriceRange->priceRangeAmount</td>
      <td>$PriceRange->priceProductID</td>
      <td>
          <a href=?controller=priceRange&action=updateConfirm>
               update
          </a>
      </td>
      <td>
          <a href=?controller=priceRange&action=deleteConfirm&priceProductID=$priceRange->priceProductID>
               delete
          </a>
      </td>
      </tr>";
  }
echo "</table>";
?>
