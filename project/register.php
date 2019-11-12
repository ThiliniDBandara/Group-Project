<?php
	session_start();
	require_once('SQLConnection.php');
	//phpinfo();
?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="iif.css" rel="stylesheet" />

<title>Register</title>
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">





</head>
<body bgcolor="#999999">


<div class="row">

<div id="header"  >
<a href="assignment.html"><img src="Capture6.PNG"  /></a>
 <img src="MEW.PNG"/  >
 
 
 <div class="navbar" style="float:right;">
  <a href="inquiry.html">Login</a>
  <div class="navbar" style="float:right;">
  <a href="inquiry.html">Register</a>
  &nbsp;
  <div class="navbar" style="float:right;">
  <a href="inquiry.html">Feedback</a>
</div>
</div>
</div>
</div>
</div>



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
    </div>
  </div> 
  
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
</div>
<div class="row">
&nbsp;
</div>


<!-- feedback form starts-->

 
	<div id="main-wrapper">
	<center><h2>Sign Up Form</h2></center>
		<form action="register.php" method="post">
			<div class="imgcontainer">
				<img src="user.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="cpassword" required>
				<button name="register" class="sign_up_btn" type="submit">Sign Up</button>
				
				<a href="index.php"><button type="button" class="back_btn"><< Back to Login</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
				$query = "select * from users where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into users values('$username','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: assignment.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
	</div>

           
           



<div id="footer">
<br>
  <p>Privacy Policies</p>
    <p>Terms & Conditions</p>
      <a href="Sitemap1.png" class="nounderline" style="color:#FFF"> <p>Site Map</p></a>
      <a href="about.html" class="nounderline" style="color:#FFF"><p  style="padding-left:8em">Contact Us  &nbsp;&nbsp;<a href="WWW.facebook.com"><img src="facebook.PNG"  style="border-bottom:thick" width="30"/></a>&nbsp;&nbsp;<a href="WWW.twitter.com"><img src="twitter.PNG"  style="border-bottom:thick" width="30"/></a>&nbsp;&nbsp;<a href="WWW.instagram.com"><img src="insta.PNG"  style="border-bottom:thick" width="30"/></a>&nbsp;&nbsp;<a href="WWW.linkedin.com "><img src="linked.PNG"  style="border-bottom:thick" width="30"/></a></p>
      <p align="right" style="font-size:12px">Website Design & Developed By @IFHAM</p>
</div>



</body>
</html>





