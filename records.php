<?php
session_start();
?>

<script type="text/javascript">
function rel()
{
    window.location.href=window.location.href;
}
function doalert(checkboxelem)
{
var checkboxes=$("input:checkbox[name='check']:checked");
$(checkboxes).each(function()
{
//code for getting the selected row
var arr=$(this).closest('tr').find('td:not(.check)');
//changing the background of the selected row
$(arr).css('background-color','grey');
//code dealing with the deletion of the row
var id=$(this).closest('tr').attr('id');
//end of code for the deletion of the row
var jj=$(arr).get(0);
var ss=$(arr).get(1);
var ee=$(arr).get(2);
//The code for the quantity to order 
var qq=$(arr).get(5);
//code for getting the location of the place
var ll=$(arr).get(3);
var tc=$(this).closest('tr').find("td:contains('"+qq.innerHTML+"')");

var response=window.confirm("You have selected "+jj.innerHTML+ " " + ss.innerHTML+" As your supplier\nIf you click okay an email will be sent to the supplier ");
if (response == true) 
{
    //code for the calculation of the remaining amount
    $.ajax({
           type: 'POST',
           url : 'delete.php',
           data : {meat :qq.innerHTML},
           success : function(data)
           {
           if(data>=0)
            {
                //only replace the cell value if the remaining amount is greater than 0
          $(tc).html(data);
          //writing info on the webpage
          var div = document.getElementById("alert");
          div.style.color="blue";
          div.style.fontSize="18px";
          div.textContent= "These are the new values for "+ll.innerHTML+" region";
          var text=div.textContent;

         $.ajax({
           type: 'POST',
           url : 'calc.php',
           data :{begin:id},
           success : function(data)
           {
                
           }
           });
           $.ajax({
           type: 'POST',
           url : 'test.php',
           data : {source :ee.innerHTML},
           success : function(data)
           {
            alert(data); 

             }     

                          
           });
            }
            else
            {
                alert("You cannot order from these supplier\nEnter your details again and choose another supplier form the table ");
            }
           setTimeout(rel,5000);
        }
               
       });

}
else
{
    alert("No order has been made");
}



});
 
}

</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="records.css">
	<title>Meat Data </title>
</head>
<body>



<header>
    <div id="top">
        <img src="logo2.PNG" id="logo1">
        <p style="font-weight: bold;font-size: large ;float:left;"> Meat source</p>
        <nav id="links">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="Aboutuus.html">About</a></li>
                <li><a href="Contactus.php">Contact us</a></li>
                <li><a href="records.php">Details</a></li>
            </ul>
        </nav>
    </div>
    <div id="top1">
        <div id="top2">
            <h1 style="text-align: center;color:white;padding: 120px;font-weight: bolder"> Here are the details of the meat supply
            </h1>
        </div>
    </div>
</header>

<div class="container" id="table1">
<div id="alert">  </div>
<div id="one">
<table width="600px" border="1" cellpadding="1" cellspacing="1" id="firsttable" >
   <tr>

<th> fname</th> 
<th> lname</th>
<th> email</th>
<th> location</th>
<th> time</th>
<th> Quantity</th>
<th>Select if interested</th>
	</tr>


<?php
//connecting to the database
$db= array (
      'DB_USERNAME' => 'root',
      'DB_PASSWORD' => '',
);


if(isset($_POST['submit']))
{

$location=$_POST['location'];
$Quantityi=$_POST['Quantityi'];
//sending of the quantity details to the next page
$_SESSION['quantity2']=$Quantityi;

//echo "$Quantityi";

try
{
    $conn= new PDO('mysql:host=localhost;dbname=details', $db['DB_USERNAME'],$db['DB_PASSWORD']);

    $stmt=$conn->prepare('SELECT * FROM submit WHERE location=:location AND DATE(time)=DATE(NOW())'); 
    
    $stmt->bindParam(':location', $location, PDO::PARAM_STR);
    $stmt->execute();
    while($details=$stmt ->fetch())
{
echo "<tr id='$details[userid]'>";
echo "<td id='cell'>".$details['fname']."</td>";
echo "<td>".$details['lname']."</td>";
echo "<td>".$details['email']."</td>";
echo "<td>".$details['location']."</td>";
echo "<td>".$details['time']."</td>";
echo "<td>".$details['Quantity']."</td>";
echo "<td><input type='checkbox' name='check' onchange='doalert(this)'/></td>";
echo "</tr>";   
}

$row = $stmt->rowCount();
if ($row==0)
{
   echo '<p style="color:red ; font-weight: bold;"><i> No suppliers in '.$location.' region have given their information yet </i></p>';
}

}
catch(PDOException $e)
{
    echo "Error";
}

}

else
{
    
}
?>
</table>





</div>

<div id="two">

<form method="post" action="">
         <h3 style="color:black">Enter your location</h3> 
         <input type="text" name="location" required>
         <br>
         <br>
         <h3 style="color:black">The quantity to order</h3> 
         <input type="text" name="Quantityi" required>
         <br>
         <br>
         <input type ="submit" name="submit" value = "Search" id="submit">
     </form>

</div>

</div>


<div id="empty1">
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