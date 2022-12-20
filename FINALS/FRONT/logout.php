<?php 
    //Include connect-db.php for SITEURL
    include('subfiles/connect-db.php');
    //1. Destory the Session
    session_destroy(); //Unsets $_SESSION['user']

    //2. REdirect to Login Page
    header('location:'.SITEURL.'login.php');

?>