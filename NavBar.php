<html>
        <head>
            <title>nav_bar</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
       <style>
     .navbar-header{
        background-color: lightgrey;
        border-color: blue;
        color: lightgrey;
        padding: 0.01%;
        margin-bottom: 0px !important;
    }
    .nav{
        background-color:#5A5A5A;
        border-color: blue dot;
        margin-top: 0px !important;
        color: blue;
        padding : 0%;
    
    }
    #transparency #header {
    margin-bottom: 15px;
    color: blue;
    padding: 20%;
}  
ul.nav navbar-nav{
color: blue;
}
 .img {
    border-radius: 50%;
}
.img-circle {
    border-radius: 50%;
    border-color: white;
}
    
       </style>
        <body>
    <!--    <ul class="nav navbar-nav navbar-right">
-->
    <nav class="navbar navbar-inverse">
 
    <div class="container-fluid">
        
        <div class="navbar-header">
        <img class="image-circle" src="logo.jpeg" "width=10% ; height= 9%" border-radious="50%" ; border-color= "white"/>  
           <b><i><strong><a class="navbar-brand" href="#"><font color="black">Airport Visitor's Management System-home</font></a></strong></i></b>
        </div>
        <font color="black">
        <ul class="nav navbar-nav">
        
         <!-- <li class="active"><a href="home.html">Home</a></li>-->
         <li><a href="home.html"><font color="lightgrey">Details</font></a></li>
        <!-- <li><a href="#"><font color="lightgrey"></font></a></li>
        <li><a href="#"><font color="lightgrey"></font></a></li>
         
         <li><a href="#"><font color="lightgrey"></font></a></li>-->
          <li><a href="ADD_VISITOR.php"><font color="lightgrey">Addvisitor</font></a></li>
          <li><a href="Viewing.php"><font color="lightgrey">View </font></a></li>
          <li><a href="Deleting.php"><font color="lightgrey">Delete visitor</font></a></li>
          <!--<li><a href="Analyse.html">Analyse data</a></li>-->
          <li><a href="flight_info.php"><font color="lightgrey">Flight Info</font></a></li>
          <li><a href="amenities.php"><font color="lightgrey">Amenities</font></a></li>
          <li><a href="Parking.php"><font color="lightgrey">Parking</font></a></li>
          
        
          
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>-->
          <li><a href="Log_in.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
        </ul>
      </div>
    </font>
    </nav>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {box-sizing:border-box}
    body {font-family: Verdana,sans-serif;}
    .mySlides {display:none}
    
    /* Slideshow container */
    .slideshow-container {
      max-width: 2500px;
      max-height: 2000px;
      padding: 0;
      position: relative;
      margin-top: 0px !important;
      background-size: cover;
    }
    li.a {
        color: blue;
    }
    /* Caption text */
    .text1 {
      color: #f2f2f2;
      font-size:20px;
      padding: 8px 4px;
      position: absolute;
      top: 10px;
      width: 100%;
      text-align: center;
      color :red;
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    /* The dots/bullets/indicators */
    .dot {
      height: 10px;
      width: 10px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.24s ease;
    }
    
    .active {
      background-color: #717171;
    }
    
    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 3.5s;
      animation-name: fade;
        animation-duration: 4.5s;
    }
    
    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 150px) {
      .text {font-size: 9px}
    }
    </style>
    </head>
    <body>
    
    <h2></h2>
    <p></p>
    
    <div class="slideshow-container">
    
    <div class="mySlides fade">
      <div class="numbertext">1 / 12</div>
      <img src="ss8.jpeg" style="width: 100% ; height: 90%">
      <div class="text1">Well Come ...<br />Let's Get Started...</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 12</div>
      <img src="ss2.jpeg" style="width: 100% ; height: 90%">
      <div class="text">Caption Two</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 12</div>
      <img src="ss3.jpeg" style="width: 100% ; height: 90%">
      <div class="text">Caption Three</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">4 / 12</div>
      <img src="ss4.jpeg" style="width: 100% ; height:90%">
      <div class="text">Caption Text</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">5 / 12</div>
      <img src="ss5.jpeg" style="width: 100% ; height: 90%">
      <div class="text">Caption Text</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">6 / 12</div>
      <img src="ss6.jpeg" style="width: 100% ; height: 90%">
      <div class="text">Caption Text</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">7 / 12</div>
      <img src="ss7.jpeg" style="width: 100% ; height: 90%">
      <div class="text">Caption Text</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">8 / 12</div>
      <img src="ss1.jpeg" style="width:100% ; height: 90%">
      <div class="text">Caption Text</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">9 / 12</div>
      <img src="ss9.jpeg" style="width:100% ; height: 90%">
      <div class="text">Caption Text</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">10 / 12</div>
      <img src="ss10.jpeg" style="width:100% ; height: 90%">
      <div class="text">Caption Text</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">11 / 12</div>
      <img src="ss11.jpeg" style="width:100% ; height: 90%">
      <div class="text">Caption Text</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">12 / 12</div>
      <img src="ss12.jpeg" style="width:100% ; height:90%">
      <div class="text">Caption Text</div>
    </div>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    
    <script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
           slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
    }
    
    </script>
    
    
    </body>    
    </html>
    