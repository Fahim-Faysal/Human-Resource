
<?php
  include('./session.php');
  include('./deptdata.php');
  //include('../includes/backend-search.php');
  if(!isset($_SESSION['login_user'])){
  header("location: ./login.php"); // Redirecting To Home Page
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>

  <title>Admin Dashborad</title>

</head>
<body>

<h1>Wellcome to Admin Dashborad</h1>
              
        <div>     
                        <span>Employee Management</span>
                    <ul>
                      <li><a href="./employeeinfo.php">Employee Information</a></li>
                      <li><a href="./newemp.php">New Staff</a></li>
                    </ul> 
                </li>
            </ul>
            <span>Department Management</span>
            <ul>
                <li>
                      <a href="./newdept.php">New Department</a>
                </li>
            </ul>

        </div>

    
   <br>
   <br>
   <br>
   <br>
       <a href="./logout.php">Account logout</a>
  
              

</body>
 </html>
 