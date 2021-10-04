<br>
<form method="get" action="">
    <label>เลขใบเสนอราคา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="orderId" /></label><br>
    <label>วันที่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" name="orderDate" /></label><br>
    <label>ลูกค้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="customerId">
            <?php
            foreach ($customer_list as $Customer) {
                echo "<option value=$Customer->id>$Customer->name</option>";
            } ?> </select></label><br>
    <label>พนักงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="employeeId">
            <?php
            foreach ($employee_list as $Employee) {
                echo "<option value=$Employee->id>$Employee->name</option>";
            } ?></select></label><br><br>

    <input type="hidden" name="controller" value="order" />
    <button type="submit" name="action" value="index"> Back</button>
    <button type="submit" name="action" value="addOrder"> Save</button>
</form>
