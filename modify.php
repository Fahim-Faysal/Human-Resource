<?php
     require_once("./connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modify Information</title>
</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" action="./actmodify.php" method="post">
    <h2>Modify Form</h2>
    <div>
        <label>Your ID</label>
        <input type="text" name="id">
        
    </div>
    <div>
        <label>New Email</label>
        <input type="text" name="email">
        
    </div>
   
    <div>
        <label>New Username</label>
        <input type="text" name="username">
      
    </div>
       
    <div >
    <input type="submit" value="Update">
    </div>
</form>
</body>
</html>