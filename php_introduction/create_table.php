<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "classicmodels";

$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn)
{
    echo "Connection failed!".mysqli_connect_error();
}

else
{
    $sql = "create table newTable(
        id int primary key,
        name varchar(30),
        contact_no varchar(11)
    );";

    $sql_ins = "insert into newTable(id,name,contact_no)
                values(6,'Tom','12345678');";
    $sql_ins .= "insert into newtable2(address)
                values('Dhaka');";
    $sql_ins .= "insert into newtable3(email)
                values('abc@gmail.com');";

    if(mysqli_multi_query($conn,$sql_ins))
    {
        echo "data inserted successfully!";
    }
    else
    {
        echo "Error: ".mysqli_error($conn);
    }
}

mysqli_close($conn);

?>