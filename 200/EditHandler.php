<?php session_start();

if(isset($_POST["btnSubmit"]))
{
	     $productName = $_POST["txtTitle"];
		 $description = $_POST["txtDescription"];
		 $catagory = $_POST["lstCategory"];
		 $contactNumber = $_POST["txtContactNumber"];
		 if (isset($_POST["chkPublish"])){
			 $status = 1;
		 }
		 else
		 {
			 $status = 0;
		 }
	if(!file_exists($_FILES["imageFile"]["tmp_name"])||
	  !is_uploaded_file($_FILES["imageFile"]["tmp_name"]))
	   {
		   $imagePath = $_SESSION["imagePath"];
	   }
	   else{  
		 $imagePath = "uploads/".basename($_FILES["imageFile"]["name"]);
		 move_uploaded_file($_FILES["imageFile"]["tmp_name"] ,$imagePath);
		   }
	
	
	
	
	$con = mysqli_connect("localhost","root","","200") ;//Connet to the data base with 
	if (!$con){
		die("Sorry we are facing some tech issue");
	}
	$sql = "UPDATE `tbladvertisement200` SET `productName` = '".$productName."', `description` = '".$description."',`publish` = '".$status."',`category` = '".$catagory."',`imagePath`='".$imagePath."' , `contactNumber` = '".$contactNumber."'  WHERE `tbladvertisement200`.`advertisementID` = '".$_SESSION["id"]."';";
	
	
	mysqli_query($con,$sql);
		header('location:ViewMyAdvertisements.php');
	}
	
else
{
	header('location:login.php');
}
?>
//UPDATE `tbluser200` SET `email` = 'mal@gmail.com', `name` = 'mal' WHERE `tbluser200`.`email` = 'mal';