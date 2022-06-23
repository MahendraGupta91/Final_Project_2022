 <html>
     <head>
         <title>login form</title>
         <link rel="stylesheet" href="style.css">
     </head>
     <body>
         <center>
                <form method="post" action="loginconn.php">
                 <table border="2">
                     <tr><td>username</td> <td><input type="text" 
                        name="username" placeholder="enter username" required></td></tr>
                        <tr><td>password</td> <td><input type="password" 
                            name="password" placeholder="enter password" required></td></tr>
                            <tr><td></td><td><input type="submit" name="submit"
                                value="login"></td></tr>
                 </table>
             </form>
         </center>
     </body>
 </html>