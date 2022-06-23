<?php
$servername="localhost";
$username="root";
$password="";
$a=$_POST['search'];


$conn=mysqli_connect($servername,$username,$password,'student_management');
$sql="select * from student_record  where branch='$a'";
$result=mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);


?>


<!DOCTYPE html> 

<html> 
	
	<head> 
		<title> Fetch Data From Database </title> 
		<link rel="stylesheet" href="fetch.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	</head> 
	<body> 
        </div>
	<table align="center" border="1px" style="width:600px; line-height:40px;" class="table"> 
	<tr> 
		<th colspan="8"><h2>Student Record</h2></th> 
		</tr> 
			  <th> FirstName </th> 
			  <th> LastName </th> 
			  <th> Roll No. </th> 
			  <th> Email</th> 
              <th> Phone no.</th>
              <th> Branch</th>
              <th> Passout</th>
              <th> Persent</th>

			  
		</tr> 
		
		<?php while($row=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $row['firstname']; ?></td> 
		<td><?php echo $row['lastname']; ?></td> 
		<td><?php echo $row['rollnumber']; ?></td> 
		<td><?php echo $row['email']; ?></td> 
        <td><?php echo $row['phonenumber']; ?></td> 
        <td><?php echo $row['branch']; ?></td> 
        <td><?php echo $row['passout']; ?></td> 
        <td><?php echo $row['persent']; ?></td> 
		</tr> 
	    <?php 
               } 
          ?> 




	</table> 
	</body> 
	</html>
	<style>