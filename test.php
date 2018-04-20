
    <?php 

    if(isset($_POST['source']))
     {
     	$value=$_POST['source'];
        echo "An email has been sent to this address $value\nfor the delivery of your supply";
     }
     else
     {
        echo "Not working ";
     }

    ?>
