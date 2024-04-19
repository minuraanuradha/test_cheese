<?php session_start(); 
if(!$_SESSION["userName"])
{
      header('location:login.php');
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
    <link rel="stylesheet" href="CSS/formStyle.css" type="text/css">
    
      <style>
  body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;

 
} 
div{
  box-sizing: border-box;
}
nav{
  background: #023020;
  display: flex;
  justify-content:space-around;
  align-items: center;
  color: #fff;
}
.nav-links {
    display: flex;
    justify-content:space-around;
    width: 50%;
    text-transform: uppercase;
}
.nav-links a{
  display: block;
   text-transform: uppercase;
   text-decoration: none;
   color: #fff;
  border-bottom:2px solid transparent;
  transition:0.5s ease;
  transform: translateX(0%);
}
.nav-links a:hover{
  color:#7CFC00;
  letter-spacing: 5px;
}
.burger{
  display: none;
}
.burger div{
  width: 25px;
  height: 3px;
  background: #fff;
  margin: 5px;
  transition:all 0.5s ease;
}
@media only screen and (max-width: 760px){
   nav{
    justify-content: space-between;
    padding: 0 5vw;
  }
  .nav-links{
    position: absolute;
    right: 0;
    top:8vh;
    min-height:92vh;
    background: #333;
    display: flex;
    flex-direction: column;
    align-items: center;   
    width: 50%;
    margin: 0;
    padding: 0;
    transform: translateX(100%);
    transition:All 0.5s ease-in;
  }
  .nav-links a{
    opacity: 0;
 
  }
  .burger{
    display: block;
  }
 
}
@media only screen and (max-width: 640px){
  nav{
    justify-content: space-between;
    padding: 0 5vw;
  }
}
.nav-active{
  transform: translateX(0);
}
@media only screen and (max-width: 460px){
  .nav-links{
    width: 100%;
    transition:All 0.5s ease;
  }
}
.nav-active{
  transform: translateX(0);
}
@keyframes navLinkFade{
  from{
    opacity: 0;
    transform: translateX(50px);
  }
  to{
    opacity: 1;
    transform: translateX(0);
  }
}
.toggle .line1{
   transform: rotate(-45deg) translate(-5px,6px );
}
.toggle .line2{
   opacity: 0;
}
.toggle .line3{
   transform: rotate(45deg) translate(-5px,-6px );
}
    </style>
</head>

<body>
     <script>
       const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links a");

  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");

    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.5
        }s `;
      }
    });
    burger.classList.toggle("toggle");
  });
  //
};

navSlide();
          </script>
 <nav>
  <div class="logo">
    <h4>TrashToCash</h4>
  </div>
  <ul class="nav-links"> 
      <a href="home.html">Home</a>
      <a href="login.php">Sign In</a> 
      <a href="myAccount.php">My Account</a>
     <a href="#">All Items</a> 

  </ul>
  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</nav>
          
    <div class="form-style-5">
<form method="post" action="EditHandler.php" enctype="multipart/form-data">
	
   <?php 
    $_SESSION["id"] = $_GET["id"];
    $con = mysqli_connect("localhost","root","","200"); 
  if(!$con){
            die("Sorry we are facing some tech issues");
  }
  $sql = "SELECT * FROM `tbladvertisement200` WHERE `advertisementID`='".$_GET["id"]."'"; 
    
 $results = mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($results);
    ?>
<fieldset>
<legend><span class="number">1</span> Product Info</legend>
<p>
  <input type="text" name="txtTitle" placeholder="Product Name *"
		 value="<?php echo $row["productName"];?>">
	
  <textarea name="txtDescription" placeholder="Describe about the product" value="<?php echo $row["description"];?>" ></textarea>
  <input type="file" name="imageFile" placeholder="Upload a Picture">
  Category   <select  name="lstCategory">
    <option value="glass" <?php
			if($row["category"]=="glass"){
			echo"selected";}
			?>>Glass</option>
    <option value="metal"<?php
			if($row["category"]=="metal"){
			echo"selected";}
			?>>Metal</option>
    <option value="cardboard"<?php
			if($row["category"]=="cardboard"){
			echo"selected";}
			?>>Cardboard </option>
     <option value="paper"<?php
			if($row["category"]=="glass"){
			echo"selected";}
			?>>Paper</option>
     <option value="plastic"<?php
			if($row["category"]=="plastic"){
			echo"selected";}
			?>>Plastic</option>
    <option value="other"<?php
			if($row["category"]=="other"){
			echo"selected";}
			?>>Other</option>
    </select>
</p>


      
</fieldset>
<fieldset>
<legend><span class="number">2</span> Contact Details</legend>
<input type="text" name="txtContactNumber" placeholder="Your Contact Number" value = "<?php echo $row["contactNumber"];?>">
 <label for="chkPublish">Publish the Advertisement : 
  <input type="checkbox" name="chkPublish" <?php 
         if($row["publish"] == 1){echo "checked";}?>>        
  <?php $_SESSION["imagePath"] = $row["imagePath"];?>
	
</label>
</fieldset>
    
<p>
  <input type="submit" value="Add Post" name="btnSubmit"/>
</p>
</form>
</div>
</body>
</html>