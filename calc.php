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

if(isset($_POST['begin']))
{
     $idi=$_POST['begin'];
    $upqu2=$_SESSION['upqu1'];
    $sql = "UPDATE submit SET Quantity='$upqu2' WHERE userid='$idi'";

if ($conn->query($sql) === TRUE) 
{
    echo "Record updated successfully";
}
else
{
	echo "failed to update";
}
if($upqu2==0)
{
 $sql = 'DELETE FROM submit WHERE userid='.$idi;

if ($conn->query($sql) === TRUE) 
{
    echo "Record deleted successfully";
} 
else 
{
    echo "Error deleting record: ";
}

}


}

$conn->close();
?>