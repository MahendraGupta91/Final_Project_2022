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
        <title>Document</title>
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
                    $un= $_SESSION['un'];
                    if (!$un) {
                        header("location:index.php");
                    }
                    ?>
                    <h1>welcome Admin</h1><br><br><br>
                    <center>
                        <ul>
                            <li><a href="registration.php">Donor Registration</a></li>
                            <li><a href="donor-list.php">Donor List</a></li>
                            <li><a href="stoke-blood-list.php">Stock Blood List</a></li>
                        </ul>
                        <br><br><br><br> <br>
                        <ul>
                            <li><a href="Out-stoke.php">Out Stock Blood list</a></li>
                            <li><a href="exchange-blood.php">Exchange Blood Donor Registration</a></li>
                            <li><a href="exchange-list.php">Exchange Blood list</a></li>
                        </ul></center>
                </div>
                <br><br><br><br><br> <br><br><br><br>
                <div id="footer"><marquee direction="left"><h2><i>Donate Blood Save Life<i></h2></marquee>
                                <p align="center"><a href="logout.php"><font color="blue">logout</font></a></p>
                </div>

                </div>
                </div> 
    </body>
</html>