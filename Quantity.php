<?php
session_start();
$check=$_SESSION['upqu1'];
echo "<script type=text/javascript>
	var test='$check';
      </script>";
echo "<script type=text/javascript src=records.php></script>";
?>