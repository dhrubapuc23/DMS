<?php
include_once("dbcon.php");
$sql = "select * from users";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="80%" border=2>
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>Email</td>
            <td>Actions</td>
        </tr>

        <?php
        while($r = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$r['name']."</td>";
            echo "<td>".$r['age']."</td>";
            echo "<td>".$r['email']."</td>";
            echo "<td><a href=\"edit.php?id=$r[id]\">Edit</a> | <a href=\"delete.php?id=$r[id]\" onClick = \"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

        }

        ?>
    </table>
</body>
</html>