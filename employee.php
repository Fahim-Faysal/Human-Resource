<?php
include('./getempdata.php'); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>EMPLOYEE DASHBOARD</title>
    
    <style>
        table, th, td {
        border: 1px solid black;
           }
    </style>


 </head>
<body>
<div>

    <div>



                    <div>

                          <a href="leave.php">Application for leave</a>   
                    </div>

            <table>

            <tr>
  <th>Employee Number</th>
                          <th>Employee Name</th>
                          <th>Employee Role</th>
                          <th>Employee Department</th>
  </tr>
  
  
  <?php
                        if (mysqli_num_rows($ses_sql) > 0){
                          while($row=mysqli_fetch_assoc($ses_sql)){
                           echo "<tr>";
                      
                           echo " <td>" .$row["empid"]."</td>";
                           echo " <td>" .$row["empname"]."</td>";
                           echo " <td>" .$row["emprole"]."</td>";
                           echo " <td>" .$row["empdept"]."</td>";
                        echo "</tr> "  ;
                          }
                        }
                      ?>
                      
                  </table>

    

    </div>   
</body>
 </html>
