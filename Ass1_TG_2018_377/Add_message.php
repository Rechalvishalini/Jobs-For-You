<?php
include_once 'DB_con.php';
if(isset($_POST['insert']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $comment = $_POST['comment'];

	 
	 $sql = "INSERT INTO complaint (name,email,complaint)
	 VALUES ('$name','$email','$comment')";
	 if (mysqli_query($conn, $sql)) {
		
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>


<html>

<head>
<link href="style1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
.about-section {
  padding: 30px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  width:60%;
}
footer {
  text-align: center;
  padding: 3px;
  background-color:#33334d;
  color: #f0f0f5;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<title>Our details</title>
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
<nav class="navtop">  
  <a href="Adminlogin.html"><i class="fa fa-fw fa-user"></i>Admin Login</a></nav>
</div>
<br>


<center>
<div class="about-section">
  <h3>Our way</h3>
  <p>We are really welcome your Messages.</p>
  <p>You can cotact with us and get a advices about the jobs in our professionals</p>
  <p>Thank you for join with us.</p>
  <h3>Our Team Details</h3>
<table>
<tr><th>Team Members</th><th>Email</th></tr>
<tr><td>John Fenando</td><td>john@gmail.com</td></tr>
<tr><td>Rebecca Dilux</td><td>rebecca@gmail.com</td></tr>
</table>
<h4>Conduct us and get more details</h4>
<h4>Hotline Number : 009467844679</h4>
</div>
</center>
<br><br><br><br><br>


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
        <br><br>
                
                
                
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