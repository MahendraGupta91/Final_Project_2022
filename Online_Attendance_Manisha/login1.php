<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img  class="bg" src="bg.jpg" alt="poly. clg anuppur">
    <form class="box" action="loginconn.php" method="post">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" name="" value="Login">
    </form>
    
</body>
</html>
<?php
<?php
include'connection.php';

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO login   VALUES ('username','password')";
    $data = "mysqli_query" ($conn,$query);

    if(mysqli_num_rows($que)>0)
    {
        echo "<script>alert('login succesfully')</script>";
       echo "<script>window.open('manisha.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('wrong username and password')</script>";
    }
}


?>