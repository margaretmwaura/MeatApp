<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="Contact.css">
</head>
<body>

<?php include 'connect.php';?>
<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$message=$_POST['message'];
//inserting data
$sql = "INSERT INTO submit (fname,lname,email,message)
VALUES ('$fname','$lname','$email','$message')";

//checking if the data has been posted

if ($conn->query($sql) === TRUE)
{
    $status="Thank you for your message";
}

}
else
{

}




?> 

<header id="intro">
<div>
     <nav class="navbar navbar-default">
  <div class="container-fluid" id="icon1">
     
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    <!-- The code for the company logo goes here -->
        
        <img src="logo2.PNG" id="logo1" class="img-responsive">
        <p style="font-weight:bold;font-size:15px;float:left;color:black;" id="logodes" class="logo"> 
        Meat<br>
        <span style="color:crimson;font-size:17px">Source</span></p>

     <!-- The end of the code -->
     <!-- The code for the navigation bar goes here -->
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.html" class="nav-link">Home</a></li>
        <li><a href="Aboutuus.html" class="nav-link">About us</a></li>
        <li><a href="Contactus.php" class="nav-link">Contact us </a></li> 
        <li><a href="Details.php" class="nav-link">Details </a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>

   </nav>
 
</div>
</header>

<div class="backfixed fixed1">
<div class="container" id="top1">
<div class="row">
<div class="col-sm-2">
    
</div>
<div class="col-sm-8" style="text-align:center;padding-top:30px;">
    <p style="font-size:40px;color:white;font-weight:bolder;padding-top:150px;">Keep in touch with us </p>
<p style="font-size:23px;color:white;font-family:Arial Verdana;">Reach to us whenever you cannot get quality meat</p>
<p style="font-size:23px;color:white;font-family:Arial Verdana;">Get value for your money</p>
<input type="button" value="TRY US" id="orderingbutton" onclick="window.location.href='records.php'">
</div>
 <div class="col-sm-2">
    
</div>

    
</div>
    
</div>

</div>


<div class="backscroll">
<div id="encourage">
    <p style="color:black; font-size:20px;text-align: center;font-weight:bold;"><i>
        "Our team is a hardworking and a loving team that wont
        let you get lost in case of a problem they
        hold our customers with the highest of esteem
        Get to them at anytime you got trouble
       They are always there to help..."
        the manager gave his word
    </i></p>
</div>
    


<div id="overflowingimages" class="container">
    <div class="row">
    <div class="col-sm-2">
        
    </div>
    <div class="col-sm-8" id="twoima">
        <img src="capture15.PNG" id="ima">
        <img src="capture16.PNG" id="ima">
    </div>
    <div class="col-sm-2">
        
    </div>
    </div>

</div>

</div>
</body>
</html>