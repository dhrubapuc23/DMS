<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "classicmodels";

$conn = mysqli_connect($server,$username,$password,$db);
$input = 'Tom';
if(!$conn)
{
    echo "Connection failed!".mysqli_connect_error();
}
else
{
    $sql = "select * from newTable where name = '$input';";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "ID: ".$row['id']." Name: ".$row['name']."<br>";
        }
    }
    else
    {
        echo "No data found!";
    }

   

   
}

mysqli_close($conn);

?>