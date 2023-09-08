<?php
include_once("dbcon.php");
$id = $_GET['id'];
$sql = "delete from users where id = $id";
$result = mysqli_query($conn,$sql);
if($result)
{
    header("Location:index.php");
}

?>