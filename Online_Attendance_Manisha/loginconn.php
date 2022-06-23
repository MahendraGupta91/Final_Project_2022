<?php
    include'connection.php';

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "insert into login  VALUES ('$username','$password')";
        $data = "mysqli_query" ($conn,$query);

        {
            echo "<script>alert('login succesfully')</script>";
           echo "<script>window.open('manisha.php','_self')</script>";
        }
        {
            echo "<script>alert('wrong username and password')</script>";
        }
    }
      if($data)
    {
        echo"data inserted into database";
    }
    else
    {
            echo"filed to data inserted";
    }
   ?>
    
?>