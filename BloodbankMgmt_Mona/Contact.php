<!doctype html>
<html>
    <head>
        <title>Blood Bank Home</title>
        <link rel="stylesheet" href="style.css"/>
        <style type="text/css">
            #address{width: 50%; height: 300px; float: left;}
            #map{width: 50%; height: 300px; float: left;}
            
        </style>
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
            
            <br><br>
            <div id="address">
                <h2>&nbsp; &nbsp; &nbsp; &nbsp; Contact Blood Bank</h2>
                <br>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Address  : </b> &nbsp; &nbsp; &nbsp; Demo address</p>
                <br>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Mobile No.  :</b> &nbsp; &nbsp; &nbsp; Demo Mno.</p>
                <br>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>E-mail : </b> &nbsp; &nbsp; &nbsp;  Demo E-mail</p>
            </div>
            <div id="map">
                <img src="image/map.png" width="800px" height="560px" alt="alt"/> </div>
        </div>>
        <div class="footer"><marquee direction="left"><h2><i>Donate Blood Save Life<i></h2></marquee></div>
    </body>
</html>


