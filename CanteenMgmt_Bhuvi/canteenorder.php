<?php
$customername = $_POST['name'];
$date_time = $_POST['Date'];
$phonenumber= $_POST['number'];
$address = $_POST['address'];

$servername="localhost";
$username="root";
$password="";
$database="canteen_shop";
$conn=mysqli_connect($servername,$username,$password,$database);

// if(!$conn){
//     die("Sorry we failed".mysqli_connect_error());
// }
// else{
//     echo "connection was succesfull";
// }

$stmt=$conn->prepare("insert into order_history values(?,?,?,?)");
$stmt->bind_param("ssss",$customername,$date_time,$phonenumber,$address);
$stmt->execute();
echo "Order Book\n";
?>