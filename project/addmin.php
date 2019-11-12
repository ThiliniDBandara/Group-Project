<?php
	session_start();
	require_once('SQLConnection.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html  >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="iif.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tile Lanka</title>
</head>
<body bgcolor="#999999">
<div class="row">

 <!-- 	This is the header of this page -->
<div id="header"  >
<a href="assignment.html"><img src="Capture6.PNG"/ ></a> 
<img src="MEW.PNG"/  >


<!-- This is the login,register,feedback -->
 <div class="navbar" style="float:right;">
  <a href="index.php">Login</a>
  <div class="navbar" style="float:right;">
  <a href="register.php">Register</a>
  &nbsp;
  <div class="navbar" style="float:right;">
  <a href="inquiry.html">Feedback</a>
</div>
</div>
</div>
</div>
</div>
<center><h2>Welcome <?php echo $_SESSION['username']; ?></h2></center>


<!-- This is the dropdown button -->
<div class="row">
<div class="topnav">

<div class="dropdown"  >
    <button class="dropbtn" ><i class="fa fa-bars"></i>
      
    </button>
    <div class="dropdown-content">
      <a href="Products.html">PRODUCTS</a>
      <a href="Services.html">SERVICES</a>
      <a href="about.html">ABOUT</a>
       <a href="location.html">LOCATION</a>
       <a href="purchase.php">PURCHASE</a>
    </div>
  </div> 
  
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>


<div class="row">
  &nbsp;
</div>

 <div class="row">
  &nbsp;
</div>
<div class="row">
  &nbsp;
</div>

 

<div class="row">
<div class="columnarr1">
<h1>EDIT  </h1>
<br>
<h2><a href="register.php" class="nounderline" style="color:#000" >USERS</a></h2>
<h2><a href="Products.html" class="nounderline" style="color:#000" >PRODUCTS</a></h2>
    <h2>  <a href="Services.html" class="nounderline" style="color:#000">SERVICES</a></h2>
     <h2> <a href="about.html" class="nounderline" style="color:#000">ABOUT</a></h2>
       <h2><a href="location.html" class="nounderline" style="color:#000">LOCATION</a></h2>
       <h2><a href="purchase.php" class="nounderline" style="color:#000">PURCHASE</a></h2>
</div>




<!-- this is the slideshow starting -->
<div class="columnnews">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a href="living1.jpg" target="_blank" class="nounderline">


  <img src="living1.jpg"  alt="firstwebpage" height="400" width="1050" >
  <div class="text" >INDOOR SPECIAL</div>
 </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a href="FLOR.jpg" target="_blank" class="nounderline">
  <img src="FLOR.jpg" height="400" width="1050">
  <div class="text" >OFFICE SPECIAL</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
   <a href="STONE (2).jpg" target="_blank" class="nounderline">
  <img src="STONE (2).jpg" height="400" width="1050">
  <div class="text" >OUTDOOR SPECIAL</div>
  </a>
</div>

</div>
 </a>
<br>

<div style="text-align:justify">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
</div>


<div class="row">
<h1  align="center" >TILE LANKA OUR MISSION</h1>
<p align="center"  style="padding-left:1em">
Our goal is recognize the needs of the market and offer the best products and value for every category and every channel.</p><p align="center"  style="padding-left:2em"> We will continue to produce a superior product for commercial and residential applications through investments in the </p> <p align="center"  style="padding-left:3em"> latest technology  and a strong commitment to our employees, our customers and the environment.</p>
</div>

<div class="row">
  &nbsp;
</div>
<div class="row">
  &nbsp;
</div>
<div class="row">
  <div class="column">
    <div class="container" >
    <a target="_blank" href="Offers.html" class="nounderline">
  <img src="spcial.jpg" alt="Avatar" class="image" style="width:60%">
  <div class="middle">
    <div class="text1">25% discount for all floor tile in this avurudu season</br>aaaaaa
    </div>
   </a>
  </div>
</div>
</div>

<div class="column">
<div class="container" >
<a target="_blank" href="NewArrivals.html">
  <img src="newarri.jpg" alt="Avatar" class="image" style="width:60%">
  
    </a>
  
</div>
</div>

<div class="column">
    <div class="container" >
    <a target="_blank" href="News.html">
  <img src="newss.png" alt="Avatar" class="image" style="width:80%" >
  </a>
  <div class="middle">
    

    
  </div>
</div>
</div>
</div>

<!-- This is the slide show script used-->
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
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>



<!-- This is the footer-->
<div id="footer">
<br>
  <p>Privacy Policies</p>
    <p>Terms & Conditions</p>
     <a href="Sitemap1.png" class="nounderline" style="color:#FFF"> <p>Site Map</p></a>
     
     
   <a href="about.html" class="nounderline" style="color:#FFF">   <p  style="padding-left:8em">Contact Us  &nbsp;&nbsp;<a href="WWW.facebook.com"><img src="facebook.PNG"  style="border-bottom:thick" width="30"/></a>&nbsp;&nbsp;<a href="WWW.twitter.com"><img src="twitter.PNG"  style="border-bottom:thick" width="30"/></a>&nbsp;&nbsp;<a href="WWW.instagram.com"><img src="insta.PNG"  style="border-bottom:thick" width="30"/></a>&nbsp;&nbsp;<a href="WWW.linkedin.com"><img src="linked.PNG"  style="border-bottom:thick" width="30"/></a></p>

<p align="right" style="font-size:12px">Website Design & Developed By @IFHAM</p>
</div>
</body>
</html>



 






