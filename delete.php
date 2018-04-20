
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="details";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
} 

//code for obtaining the quantity amount
if(isset($_POST['meat']))
{
     	$meat1=$_POST['meat'];
         $quantity3=$_SESSION['quantity2'];
         $upqu= $meat1-$quantity3;
         $_SESSION['upqu1']=$upqu;
        echo "$upqu";

}


?>