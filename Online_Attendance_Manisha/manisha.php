<html>
    <head>
        <title>Display table</title>
    </head>
    <body>
        <center>
        <table border="3" bgcolor="orange">
        
        <tr>
            <th>NAME</th>
            <th>FATHER_NAME</th>
            <th>CLASS</th>
            <th>ENROLLMENT_NO</th>
            <th>ATTENDANCE</th>
            <th>MOBILE_NO</th>
            <th>EMAIL</th>
            <th>GENDER</th>
            <th>BRANCH</th>
            <th>DATE</th>
            <th>TIME</th>
        </tr>


<?php
    include("connection.php");
    error_reporting(0);
    $query = "select * from ragistration";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

    //echo $result['Name']." ".$result['Father_name']." ".$result['Class']." ".$result['Enrollment_no']." ".$result['Attendance']." "$result['Mobile_no']." ".$result['Email']." ".$result['Gender']." ".$result['Branch']." ".$result['Date']." ".$result['Time'];


    if( $total!=0 )
    {
        $result = mysqli_fetch_assoc($data);
        while($result = mysqli_fetch_assoc($data))
        {
            echo "
            <tr>
                <td>".$result['Name']."</td>
                <td>".$result['Fathername']."</td>
                <td>".$result['Class']."</td>
                <td>".$result['Enrollment no.']."</td>
                <td>".$result['Attendance']."</td>
                <td>".$result['Mobile no.']."</td>
                <td>".$result['Email ']."</td>
                <td>".$result['Gender']."</td>
                <td>".$result['Branch']."</td>
                <td>".$result['Date']."</td>
                <td>".$result['Time']."</td>
            </tr>
            ";
        }
        echo "tabale has recorded";
    }
    else
    {
        echo "not recorded present table";
    }
   ?>
        
       </table>
        </center>
   <a href="http://localhost/online_attendance/php.php">
             <center> <table border="5" bgcolor="skyblue">    
                <tr>
                 <td><b>BACK</b></td>
                </tr>
                
                </table>  
                </center>
          
            </a>

    </body>
</html>