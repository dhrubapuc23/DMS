<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
    <?php
        include_once("dbcon.php");
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $email = $_POST['email'];

            if(empty($name) || empty($age) || empty($email))
            {
                if(empty($name))
                {
                    echo "<font color='red'>Name is empty</font><br/>";
                }
                if(empty($age))
                {
                    echo "<font color='red'>Age is empty</font><br/>";
                }
                if(empty($email))
                {
                    echo "<font color='red'>Email is empty</font><br/>";
                }
            }
            else
            {
                $sql = "insert into users(name,age,email) values
                         ('$name','$age','$email')";
                $result = mysqli_query($conn,$sql);
                if($result)
                {
                    echo "<font color='green'>Data added successfully</font>";
                }
            }
        }
    ?>
    
</body>
</html>