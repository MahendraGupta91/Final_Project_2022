<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Online Attendance</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img  class="bg" src="bg.jpg" alt="poly.clg anuppur">
    <div class="container">
        <h2>Welcome to Online Attendance Management</h2>
         <p> Enter your details to confirm your Online Attendance Management</p>
         
         <form action="index.php" method="GET">
             <input type="text" name="Name" id="Name" placeholder="Enter your Name">
             <input type="text" name="Father_name" id="Father_name" placeholder="Enter your Father_name" required>
             <input type="text" name="Class" id="Class" placeholder="Enter your Class" required>
             <input type="text" name="Enrollment_no" id="Enrollment_no" placeholder="Enter your Enrollment_no" required>
             <input type="text" name="Attendance" id="Attendance" placeholder="Enter your Attendance" required>
             <input type="text" name="Mobile no" id="Mobile_no" placeholder="Enter your Mobile_no" required>
             <input type="text" name="Email" id="Email" placeholder="Enter your Email" required>
             <input type="text" name="Gender" id="Gender" placeholder="Enter your Gender" required>
             <input type="text" name="Branch" id="Branch" placeholder="Enter your Branch" required>
             <input type="Date" name="Date" id="value"  required>

             <input type="Time" name="value" id="value" placeholder="Enter your Time" required>          
            <button class="btn">Submit</button>
             
            <a href="http://localhost/online_attendance/php.php">
                <table border="5" bgcolor="yellow">    
                <tr>
                    <td><b>LOGIN</b></td>
                </tr>
                </table>    
            </a>

         </form> 
    </div>
   
    
</body>
</html>

<?php
    $Name = $_GET['Name'];
   $Father_name = $_GET['Father_name'];
   $Class = $_GET['Class'];
   $Enrollment_no = $_GET['Enrollment_no'];
   $Attendance = $_GET['Attendance'];
   $Mobile_no = $_GET['Mobile_no'];
   $Email = $_GET['Email'];
   $Gender = $_GET['Gender'];
   $Branch = $_GET['Branch'];
   $Date = $_GET['Date'];
   $Time = $_GET['Time'];


    $query = "INSERT INTO ragistration  VALUES ('$Name','$Father_name','$Class','$Enrollment_no','$Attendance','$Mobile_no','$Email','$Gender','$Branch','$Date','$Time')";
    $data = "mysqli_query" ($conn,$query);

    if($data)
    {
        echo"data inserted into database";
    }
    else
    {
            echo"filed to data inserted";
    }
   ?>