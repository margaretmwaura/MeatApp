<?php include 'database.php';?> 
<?php
 
// create a variable
$first_name=$_POST['first_name'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$message=$_POST['message'];
 
//Execute the query
// Before using $_POST['value']    
  
mysqli_query($connect,"INSERT INTO contactus(first_name,email,phone_number,message)
				VALUES('$first_name','$email','$phone_number','$message')");
if(mysqli_affected_rows($connect) > 0){
	echo "<p>message submitted</p>";
	 
	
} else {
	echo "message not submitted<br />";
	echo mysqli_error ($connect);
}
 ?>