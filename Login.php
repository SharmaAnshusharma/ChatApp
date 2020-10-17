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
      <li class="nav-item active">
        <a class="nav-link" href="Login.php">Login </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Signup.php">Sign Up</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>
<form method="post">
	<div class="container">
		<h3><mark>Hi Login for Chat!</mark></h3>
		<br>
	    <div class="input-group mb-3 input-group-sm">
	      <div class="input-group-prepend">
	        <span class="input-group-text">User Name</span>
	      </div>
	      <input type="text" name= "username" class="form-control">
	    </div>
	      <div class="input-group mb-3 input-group-sm">
	      <div class="input-group-prepend">
	        <span class="input-group-text">Password</span>
	      </div>
	      <input type="password" name="userpassword" class="form-control">
	    </div>
	    <input type="submit" name="submit" value="Login" class="btn btn-outline-success">
	        <input type="submit" name="submit" value="Reset" class="btn btn-outline-danger">
</form>
  </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$_SESSION['username'] = $username;

	
	

}

?>

<?php
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $db=mysqli_connect("localhost","root","","chatapp");
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['userpassword']); 
      


      $sql = "SELECT id FROM signup WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1)
	  {
         
       echo "<script>window.location='Chat.php'</script>";
      }
      else
      {
         echo "<script>alert('Your Login Name or Password is invalid')</script>";
      }

   }
?>
