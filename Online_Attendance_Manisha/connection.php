<?php
$servername = "localhost";
$userrname = "root";
$password = "";
$dbname = "attendance_management";

$conn = mysqli_connect($servername,$userrname,$password,$dbname);
if($conn)
{
    echo"connection successfully";
}
else
{
    echo"connection filed";
}
?>