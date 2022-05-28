 <?php
    include_once 'Db_con.php';
    ?>

<!DOCTYPE html>
<html>
<head>
<link href="style1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Contact details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.input {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 10px;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color:#0077b3;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button {
  width: 10%;
  background-color:#0040ff;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color:#9999ff;
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
  <a href="Job_confirmation.php"><i class="fa fa-file-text-o"></i>Job Confirmation</a>
  <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i>Contact us</a>
<nav class="navtop">  
  <a href="Adminlogin.html"><i class="fa fa-fw fa-user"></i>Admin Login</a></nav>
</div>

<h2 style="color:#b30059;text-align:center;">Our contact details You can find the below link</h2>
 <h3 style="text-align:center";>You can get more our conduct details and you can conduct us choose this button  <a href="Add_message.php"><button>Click here</button></a></h3>

    <h2 style="color:#3d3d5c";>Drop a message about us</h2>
    <form action="Add_message.php"  name="form1" method="post" required>
    <div class="container1">
    &nbsp; &nbsp; &nbsp;<label>Name</label>
    <input type="text" id="Name" name="name" class="input" placeholder="Your name.." required>

    &nbsp; &nbsp; &nbsp;<label>Email</label>
    <input type="email" id="email" name="email"  class="input" placeholder="Your email.." required>

    &nbsp; &nbsp; &nbsp;<label>Message</label><br>
    <textarea id="comment" name="comment" rows="10" cols="54"  class="input" placeholder="Type anything..." required></textarea><br>
    &nbsp; &nbsp; &nbsp;<input type="submit" name="insert" value="Submit">
</form>
</div>
<br>   
   
  
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



 
  

