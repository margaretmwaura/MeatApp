<?php
session_start();
if(!isset($_SESSION['username']))
{
     header('Location: Signup.php');
}
include 'connect2.php';?>

<?php
if(isset($_POST['submit']))
{


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$location=$_POST['location'];  
$Quantity=$_POST['Quantity']; 
    
//inserting data
$sql = "INSERT INTO submit (fname,lname,email,location,Quantity)
VALUES ('$fname','$lname','$email','$location','$Quantity')";

//checking if the data has been posted

if ($conn->query($sql) === TRUE)
{
    
}
else
{
    echo "No new record created";
}

}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="details.css">
</head>
<body>

<script>
     function mine()
     {
        alert("Message has been received");
     }
</script>

<header>
    <div id="top">
        <img src="logo2.PNG" id="logo1">
        <p style="font-weight: bold;font-size: large ;float:left;"> Meat source</p>
        <nav id="links">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="Aboutuus.html">About</a></li>
                <li><a href="Contactus.php">Contact us</a></li>
                 <li><a href="logout.php">Logout</a></li>
                <li><a href="records.php">Details</a></li>
            </ul>
        </nav>
    </div>
    <p style="font-weight:bold"> Hello <?php echo $_SESSION['username'];?> </p>
    <div id="top1">
        <div id="top2">
            <h1 style="text-align: center;color:white;padding: 120px;font-weight: bolder"> Come to us let us give you an easier
            <br> way out</h1>
        </div>
    </div>
</header>

<div id="empty">
</div>

<div id="first" class="container">
    <p style=" font-size: large;"> Enter the details of your meat supply so that
    <br> people can find you and do business with you which will 
    <br> much more easier and of more benefit 
    </p>
</div>

<div id="empty1">
</div>


<div id="form1">

<div id="form2">

<form method="post" action="" onsubmit="mine()">
         <h1 style="color:white"> Enter details on your meat supply and location </h1>
         <h3 style="color:white">First name</h3> : <input type="text" name="fname" required>
         <br>
         <br>
         <h3 style="color:white">Last name</h3>: <input type="text" name="lname" required>
         <br>
         <br>
         <h3 style="color:white">email</h3> : <input type="email" name="email" required>
         <br>
         <br>
         <h3 style="color:white">location</h3> : <input type="text" name="location" required>
         <br>
         <br>
         <h3 style="color:white">Quantity</h3> : <input type="text" name="Quantity" required>
         <br>
         <br>
         <input type ="submit" name="submit" value = "submit" id="submit">
     </form>

</div>

</div>

<div id="empty3">
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
        <marquee style="color:white;font-size:x-large">Eat healthly and live longer than usual </marquee>
    </section>

</div>

<footer>
    <p style="font-size: larger;font-weight:bold;">Copyrighted@robisearch</p>
</footer>
</body>
</html>























