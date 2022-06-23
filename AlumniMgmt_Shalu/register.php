<?php
$firstname= $_POST['fname'];
$lastname= $_POST['lname'];
$roll=$_POST['roll'];
$persent=$_POST['persent'];
$email=$_POST['email'];
$phone=$_POST['phone'];



$servername="localhost";
$username="root";
$password="";
$database="student_management";
$conn=mysqli_connect($servername,$username,$password,$database);

// if(!$conn){
//     die("Sorry we failed".mysqli_connect_error());
// }
// else{
//     echo "connection was succesfull";
// }
if(isset($_POST['submit'])){
    $branch=$_POST['branches'];
    $passout=$_POST['Passout'];
    $stmt=$conn->prepare("insert into student_record values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$firstname,$lastname,$roll,$email,$phone,$branch,$passout,$persent);
    $stmt->execute();
    
    
    
    }

// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- <link rel="stylesheet" href="registration.css"> -->
</head>
<body>
    <div>
        <img src="https://cdn.dribbble.com/users/2185205/screenshots/7886140/media/90211520c82920dcaf6aea7604aeb029.gif" class="png">
        <p class="text">
            Name: <?php echo $firstname, $lastname; ?>
            <br><br>
            Branch: <?php echo $branch ?>
            <h3>Inserted...:)</h3>
        </p>
    </div>
   
    
</body>
<style>
        .png{
    width: 55%;
    height: 55%;
    margin-left:20%;
    margin-top:-10%;
}
.text{
    position: absolute;
    left: 40%;
    font-size:120%;
    color:#ff7200;
}
h3{
    position: absolute;
    left: 40%;
    font-size:120%;
    color:green;
    top:80%;
    font-size:200%;
}
    </style>
</html>

