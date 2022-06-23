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
 
</head>
<body>
    <div id='full'>
      <div id="inner_full">
          <div id="header"><a href="adminHome.php" style="text-decoration: none;color: blue"> ONLINE BLOOD BANK MANAGEMENT SYSTEM</a>
          </div>
           <div id="body">
             <br>
              <?php
              $un = $_SESSION['un'];
               if (!$un)
             {
               header("location:index.php");
             }
               ?>
              <h1>Exchange Blood Donor Registration</h1><br>
             <center>
                 <div id="form" style="height: 400px">
                   <form action="" method="post">
                     <table>
                  <tr>
                    <td width="200px" height="50px">Enter Name</td>
                    <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                    
                    <td width="200px" height="50px">Enter father Name</td>
                    <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter father Name"></td>
                   </tr>
                  
                  <tr>
                    <td width="200px" height="50px">Enter Address</td>
                    <td width="200px" height="50px"><textarea name="address"></textarea></td>
                    
                    <td width="200px" height="50px">Enter city</td>
                    <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter city"></td>
                  </tr>
                  <tr>
                    <td width="200px" height="50px">Enter Age</td>
                    <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
                    
                    <td width="200px" height="50px">pin-code</td>
                    <td width="200px" height="50px"><input type="text" name="pin" placeholder="pin-code"></td>
                  </tr>
                  
                  
                <tr>
                   <td width="200px" height="50px">Enter E-mail</td>
                    <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-mail"></td>
                    
                    <td width="200px" height="50px">Enter Mobile No.</td>
                    <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No."></td>
                   </tr>
                    
                     <tr>
                    <td width="200px" height="50px">Select Blood Group</td>
                    <td width="200px" height="50px">
                        <select name="bgroup">
                            <option>---Choose---</option>
                            <option>O-</option>
                            <option>O+</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>A-</option>
                            <option>B-</option>
                            <option>A+</option>
                            <option>B+</option>
                            
                        </select> 
                    </td>
                    
                    <td width="200px" height="50px">Exchange Blood Group</td>
                    <td width="200px" height="50px">
                        <select name="Ebgroup">
                            <option>---Choose---</option>
                            <option>O-</option>
                            <option>O+</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>A-</option>
                            <option>B-</option>
                            <option>A+</option>
                            <option>B+</option>
                            
                        </select> 
                    </td>
                    
                  </tr>


                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="gen" value="Male">Male
                        <input type="radio" name="gen" value="Female">Female </td>
                              <td>Cetegory</td>
                    <td>
                        <select name="category" >
                            <option>---Choose Option---</option>
                            <option>GENERAL</option>
                            <option>OBC</option>
                            <option>SC</option>
                            <option>ST</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2"> <input type="Submit" name="sub" value="Submit" style=" width: 70px; height: 30px; border-radius: 10px;"></td>

                </tr>
              </table>
              </form>
                
                  <?php
                   if(isset($_POST['sub']))
                   {
                       //fornt end data input 
                      $name=$_POST['name'];
                      $fname=$_POST['fname'];
                       $address=$_POST['address'];
                       $city=$_POST['city'];
                       $age=$_POST['age'];
                       $pin=$_POST['pin'];
                       $bgroup=$_POST['bgroup'];
                       $Ebgroup=$_POST['Ebgroup'];
                       $email=$_POST['email'];
                       $mno=$_POST['mno'];
                       $gen=$_POST['gen'];
                      // $gender=$_POST['gender'];
                       $category=$_POST['category'];
                       //fornt end data input end
                       
                       //select and insert
                       $q="SELECT * FROM donar where bgroup = '$bgroup'";
                       $st=$db->query ($q);
                       $num_row=$st->fetch();
                       $id=$num_row['id'];
                       $bname=$num_row['bgroup'];
                       $name=$num_row['name'];
                       $mno=$num_row['mno'];
                       $q1=" INSERT INTO out_stoke(bname,name,mno)value('$bname','$name','$mno')";
                       $st1=$db->prepare($q1);
                       $st1->execute();
                       //select and insert end
                       
                       //delete code
                         $q2="delete from donar where id = '$id'";
                         $st1=$db->prepare($q2);
                         $st1->execute();
                       //delete end
                       
                       //exchange ingo insert
                       $q=$db->prepare("INSERT INTO exchange_blood(name,fname,address,city,age,pincode,bgroup,Ebgroup,email,mno,gender,category)
                                     VALUES(:name,:fname,:address,:city,:age,:pincode,:bgroup,:Ebgroup,:email,:mno,:gender,:category)");
                       $q->bindValue('name',$name);
                       $q->bindValue('fname',$fname);
                       $q->bindValue('address',$address);
                       $q->bindValue('city',$city);
                       $q->bindValue('age',$age);
                        $q->bindValue('pincode',$pin);
                       $q->bindValue('bgroup',$bgroup);
                        $q->bindValue('Ebgroup',$Ebgroup);
                       $q->bindValue('email',$email);
                       $q->bindValue('mno',$mno);
                       $q->bindValue('gender',$gen);
                       //$q->bindValue('gender',$gender);
                       $q->bindValue('category',$category);
                 
                       
                           
                           if($q->execute())
                       {
                           echo "<script>alert('Registration successfull')</script>";
                       }
                     else {
                        
                         echo "<script>alert('Registration fail')</script>";
                     }
                       
                         //exchange info insert end
                    }

                   ?>
              
                 
                 
                
             </center>
            </div>
                  <br><br>
          <div id="footer"><marquee direction="left"><h2><i>Donate Blood Save Life<i></h2></marquee>
            <p align="center"><a href="logout.php"><font color="blue">logout</font></a></p>
                   
               </div>
          
        </div>
       </div>
    </div> 
</body>
</html>
