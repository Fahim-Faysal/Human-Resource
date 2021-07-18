<?php
  include('./session.php');
  include('./getjobinfo.php');
  if(!isset($_SESSION['login_user'])){
  header("location: ./login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Public Portal</title>
 </head>
<body>


                    
      <ul>
              <li><a href="./job.php" target="_blank">Apply to a job</a></li>
                          
        </ul>

            <ul>
              <li>
                <a>Account management</a>
          <ul>
                <li><a href="./logout.php"> Account logout</a></li>
          </ul>
          </li>
              
           
                          
                     
</body>
 </html>
