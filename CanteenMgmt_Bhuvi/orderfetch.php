<?php
$sever='localhost';
$user='root';
$password='';

$con=mysqli_connect($sever,$user,$password,'cake_shop');
$sql='select * from order_history';
$result=mysqli_query($con,$sql);
// echo mysqli_num_rows($result);
$num=mysqli_num_rows($result);


$row=mysqli_fetch_assoc($result);
// echo $row['c.name'];


// echo $row['c.number'];
// if($num>0){
// while($row=mysqli_fetch_assoc($result)){
//   echo $row['c.name'] . $row['date_time'] . $row['c.number'] .$row['address'];
//   echo "<br>";
// }
// }
?>
<!DOCTYPE html> 

<html> 
	
	<head> 
		<title> Fetch Data From Database </title> 
		<link rel="stylesheet" href="fetch.css">
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;" class="table"> 
	<tr> 
		<th colspan="4"><h2>Order Record</h2></th> 
		</tr> 
			  <th> Customer Name </th> 
			  <th> Date/Time </th> 
			  <th> C.number </th> 
			  <th> Address </th> 
			  
		</tr> 
		
		<?php while($row=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $row['c.name']; ?></td> 
		<td><?php echo $row['date_time']; ?></td> 
		<td><?php echo $row['c.number']; ?></td> 
		<td><?php echo $row['address']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 




	</table> 
	</body> 
	</html>







