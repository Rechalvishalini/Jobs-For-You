<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
footer {
  text-align: center;
  padding: 3px;
  background-color:#33334d;
  color: #f0f0f5;
}

* {
  box-sizing: border-box;
}

.container {
  padding: 10px;
  background-color: #e0e0eb;
}

.registerbtn {
  background-color:#0077b3;
  color: white;
  padding: 13px 13px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
  
}

.registerbtn:hover {
  opacity: 1;
}

.input_style{
	padding:5px 50px;
}


.form_style{
	margin-left:auto;
	margin-right:auto;
	text-align:center;
	background-color: #c1c1d7;
	padding:20px;
	width:65%;
	border:2px;
	
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #e0e0eb;
  text-align: center;
}
</style>

</head>
<title>Job applying</title>
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
  <a href="Career_guidence.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i>Career Guidence</a>
  <a href="Adminlogin.html"><i class="fa fa-fw fa-user"></i></i>Admin Login</a></nav>
</div>
<div class="container">
<form method="POST" action="Add_applicant.php" class="form_style">
    <h2 style="color: #ff0066">Register</h2>
    <h3><span style="color:#993366">Please fill in this form for temporaly resever your work. This information will be secure.</span></h3>
    <span style="color:red;">
	
	Plese consider that your information should be accuracy. We will put the confirmation details in the Job Confirmation tab
	</span> 
    <hr>

    <label><b>First_Name</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input_style" placeholder="Enter First_Name" name="first" id="first_name" required><br><br>

    <label><b>Last_Name</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="text" class="input_style" placeholder="Enter Last_Name" name="last" id="last_name" required><br><br>
    
    <label><b>Age</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" class="input_style" placeholder="Enter Age" name="age" id="age" required><br><br>

    <label><b>Gender</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text"  class="input_style" name="gender" placeholder="Enter your gender" required><br><br>
     
    <label><b>Email</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" class="input_style"  placeholder="Enter Email" name="email" id="email" required><br><br>

    <label><b>Address</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
    <textarea id="add"  class="input_style" rows="6" cols="23" name="address" required placeholder="Enter your address"></textarea><br><br>

    <label><b>Telephone No</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" class="input_style" placeholder="Enter TP_NO" name="tpno" id="tp_no" required><br><br>

    <label><b>Job_Name</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" class="input_style" placeholder="Enter job_name" name="job" id="jobname" required><br><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <input type="submit" name="insert" class="registerbtn">
 

 <h4>
<span style="color:red">Note:</span>
<span style="color:black">After filling this form you will get the link in email for send your CV information<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You should send the rquired information which you get in email, before the deadline in the email.</span></h4>
 	</div> 
		</form>



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