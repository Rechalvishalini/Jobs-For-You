<?php
include "DB_con.php";
?>

<html>
<head>
<link href="style1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

<title>Admin Confirmation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 30px;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: #006699;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #9999ff;
}

div.container1 {
  border-radius: 5px;
  background-color:#a3a3c2";
  padding: 20px;
}
footer {
  text-align: center;
  padding: 3px;
  background-color:#33334d;
  color: #f0f0f5;
}
</style>

</head>

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
  <a href="View_message.php"><i class="fa fa-envelope-open" aria-hidden="true"></i></i>Messages</a>
  <a href="Admin_profile.php"><i class="fas fa-user-circle"></i>Profile</a>
  <a href="Admin_logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
</div>
<div>
<h2 style="color:#b30059">Add the confirmation of qualified applicant</h2>
        
	<form method="post" action="">
         <div class="container1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<lable>ID</lable>
		<input type="text" name="id">
	
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<lable>First Name</lable>
		<input type="text" name="fname">
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<lable>Last Name</lable>
		<input type="text" name="lname">
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<lable>Job Name </lable>
		<input type="text" name="jobname">
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<lable>Ref Id</lable>
		<input type="text" name="ref_no">
		
		&nbsp;&nbsp;&nbsp;<input type="submit" name="insert" value="Insert">
		&nbsp;&nbsp;&nbsp;<input type="submit" name="delete" value="Delete">
		&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="Update">
		
	</form>
<br><br>
<table>
<tr>
<th>#</th><th>FirstName</th><th>LastName</th><th>JobName</th><th>Ref_No</th></tr>

<?php
$res=mysqli_query($conn,"SELECT * FROM confirmation");
while($row=mysqli_fetch_array($res))
{
	echo "<tr>";
	echo"<td>";echo $row["Id"];echo"</td>";
	echo"<td>";echo $row["First_name"];echo"</td>";
	echo"<td>";echo $row["Last_name"];echo"</td>";
	echo"<td>";echo $row["Job_name"];echo"</td>";
	echo"<td>";echo $row["Ref_no"];echo"</td>";
	
}
?>

</table>

<?php
if(isset($_POST['insert']))
{
 mysqli_query($conn,"INSERT INTO confirmation(Id,First_name,Last_name,Job_name,Ref_no) VALUES ('$_POST[id]','$_POST[fname]','$_POST[lname]','$_POST[jobname]','$_POST[ref_no]')");
	?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php
 
}
if(isset($_POST['delete']))
{
 mysqli_query($conn,"DELETE FROM confirmation WHERE Id= '$_POST[id]'") or die(mysqli_error($conn));
	?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php
 
}
if(isset($_POST['update']))
{
 mysqli_query($conn,"UPDATE confirmation SET First_name='$_POST[fname]',Last_name='$_POST[lname]',Job_name='$_POST[jobname]' WHERE Id='$_POST[id]'") or die(mysqli_error($conn));
	?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php

}


?>


<br><br><br>
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