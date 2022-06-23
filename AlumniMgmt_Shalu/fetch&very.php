<?php
$servername="localhost";
$username="root";
$password="";
$database="student_management";

$usernames = $_POST['name'];  
$passwords = $_POST['password'];

$conn=mysqli_connect($servername,$username,$password,$database);


$db=mysqli_select_db($conn,$database);
$query=mysqli_query($conn,"select * from student_admin where name='$usernames' and password='$passwords'");
$rows=mysqli_num_rows($query);
if($rows==1)
{
    $conn=mysqli_connect($servername,$username,$password,'student_management');
    $sql='select * from student_record';
    $result=mysqli_query($conn,$sql);

    $num=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
}
else{
	header("Location: worng.php ");
}

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
	<div class="search-box">
            <form action="speacil.php" method="post">  
            <input class="search-txt" type="text" name="search" placeholder="Type to search">
            <!-- <img src="img/searching.png" class= "icone"> -->
            <input type="submit" class="search-btn" value="🔍">
            <!-- <a class="search-btn" href="#"> -->
            
            </a>
            </form>
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
  .search-box{
    position: absolute;
    top: 10%;
    left: 47%;
    transform: translate(-50%,-50%);
    background: orange;
    height: 40px;
    border-radius: 40px;
    padding: 10px;

}
.search-box:hover > .search-txt{
    width: 240px;
    padding: 0 6px;
    top: 50px;
}
.search-box:hover > .search-btn{
   background: white;
     }
.search-btn{
    color: reorange;
    float: right;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.4s;
    text-decoration: none;
}
.search-txt{
 border: none;
 background: none;
 outline: none;
 float: left;
 padding: 0;
 color: white;
 font-size: 16px;
 transition: 0.4s;   
 line-height: 40px;
 width: 240px;
}

.a{
    width:1%;
    height:1%
    color:black;
}
.icone{
    position: absolute;
    width:40%;
    height:40%;
}

	</style>