<?php
  include('./empconfirm.php');
?>
<!DOCTYPE html>
<html>
    <head>

       
    </head>
        <body>
        
                  <form name="contactForm" onsubmit="return validateForm()" action="./empconfirm.php" method="post">
    <h2>New Employee</h2>
    <div>
        <label>Employee Id</label>
        <input type="text" name="empid">
    </div>
    <div>
        <label>Employee Name</label>
        <input type="text" name="empname">
    </div>
    <div class="row">
        <label>Employee Depertment</label>
        <input type="text" name="empdept" maxlength="10">
	</div>
	<div class="row">
        <label>Employee Role</label>
        <input type="text" name="emprole" maxlength="10">
    </div>        
    <div class="row">
        <input type="submit" value="Submit">
    </div>
</form>
            

        </body>
</html>