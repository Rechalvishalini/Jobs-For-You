<!DOCTYPE html>
<html lang="en">
<head>
<link href="style1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<title>Job Confirmation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
form{background-color:"powderblue"}
footer {
  text-align: center;
  padding: 3px;
  background-color:#33334d;
  color: #f0f0f5;
}

.login {
  	width: 400px;
  	background-color: #ffffff;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 100px auto;
}
.login h1 {
  	text-align: center;
  	color: #5b6574;
  	font-size: 24px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}
.login form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding-top: 20px;
}
.login form label {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
  	height: 50px;
  	background-color: #3274d6;
  	color: #ffffff;
}
.login form input[type="password"], .login form input[type="text"] {
  	width: 310px;
  	height: 50px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;
}
.login form input[type="submit"] {
  	width: 100%;
  	padding: 15px;
 	margin-top: 20px;
  	background-color:#0040ff;
  	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}
.login form input[type="submit"]:hover {
	background-color: #2868c7;
  	transition: background-color 0.2s;
}
</style>



</head>
<title>Job confirmation</title>
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
  <a href="Job_confirmation.php"><i class="fa fa-file-text-o"></i>Job Confirmation</a>
  <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i>Contact us</a>
<nav class="navtop">  
  <a href="Admin_profile.php"><i class="fas fa-user-circle"></i>Profile</a>
  <a href="Admin_logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
</div>

<h2 style="color: #b30059;text-align:center;">You can find the Users messages</h2>

<table>
<tr>
<th>Name</th><th>Email</th><th>Message</th></tr>

<?php
include_once 'DB_con.php';
$res=mysqli_query($conn,"SELECT * FROM complaint");
while($row=mysqli_fetch_array($res))
{
	echo "<tr>";
	echo"<td>";echo $row["name"];echo"</td>";
	echo"<td>";echo $row["email"];echo"</td>";
	echo"<td>";echo $row["complaint"];echo"</td>";
	
	
}
?>

</table>
<br><br><br><br>

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
    
</html>
   
  