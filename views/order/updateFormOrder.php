<form method="get" action="">
    <label>เลขใบเสนอราคา&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $order->orderId; ?></label><br>
    <label>วันที่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" name="orderDate" value="<?php echo $order->orderDate; ?>" /></label><br>
    <label>ลูกค้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="customerId">
            <?php
            foreach ($customer_list as $Customer) {
                echo "<option value=$Customer->id";
                if ($order->customerId == $Customer->id) {
                    echo " selected='selected'";
                }
                echo ">$Customer->name</option>";
            } ?> </select></label><br>
    <label>พนักงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="employeeId">
            <?php
            foreach ($employee_list as $Employee) {
                echo "<option value=$Employee->id";
                if ($order->employeeId == $Employee->id) {
                    echo " selected='selected'";
                }
                echo ">$Employee->name</option>";
            } ?></select></label><br><br>

    <input type="hidden" name="controller" value="order" />
    <input type="hidden" name="orderId" value="<?php echo $order->orderId; ?>" />
    <button type="submit" name="action" value="index"> Back</button>
    <button type="submit" name="action" value="updateOrder"> Save</button>
</form>
