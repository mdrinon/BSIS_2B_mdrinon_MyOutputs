<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marthas-kitchen";

//create connection
$conn=mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_errno();
}

?>