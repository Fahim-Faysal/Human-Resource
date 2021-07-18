<?php 

        require_once("./connection.php ");

        if(isset($_GET['Del']))
        {
            $id = $_GET['Del'];
            $query = " DELETE from emp where id = '".$id."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:./employeeinfo.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:./employeeinfo.php");
        }

?>