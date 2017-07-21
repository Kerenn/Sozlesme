<?php
	include_once('DB.php');
	
	$evsahibi   = $_POST['evsahibi'];
	$evsahibitc = $_POST['evsahibitc'];
	
	if(mysqli_query($conn,"INSERT INTO test(evsahibi,evsahibitc) VALUES ('$evsahibi', '$evsahibitc')"))
	    echo "Successfully Inserted";
	else
	    echo "Insertiıon Failed" ;
	
?>