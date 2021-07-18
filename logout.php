<?php
session_start();
if(session_destroy()) // Destroying All Sessions {
header("Location: ./FirstPage.php"); // Redirecting To Home Page
?>