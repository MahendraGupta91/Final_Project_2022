<!doctype html>
<html>
    <head>
        <title>Blood Bank Home</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class="header">  
            <div class="logo">Online Blood Bank Management System</div>
            
            
                    
            <div id="a"><a href="Home.php">Home</a></div>
            <div id="b"><a href="About.php">About As</a></div>                 
            <div id="c"><a href="Contact.php">Contact Us</a></div>
            <div id="d"><a href="Login.php">Log in </a></div>
               
                    
        </div>
        
       <div class="w3-content w3-section" style="max-width:100%; max-height: 60%;" >
            <img class="mySlides" src="image/blood.jpg"  style="width:100%; height: 360px;">
            <img class="mySlides" src="image/slide1.jpg"  style="width:100%; height: 360px;">
            <img class="mySlides" src="image/slide2.jpg"  style="width:100%; height: 360px;">
            <img class="mySlides" src="image/slide3.jpg" style="width:100%; height: 360px;">
            <img class="mySlides" src="image/slide4.png"  style="width:100%; height: 360px;">
   
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

        
        <div class="container">
            
            <h1 style="color: red"> About Blood Bank </h1>
            <center> <img src="image/pic.png" width="90%" height="500px" alt="alt"/></center>
            
        </div>
        
        <div class="footer"><marquee direction="left"><h2><i>Donate Blood Save Life<i></h2></marquee></div>
    </body>
</html>

