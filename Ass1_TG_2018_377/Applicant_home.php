<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: Job_confirmation.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style1.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
footer {
  text-align: center;
  padding: 3px;
  background-color:#33334d;
  color: #f0f0f5;
}
</style>
	</head>
<title>Applicant interview details</title>
<body style="background-color:#e0e0eb";>
<div class="header">
<h1>
<span style="color:#ffb3d1">Jobs</span>
<span style="color:#f0f0f5">For</span>
<span style="color:#FFCCCC">You</span>
</h1>
</div>

<div class="topnav">
  <a href="Index.html"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="Job_apply.html"><i class="fa fa-fw fa-search"></i>Apply</a>
  <a href="Job_confirmation.php"><i class="fa fa-file-text-o"></i>Job Conformation</a>
  <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i>Contact us</a>
  <a href="Applicant_profile.php"><i class="fas fa-user-circle"></i>Profile</a>
  <a href="Job_confirmation.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
</div>
		</nav>
		<div class="content">
			
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
<h2 style="color: #b30059;text-align:center;">You can find your interview details according your Job title</h2>
<table>
<tr><th>Job_Title</th><th>Date</th><th>Time</th></tr>
<tr><td>Web Developer</td><td>12.12.2020</td><td>8.00am to 3pm</td></tr>
<tr><td>System Analysis</td><td>13.12.2020</td><td>9.00am to 1pm</td></tr>
<tr><td>Computer Programmer</td><td>14.12.2020</td><td>8.00am to 2pm</td></tr>
<tr><td>IT Technician</td><td>15.12.2020</td><td>8.00am to 3pm</td></tr>
<tr><td>Support Specialist</td><td>16.12.2020</td><td>9.00am to 3pm</td></tr>
<tr><td>Network Engineer</td><td>17.12.2020</td><td>10.00am to 3pm</td></tr>
<tr><td>IT Security Specialist</td><td>18.12.2020</td><td>9.00am to 1pm</td></tr>
<tr><td>Data Scientist</td><td>19.12.2020</td><td>8.00am to 3pm</td></tr>
<tr><td>IT Director</td><td>20.12.2020</td><td>8.00am to 3pm</td></tr>
</table>
<h3>
<span style="color:#202060">The interview place address:</span>
<span style="color:#2d2d86">&nbsp;&nbsp;&nbsp;&nbsp;Jobs For You, &nbsp; Main street, &nbsp; Negambo.</span>
</h3>
<h4>Note : </h4>
<h4 style="color: red;">Reffer above details and come to the interview accoding to the date.<br>
 When you come to the interview you should bring your A/L and O/L and your important details.</h3>
<br><br>

 <footer>
  <p>Author: J.RechalVishalini &nbsp;&nbsp;&nbsp;&nbsp;TG/2018/377<br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <p>&copy;2020 University Of Ruhuna.All Rights Reserved</p>
     <div>
                            <p> <i class="fa fa-map-marker mx-2 "></i>
                                    Faculty OF Technology,
                                   University Of Ruhuna,Karagoda Uyankoda Kamburupitiya 
                                  Matara, Sri Lanka - 81000</p>
                        </div>

                        <div> 
                            <p><i class="fa fa-phone  mx-2 "></i> +94 762043010</p>
                        </div>
                        <div>
                            <p><i class="fa fa-envelope  mx-2"></i><a href="#"> &nbsp;derishrechal@gmail.com</a></p>
                        </div>  
                
                
                
                    <p>About the Company</p>
			<p>We offer the best jobs is Sri Lanka in IT industry,High valuable and Demanded jobs,Can Earn more than 100,000/- per month.</p>
                    <div align="center">
                        <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="#"><i class="fa fa-google fa-fw"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="#"><i class="fa fa-youtube fa-fw"></i></a>
                    </div>

              
         
     </footer>
    

</body>
</html>


		

