<?php 

    require_once("./connection.php");
    require_once("./employeeinfo.php");
    $id = $_GET['GetID'];
    $query = " select * from emp where id='".$id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
                           $id = $row['id'];
                           $empid = $row['empid'];
                           $empname = $row['empname'];
                           $emprole = $row['emprole'];
                           $empdept = $row['empdept'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>

       
            <h3> Update Form</h3>
                <div>

                            <form action="empupdate.php?ID=<?php echo $id ?>" method="post">
                                <input type="text" placeholder=" Depertment Number " name="empid" value="<?php echo $empid ?>">
                                <input type="text" placeholder=" Depertment Number " name="empname" value="<?php echo $empname ?>">
                                <input type="text" placeholder=" Depertment Name " name="emprole" value="<?php echo $emprole ?>">
                                <input type="text" placeholder=" Depertment Leader " name="empdept" value="<?php echo $empdept ?>">
                                <button name="update">Update</button>
                            </form>

                        </div>
    
</body>
</html>