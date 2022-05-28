<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: Adminlogin.html');
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
.registerbtn {
  background-color: #5c5cd6;
  color: white;
  padding: 20px 20px;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
  margin-left:auto;
  margin-right:auto;
  display:block;
  margin-top:5%;
  margin-bottom:10%
  
}
footer {
  text-align: center;
  padding: 3px;
  background-color:#33334d;
  color: #f0f0f5;

}
</style>

</head>
<title>Admin</title>
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
  <a href="Insert_confirmation.php"><i class="fa fa-check-square" aria-hidden="true"></i></i>Add Confirmation</a>
  <a href="View_message.php"><i class="fa fa-envelope-open" aria-hidden="true"></i></i>Messages</a>
  <a href="Admin_profile.php"><i class="fas fa-user-circle"></i>Profile</a>
  <a href="Admin_logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
</div>

		
<div class="content">
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
				</div>

<div>
<h2 style="color:  #b30059;text-align:center">Details of Job Applicants</h2>

<?php
include_once 'DB_con.php';


$sql = "SELECT First_name, Last_name, Age, Sex, Email_id, Phone_no, Job_name   FROM applicants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>First_Name</th><th>Last_Name</th><th>Age</th><th>Sex</th><th>Email_ID</th><th>Phone_No</th><th>Job_Name</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["First_name"]. "</td><td>" . $row["Last_name"]. "</td><td> " . $row["Age"]. "</td><td> " . $row["Sex"]."</td><td> ". $row["Email_id"]."</td><td> ". $row["Phone_no"]."</td><td> " . $row["Job_name"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

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