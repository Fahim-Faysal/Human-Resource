<?php 

require_once("./connection.php");

    if(isset($_POST['update']))
    {

        $id = $_POST['id'];
        $email = $_POST['email'];
        $username = $_POST['username'];

        $query = " UPDATE login SET email = '".$email."', username='".$username."' where id='".$id."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
        
            header("location:./Dashborad.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:./modify.php");
    }


?>
