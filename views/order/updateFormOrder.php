<form method="get" action="">
    <label>เลขใบเสนอราคา&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $order->orderId; ?></label><br>
    <label>วันที่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" name="orderDate" value="<?php echo $order->orderDate; ?>" /></label><br>
    <label>ลูกค้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="orderId">
            <?php
            foreach ($customer_list as $Customer) {
                echo "<option value=$Customer->Customer_ID";
                if ($order->Customer_ID == $Customer->Customer_ID) {
                    echo " selected='selected'";
                }
                echo ">$Customer->Customer_Name</option>";
            } ?> </select></label><br>
    <label>พนักงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="employeeId">
            <?php
            foreach ($employee_list as $Employee) {
                echo "<option value=$Employee->Employee_ID";
                if ($order->Employee_ID == $Employee->Employee_ID) {
                    echo " selected='selected'";
                }
                echo ">$Employee->Employee_Namw</option>";
            } ?></select></label><br><br>

    <input type="hidden" name="controller" value="order" />
    <input type="hidden" name="orderId" value="<?php echo $order->orderId; ?>" />
    <button type="submit" name="action" value="index"> Back</button>
    <button type="submit" name="action" value="updateOrder"> Save</button>
</form>
