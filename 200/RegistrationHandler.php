<?php 
if(isset($_POST["btnSubmit"]))
{
	$fullname = $_POST["txtName"];
	$eamil = $_POST["txtEmail"];
	$password = $_POST["txtPassword"];
	$Contacnumber = $_POST["txtContactNo"];
	
	
	
	
	$con = mysqli_connect("localhost","root","","200") ;//Connet to the data base with 
	if (!$con){
		die("Sorry we are facing some tech issue");
	}
	$sql ="INSERT INTO `tbluser200`(`email`, `name`, `contactNumber`, `password`) VALUES ('".$eamil."','".$fullname."','".$Contacnumber."','".$password."');";
	mysqli_query($con,$sql);
		header('location:myAccount.php');
	}
	
else
{
	header('location:login.php');
}
?>