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
            width:200px;
            height: 35px;
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
              <h1>Stoke-Blood-List</h1><br>
              <center>
                  <div id="form" style="height: 400px">
                      <table>
                          <tr>
                              <th><center><b><font color='black'>Name</font></b></center></th> 
                             <th><center><b><font color='black'>Qty</font></b></center></th>
                          </tr>
                          
                          
                          
                          <tr>
                               <td><center>O+</center></td>
                              <td><center>
                               <?php
                                 $q=$db->query("SELECT * FROM donar WHERE bgroup='O+'");
                                echo $row=$q->rowcount();
                               ?>
                              </center></td>
                          </tr>
                           <tr>
                               <td><center>O-</center></td>
                              <td><center>
                               <?php
                                 $q=$db->query("SELECT * FROM donar WHERE bgroup='O-'");
                                echo $row=$q->rowcount();
                               ?>
                              </center></td>
                          </tr>
                           <tr>
                               <td><center>AB+</center></td>
                              <td><center>
                               <?php
                                 $q=$db->query("SELECT * FROM donar WHERE bgroup='AB+'");
                                 echo $row=$q->rowcount();
                               ?>
                               </center></td>
                          </tr>
                           <tr>
                               <td><center>AB-</center></td>
                              <td><center>
                               <?php
                                 $q=$db->query("SELECT * FROM donar WHERE bgroup='AB-'");
                                echo $row=$q->rowcount();
                               ?>
                              </center></td>    
                          </tr>
                           <tr>
                               <td><center>A+</center></td>
                              <td><center>
                               <?php
                                 $q=$db->query("SELECT * FROM donar WHERE bgroup='A+'");
                                echo $row=$q->rowcount();
                               ?>
                           </center></td>
                          </tr>
                           <tr>
                               <td><center>B+</center></td>
                              <td><center>
                               <?php
                                 $q=$db->query("SELECT * FROM donar WHERE bgroup='B+'");
                                echo $row=$q->rowcount();
                               ?>
                             </center></td>
                          </tr>
                          <tr>
                               <td><center>A-</center></td>
                              <td><center>
                               <?php
                                 $q=$db->query("SELECT * FROM donar WHERE bgroup='A-'");
                              echo $row=$q->rowcount();
                               ?>
                              </center></td>
                          </tr>
                          <tr>
                               <td><center>B-</center></td>
                              <td><center>
                               <?php
                                 $q=$db->query("SELECT * FROM donar WHERE bgroup='B-'");
                               echo $row=$q->rowcount();
                               ?>
                              </center></td>
                          </tr>
                         
                      </table>
                  </div>
              </center>
             
            </div>
          <br><br>
               <div id="footer"><marquee direction="left"><h2><i>Donate Blood Save Life<i></h2></marquee>
                   <p align="center"><a href="logout.php"><font color="blue">logout</font></a></p>
               </div>
        </div>
       
    </div> 
</body>
</html>

