<?php
include_once 'DB_con.php';

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: Job_confirmation.php');
	exit;
}

$stmt = $conn->prepare('SELECT password, email FROM applicant_log WHERE id = ?');

$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style1.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <a href="Applicant_profile.php"><i class="fas fa-user-circle"></i>Profile</a>
  <a href="Applicant_logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>