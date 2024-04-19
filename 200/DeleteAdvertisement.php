<?php session_start();

	$con = mysqli_connect("localhost","root","","200") ;//Connet to the data base with 
	if (!$con){
		die("Sorry we are facing some tech issue");
	}
	$sql ="DELETE FROM `tbladvertisement200` WHERE `tbladvertisement200`.`advertisementID` = ".$_SESSION["id"]."";
	
	
	mysqli_query($con,$sql);
		header('location:ViewMyAdvertisements.php');
?> 