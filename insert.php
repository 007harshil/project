<!DOCTYPE html>
<html lang="en">

<head>
    <title>insert data</title>
</head>

<body>
    <?php
        $conn = mysqli_connect('localhost','root','');
        if(! $conn )
        {
            die('Could not connect : '.mysqli_error($conn));
        }
        echo 'Connected successfully<br />';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        echo '$name<br>';
        echo '$email<br>';
        echo '$pass<br>';
        
        $query = 'INSERT INTO registration(name,email,password) VALUES('$name','$email','$pass')';
        mysqli_select_db($conn, 'project');
        $retvalue = mysqli_query($conn, $query);
        if(!$retvalue )
        {
            die('Could not insert record : '.mysqli_error($conn));
        }
        echo "record inserted<br>";
        mysqli_close($conn);
    ?>
</body>

</html>