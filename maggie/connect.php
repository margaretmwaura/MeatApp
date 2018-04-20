<? php
$servername="localhost";
$dbusername="root";
$dbpassword=" ";
$dbname="meatcontact";


// create connection
$conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);

//check connection
if ($conn-> connect_error)
{
	die("connection failed: ".$conn->connect_error);
}
echo "Connection succesful"
$conn->close();
?>