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
            background-color: lightskyblue;
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
              <h1> Out Stock Blood List</h1><br>
              <center>
                  <div id="form">
                      <table border='0'>
                          <tr>
                              <th><center><i><font color='black'>Name</font></i></center></th> 
                              <th><center><i><font color='black'>Mobile no.</font></i></center></th>
                              <th><center><i><font color='black'>Blood Group</font></i></center></th>
                              
                          </tr>
                          
                          <?php
                             $q=$db->query("SELECT * FROM out_stoke");
                              while ($r1=$q->fetch(PDO::FETCH_OBJ))        
                          { 
                          ?>
                          
                          <tr>
                             <td><center><?=$r1->name; ?></center></td>
                              <td><center><?=$r1->mno; ?></center></td>
                              <td><center><?=$r1->bname; ?></center></td>
                             
                          </tr>
                          <?php
                          }
                          ?>
                      </table>
                  </div>
              </center>
             
            </div>
                 <br><br><br><br>
               <div id="footer"><marquee direction="left"><h2><i>Donate Blood Save Life<i></h2></marquee>
                   <p align="center"><a href="logout.php"><font color="blue">logout</font></a></p>
               </div>
        </div>
       
    </div> 
</body>
</html>

