<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
    $invalid = "Your connection is lost";
       
    if (empty($_POST['selectbox']) || empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
        }
        else{
        // Define $username and $password
        $usertype = $_POST['selectbox'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        // mysqli_connect() function opens a new connection to the MySQL server.
        $conn = mysqli_connect("localhost", "root", "", "company");
        // SQL query to fetch information of registerd users and finds user match.
        $query = "SELECT username, password, usertype from login where username='$username' AND password='$password'AND usertype='$usertype' LIMIT 1";

        //$sql= "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
       



        // To protect MySQL injection for Security purpose
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $username, $password, $usertype);
        $stmt->execute();
        $stmt->bind_result($username, $password, $usertype);
        $stmt->store_result();

        $result = mysqli_query($conn,$query);
        $check = mysqli_fetch_array($result);
        if($stmt->store_result()){
           echo 'success';
        }else{
          echo 'failure';
        }






        if($usertype == "Admin"){
                if($stmt->fetch()) //fetching the contents of the row {
                $_SESSION['login_user'] = $username; // Initializing Session
                header("location: ./Dashborad.php"); // Redirecting To Profile Page     
            }
            else if($usertype == "Employee"){
                if($stmt->fetch()) //fetching the contents of the row {
                   $_SESSION['login_user'] = $username; // Initializing Session
                   header("location: ./employee.php"); // Redirecting To Profile Page     
               }
            else if($usertype == "Public"){
                if($stmt->fetch()) //fetching the contents of the row {
                    $_SESSION['login_user'] = $username; // Initializing Session
                    header("location: ./public.php"); // Redirecting To Profile Page     
                }
            # code...    
        else{ 
            echo $error;
        }
        echo $invalid;
    }
    
    //mysqli_close($conn); // Closing Connection
}
?>