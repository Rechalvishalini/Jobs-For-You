<?php
include_once 'DB_con.php';
if(isset($_POST['insert']))
{	 
	 $fname = $_POST['first'];
	 $lname = $_POST['last'];
	 $age = $_POST['age'];
	 $sex = $_POST['gender'];
	 $email = $_POST['email'];
         $address = $_POST['address'];
         $phone = $_POST['tpno'];
	 $job_name = $_POST['job'];
	 
	 $sql = "INSERT INTO applicants (First_name,Last_name,Age,Sex,Email_id,Address,Phone_no,Job_name)
	 VALUES ('$fname','$lname','$age','$sex','$email','$address','$phone','$job_name')";
	 
	 if (mysqli_query($conn, $sql)) {
	
        echo '<script type="text/javascript">alert("Data saved")</script>';

	 } else {
		echo'<script type="text/javascript">alert("Data not saved")</script>';
	 }
	 mysqli_close($conn);
}
?>
<html>

<head>
<link href="style1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>

footer {
  text-align: center;
  padding: 3px;
  background-color:#33334d;
  color: #f0f0f5;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<title>Job apply</title>
<body style="background-color:#e0e0eb";>
<div class="header">

  <h1 style="color:#f0f0f5;">Jobs For You</h1>
</div>

<div class="topnav">
  <a href="Index.html"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="Job_apply.html"><i class="fa fa-fw fa-search"></i>Apply</a>
  <a href="Job_confirmation.php"><i class="fa fa-file-text-o"></i>Job Conformation</a>
  <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i>Contact us</a>
<nav class="navtop"> 
  <a href="Career_guidence.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i>Career Guidence</a> 
  <a href="Adminlogin.html"><i class="fa fa-fw fa-user"></i>Admin Login</a></nav>
</div>

<center>
<h2 style="color:  #b30059;">Current available Jobs...&nbsp;&nbsp;
Apply once change your world</h2>
</center>

<div class="row">
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2 style="color:#e6005c;"> Web developer</h2>
	<p style="color: #002db3;">National average salary: $72,040 per year</p>
        <p class="title">Primary duties: </p>
		<ul>
        <li> Web developers design the appearance, navigation and content organization of a website.</li>
        <li>They use coding languages such as HTML, CSS and JavaScript to manage graphics, applications and content that address a client's needs.</li>
   	</ul>
	<p class="title">Requirements</p>
		<li>Many web developers earn an Associate Degree in Web Development or another relevant IT field.</li>
		<li>Some may pursue a Bachelor Degree in IT or another business field. Others may develop their web design skills through certificate programs or self-paced learning.</li>
		</ul>
		<p><a href="Applicant_form.php"><button class="button">Apply</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2 style="color:#e6005c;"> Systems analyst</h2>
	<p style="color: #002db3;">National average salary: $78,587 per year</p>
        <p class="title">Primary duties: </p>
       <ul>
	   <li> A systems analyst reviews design components and uses their knowledge of information technology to solve business problems.</li>
	   <li>They identify ways that infrastructure needs to change to streamline business and IT operations.</li>
	   </ul>
	<p class="title">Requirements</p>
	<ul>
		<li>A Bachelor's Degree in Computer Science or a related field is often required. </li>
		<li> Coursework in business administration, management and finance may help these professionals better apply their IT knowledge to improving business practices.</li>
		</ul>
        <p><a href="Applicant_form.php"><button class="button">Apply</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2 style="color:#e6005c;">Computer programmer</h2>
	<p style="color: #002db3;">National average salary: $58,343 per year</p>
        <p class="title">Primary duties:</p>
         <ul>
		 <li>A computer programmer is someone who writes new computer software using coding languages like HTML, JavaScript and CSS.</li>
		 <li>Video game software can be updated to improve online gameplay.</li>
		 </ul>
	<p class="title">Requirements: </p>
	<ul>
		<li> A programmer typically completes a Bachelor's Degree in Computer Science and an internship to build their skills.</li>
		<li>Certifications are also strongly encouraged, and there are many coding academies to choose from.</li>
        <p><a href="Applicant_form.php"><button class="button">Apply</button></a></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2 style="color:#e6005c;"> IT technician</h2>
	<p style="color: #002db3;">National average salary: $74,664 per year</p>
        <p class="title">Primary duties:</p>
		<ul>
        <li>An IT technician collaborates with support specialists to analyze and diagnose computer issues. </li>
        <li>They also monitor processing functions, install relevant software and perform tests on computer equipment and applications when necessary.</li>
       </ul>
	<p class="title">Requirements</p>
		<ul>
		<li>IT technicians must earn an Associate Degree in Information Technology or a Bachelor's Degree in Computer Science or Networking. </li>
		<li> Technicians render services for IT companies depending on the industry they choose to work.</li>
	</ul>
		<p><a href="Applicant_form.php"><button class="button">Apply</button></a></p>
      </div>
    </div>
  </div>

<div class="column">
    <div class="card">
      
      <div class="container">
        <h2 style="color:#e6005c;"> Support specialist</h2>
        <p style="color: #002db3;">National average salary: $30,540 per year</p>
         <p class="title">Primary duties:</p> 
         <ul>
		 <li>Support specialists are responsible for reviewing and solving computer network and hardware problems for a business.</li>
		 <li>They can work in a variety of industries to provide general support to a company's employees</li>
	</ul>
	 <p class="title">Requirements:</p>
	<ul>
		<li>Support specialists typically obtain a Bachelor's Degree in Computer Science or Information Technology.</li>
		<li>Having a certificate or an associate degree paired with relevant professional experience may also be acceptable.</li>
        <p><a href="Applicant.php"><button class="button">Apply</button></a></p>
      </div>
    </div>
  </div>


 <div class="column">
    <div class="card">
      
      <div class="container">
        <h2 style="color:#e6005c;"> Network engineer</h2>
	<p style="color: #002db3;">National average salary: $87,919 per year</p>
        <p class="title">Primary duties: </p>
         <ul>
		 <li>Network engineers work on the day-to-day maintenance and development of a company's computer network.</li>
		 <li>Utilizing their skills to make the network available and efficient for all employees within an organization.</li>
		 </ul>
		<p class="title">Requirements:</p>
	<ul>
		<li>These professionals typically need a Bachelor's Degree in Computer Science and Information Systems to understand the functions of a network and become familiar with potential solutions needed to maintain one.</li>
		<li>Require a Master of Business Administration (MBA)</li>
		</ul>
        <p><a href="Applicant_form.php"><button class="button">Apply</button></a></p>
      </div>
    </div>
  </div>

<div class="row">
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2 style="color:#e6005c;">IT security specialist</h2>
	<p style="color: #002db3;">National average salary: $115,819 per year</p>
       <p class="title">Primary duties: </p>
		<ul>
        <li>IT security specialists work in various industries to build and maintain digital protective measures on intellectual property and data that belong to an organization. </li>
        <li>They help companies create contingency plans in case information gets hacked from their networks and servers.</li>
        </ul>
		 <p class="title">Requirements</p>
	<ul>
		<li> A bachelor's degree or professional certification is often required. Courses may involve math, programming.</li>
		<li>Operating systems and certifications offered by the Information Systems Security Certification Consortium (ISC2).</li>
	</ul>
		<p><a href="Applicant_form.php"><button class="button">Apply</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2 style="color:#e6005c;"> Data scientist</h2>
	<p style="color: #002db3;">National average salary: $121,853 per year</p>
        <p class="title">Primary duties:</p>
       <ul>
	   <li>A data scientist analyzes and organizes data to determine trends that can influence business decisions. </li>
	   <li>Some duties vary for specific industries. For example, data scientists in the healthcare industry keep electronic health records (EHRs) intact for hospitals to have access to confidential medical information. </li>
	  
	   </ul>
	<p class="title">Requirements</p>
		<ul>
		<li> Many of these professionals choose to pursue both a Bachelor's and a Master's Degree in IT or other business fields.</li>
		<li>Some pursue additional degrees, coursework and certifications that relate to their specific industry, such as healthcare.</li>
	</ul>
        <p><a href="Applicant_form.php"><button class="button">Apply</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2 style="color:#e6005c;"> IT director</h2>
	<p style="color: #002db3;">National average salary: $123,900 per year</p>
        <p class="title">Primary duties:</p>
         <ul>
		 <li>An IT director oversees the strategy and execution of IT operations for an organization. </li>
		 <li>These professionals may also collaborate with other internal IT professionals as well as executive management to generate contingency plans, budgets and development goals.</li>
		 
		 </ul>
	<p class="title">Requirements</p>
		<ul>
		<li>This position may require a graduate degree and relevant industry certifications, such as in certain programs or applicable management courses.</li>
		<li>Entry and mid-level roles in IT support and database architecture can provide these professionals with the well-rounded experience.</li>
        <p><a href="Applicant_form.php"><button class="button">Apply</button></a></p>
      </div>
    </div>
  </div>
</div>

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



