<?php
include ('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="newcss.css">
    
</head>

<body>
    
<div id="inner_full">
    <div id="inner_full">
      <div id="header"> ONLINE BLOOD BANK MANAGEMENT SYSTEM</div>
      
      <div id="body">
         
          <br> <br> <br> <br><br><br>
          <center>
          <form action="" method="post">
          <table>
                  
                  <tr align="center">
                      <td width="200px" height="70px">Enter Username</td>
                      <td width="200px" height="70px"><input type="text" name="un" placeholder="Enter Username"
                                                             style=" width: 180px; height: 30px; border-radius: 10px;"></td>
                       
                  </tr>
                  <tr align="center">
                      <td width="200px" height="70px"> Enter Password</td>
                      <td width="200px" height="70px"><input type="password" name="ps" placeholder="Enter Password"
                                                             style=" width: 180px; height: 30px; border-radius: 10px;"></td>
                       
                  </tr>
                  <tr align="center">
                  <td><input type="Submit" name="sub" value="Login" style=" width: 70px; height: 30px; border-radius: 10px;"></td>
                  </tr>
                        
           </table>
           </form> 
          </center>
          <?php
         if(isset($_POST['sub']))
         {
             $un=$_POST['un'];
             $ps=$_POST['ps'];
             $q=$db->prepare("SELECT * FROM admin WHERE uname='$un' && pass ='$ps'");
             $q->execute();
             $res=$q->fetchAll(PDO::FETCH_OBJ);
             if($res)
             {
                 $_SESSION['un']=$un;
                 header("location:adminHome.php");
             }
             else {
               echo "<script>alert('wrong User');</script>";
             }
            
         }
             
          ?>
          
      </div>
       <br><br><br><br><br>
      <div id="footer"><marquee direction="left"><h2><i>Donate Blood Save Life<i></h2></marquee></div>
    </div>  
</div>
</body>

</html>
