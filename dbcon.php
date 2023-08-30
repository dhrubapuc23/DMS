<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "classicmodels";

$conn = mysqli_connect($server,$username,$password,$db);

if($conn)
{
    echo "Connected successfully!";
}
else
{
    echo "Connection failed!".mysqli_connect_error();
}

?>