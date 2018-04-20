<?php
session_start();
$connect= new mysqli('localhost','root','','signup');
if($connect->connect_error)
{
     die('connection failed');
}
else
{
     echo "connection worked";
}


if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM submit WHERE username='$username' AND password='$password'";

$result = $connect->query($sql);

if($result->num_rows > 0)
{
   while($row = $result->fetch_assoc())
   {
    echo "The data gotten";
    $_SESSION['username']=$username;
    header("location: details.php");
    die();
   }
   
}
else
{
    echo "Wrong data"; 
}

}
$connect->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="Signup.css">
</head>
<body>



<?php
include 'connect1.php';?>
<?php
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
//inserting data
$sql = "INSERT INTO submit (username,email,password)
VALUES ('$username','$email','$password')";

//checking if the data has been posted

if ($conn->query($sql) === TRUE)
{
    $status= "An email has been sent to you";
}
else
{
    echo "No new record created";
}

}
else
{
    echo "code not working";
}
$conn->close();
?>




<header>
    <div id="top">
        <img src="logo2.PNG" id="logo1">
        <p style="font-weight: bold;font-size: large ;float:left;"> Meat source</p>
        <nav id="links">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="Aboutuus.html">About</a></li>
                <li><a href="Contactus.php">Contact us</a></li>
                <li><a href="Signup.html">Sign up</a></li>
                <li><a href="#login">Login</a></li>
                 <li><a href="records.php">Details</a></li>
            </ul>
        </nav>
    </div>
</header>
<div id="ftop">
    <div id="stop">
        <h2 style="color:white;font-weight: bolder"> You signing up and login in will
        <br> allow us to get details easily</h2>
    </div>
</div>
<div id="top1">

<div id="login" >
    <h3 style="color:white">Login if you have an account</h3>
    <form method="post" action=" ">
        <h1 style="color:crimson"> Login </h1>
        <h3 style="color:white">username</h3> :    <input type="text" name="username">
        <br>
        <br>
        <h3 style="color:white">Password</h3> :    <input type="password" name="password">
        <br>
        <br>
         <input type ="submit" name="login" value = "login">
         
        </form>
    </form>
</div>

    <div id="signup">
        <h3 style="color:white">Create an account</h3>
        <form method="post" action=" ">
            <h1 style="color:crimson"> Sign up </h1>
            <h3 style="color:white">Username</h3> :    <input type="text" name="username">
            <br>
            <br>
            <h3 style="color:white">Email</h3> :    <input type="text" name="email">
            <br>
            <br>
            <h3 style="color:white">Password</h3> :    <input type="password" name="password">
            <br>
            <br>
            <input type ="submit" name="submit" value = "submit" id="submit">
        </form>
<?php if(isset($status))
     {
        echo $status;
     }
     ?>
    </div>
 
</div>
 


<div id="foote">
    <section id="content7">
        <h1> Reach us</h1>
        <p>
            To get to us contact us on<br>
            071245789<br>
            or our email meat@gmail.com<br>
            or our facebok page meat_source
        </p>
        <img src="facebook.jpeg" style="width:40px;height: 40px; opacity:.9">
        <img src="gmail.jpeg" style="width:40px;height: 40px; opacity:.9">
    </section>

    <section id="foot">
        <img src="gallery.PNG" style="opacity: .9;">
    </section>

    <section id="foot2">
        <marquee style="color: white; font-size:x-large; text-align: center">Eat healthly and live longer than usual </marquee>
    </section>

</div>

<footer>
    <p style="font-size: large; font-weight: bold">Copyrighted@robisearch</p>
</footer>
</body>
</html>