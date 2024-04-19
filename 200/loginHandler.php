<?php session_start();
if(isset($_POST["btnSubmit"]))
{
	$userName = $_POST["txtEmail"];
	$password = $_POST["txtPassword"];
	$con = mysqli_connect("localhost","root","","200") ;//Connet to the data base with 
	if (!$con){
		die("Sorry we are facing some tech issue");
	}
	$sql ="SELECT * FROM `tbluser200` WHERE `email` = '".$userName."' AND password = '".$password."';";
	$results = mysqli_query($con,$sql);
	if(mysqli_num_rows($results)>0){
		$_SESSION["userName"] = $userName ;
		header('location:myAccount.php');
		exit;
	}
	
}
else
{
	header('location:login.php');
}
