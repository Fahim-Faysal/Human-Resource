<?php
    include('./empdata.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EMPLOYEE INFORMATION</title>

 </head>
<body>
<div>
    <!-- Navigation bar -->
            <table>
                      <thead>
                          <th>Id</th>
                          <th>Employee Number</th>
                          <th>Employee Name</th>
                          <th>Employee Role</th>
                          <th>Employee Department</th>
                          <th>Operating</th>
                          
                      </thead>
                      <tbody>
        <?php
                      
                        
                      while($row=mysqli_fetch_assoc($ses_sql)){
                       $id = $row['id'];
                       $empid = $row['empid'];
                       $empname = $row['empname'];
                       $emprole = $row['emprole'];
                       $empdept = $row['empdept'];
                    
                  ?>
                  <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $empid ?></td>
                            <td><?php echo $empname ?></td>
                            <td><?php echo $emprole ?></td>
                            <td><?php echo $empdept ?></td>
                            <td>
                           
                                <a href="empedit.php?GetID=<?php echo $id ?>" role="button" >Edit</a>
                                <a href="empdelete.php?Del=<?php echo $id ?>" role="button">Delete</a>
                            </td>
                        </tr>
                        <?php
                           }
                        ?>
                      </tbody>
                  </table>
    </div>
                  
    
</body>
 </html>
