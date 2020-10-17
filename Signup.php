<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include('Bootstrapfiles.php');
  ?>
    <title>ChatApp</title>
</head>
<body>
    
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Chat App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="Login.php">Login </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Signup.php">Sign Up</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>
<form method="post">
	<div class="container">
		<h3><mark>Sign Up</mark></h3>
		<br>
      <div class="input-group mb-3 input-group-sm">
        <div class="input-group-prepend">
          <span class="input-group-text">First Name</span>
        </div>
        <input type="text" name= "Fname" class="form-control">
      </div>
            <div class="input-group mb-3 input-group-sm">
        <div class="input-group-prepend">
          <span class="input-group-text">Last Name</span>
        </div>
        <input type="text" name= "Lname" class="form-control">
      </div>
      <div class="input-group mb-3 input-group-sm">
        <div class="input-group-prepend">
          <span class="input-group-text">Contact </span>
        </div>
        <input type="text" name= "contact" class="form-control">
      </div>
	    <div class="input-group mb-3 input-group-sm">
	      <div class="input-group-prepend">
	        <span class="input-group-text">User Name</span>
	      </div>
	      <input type="text" name= "Username" class="form-control">
	    </div>
	      <div class="input-group mb-3 input-group-sm">
	      <div class="input-group-prepend">
	        <span class="input-group-text">Password</span>
	      </div>
	      <input type="password" name="pwd" class="form-control">
	    </div>
	    <input type="submit" name="submit" value="Sign Up" class="btn btn-outline-success">
	        <input type="submit" name="submit" value="Reset" class="btn btn-outline-danger">
</form>
  </div>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
  extract($_POST);
  
  $con = mysqli_connect("localhost","root","","chatapp");
  $ins = mysqli_query($con,"INSERT INTO `signup`(`First Name`, `Last Name`, `Contact`, `Username`, `Password`) VALUES ('$Fname','$Lname','$contact','$Username','$pwd')");
  if($ins == true)
  {
    echo "<script>alert('Signup Successfully!!!')</script>";
  }
  else
  {
    echo "<script>alert('Problem in Signup!!!')</script>"; 
  }
}
?>