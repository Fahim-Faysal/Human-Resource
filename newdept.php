<?php
  
?>
<!DOCTYPE html>
<html>
    <head>

    <title>New Department</title>

    </head>
        <body>
        <div>
              
              <div>
                  <!-- Path navigation -->
                  <div>
                    <ol>
                      <li><a href="Dashborad.php">Department Management</a></li>
                      <li>New Department</li>
                    </ol>
                  </div>


               
                  <form name="contactForm" onsubmit="return validateForm()" action="./deptconfirm.php" method="post">
    <h2>New Dept</h2>
    <div>
        <label>Depertment Number</label>
        <input type="text" name="dept_num">
    </div>
    </div>
    <div>
        <label>Depertment Name</label>
        <input type="text" name="dept_name">
    </div>
    </div>
    <div>
        <label>Depertment Leader</label>
        <input type="text" name="dept_leader" maxlength="10">
    </div>
	</div>       
    <div>
        <input type="submit" value="Submit">
    </div>
</form>

</body>
</html>