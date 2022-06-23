<?php
include ('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration</title>
    <link rel="stylesheet" type="text/css" href="newcss.css"/>
    <style type="text/css">
        td{
            width: 200px;
            height: 50px;
        }
    </style>
    
</head>
<body>
   <div id='full'>
      <div id="inner_full">
          <div id="header"><a href="adminHome.php" style="text-decoration: none;color: blue"> ONLINE BLOOD BANK MANAGEMENT SYSTEM</a>
          </div>
           <div id="body">
             <br>
              <?php
               $un=$_SESSION['un'];
              if(!$un)
             {
             header("location:index.php");
             }
               ?>
              <h1> Donor List</h1><br>
              <center>
                  <div id="form">
                      <table border='1'>
                          <tr>
                              <th><center><b><font color='black'>Name</font></b></center></th> 
                              <th><center><b><font color='black'>Father's Name</font></b></center></th>
                              <th><center><b><font color='black'>Address</font></b></center></th>
                              <th><center><b><font color='black'>City</font></b></center></th>
                              <th><center><b><font color='black'>Age</font></b></center></th>
                              <th><center><b><font color='black'>Blood Group</font></b></center></th>
                              <th><center><b><font color='black'>E-mail</font></b></center></th>
                              <th><center><b><font color='black'>Mobile No.</font></b></center></th>
                              <th><center><b><font color='black'>Gender</font></b></center></th>
                              <th><center><b><font color='black'>Category</font></b></center></th>
                          </tr>
                          
                          <?php
                              $q=$db->query("SELECT * FROM donar");
                              while($r1=$q->fetch(PDO::FETCH_OBJ))
                              {
                          ?>
                          
                          <tr>
                               <td><center><?=$r1->name; ?></center></td>
                              <td><center><?=$r1->fname; ?></center></td>
                              <td><center><?=$r1->address; ?></center></td>
                              <td><center><?=$r1->city; ?></center></td>
                              <td><center><?=$r1->age; ?></center></td>
                              <td><center><?=$r1->bgroup; ?></center></td>
                              <td><center><?=$r1->email; ?></center></td>
                              <td><center><?=$r1->mno; ?></center></td>
                              <td><center><?=$r1->gender; ?></center></td>
                              <td><center><?=$r1->category; ?></center></td>                              
                          </tr>
                          
                          <?php
                          }
                          ?>
                      </table>
                  </div>
              </center>
             
            </div>
          <br><br><br>
               <div id="footer"><marquee direction="left"><h2><i>Donate Blood Save Life<i></h2></marquee>
                   <p align="center"><a href="logout.php"><font color="blue">logout</font></a></p>
               </div>
        </div>
       
    </div> 
</body>
</html>



