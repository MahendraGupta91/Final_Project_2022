<?php
$insert = false;
if(isset($_POST['txtName'])){
$server= "localhost";
$username = "root";
$password = "";
$db="foodwebsite";

$con = mysqli_connect($server,$username,$password,$db);

if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
    echo "connection failed";
}
$name = $_POST['txtName'];
$number = $_POST['txtNumber'];
$order = $_POST['txtOrder'];
$food = $_POST['txtFood'];
$much = $_POST['txtMuch'];
$address = $_POST['txtAddress'];
$message = $_POST['txtMessage'];
$sql = "INSERT INTO `foodwebsite`.`ordernow` ( `name` , `number`, `orderf`, `additionalfood`, `howmuch`, `address`, `message`, `dt`)
 VALUES ('$name', '$number', '$order', '$food', '$much', '$address', '$message',current_timestamp());";
//  echo $sql;

 if($con->query($sql)==true){
    //  echo  "successfully inserted";
    $insert = true;
 }
 else{
     echo "ERROR: $sql <br> $con->error";
 }
$con->close();
}
?>

