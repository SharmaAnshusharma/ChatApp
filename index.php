<!DOCTYPE html>
<html lang="en">
<head>

  <?php
  include('Bootstrapfiles.php');
  ?>
      <title>ChatApp</title>
      <style>
  /* Make the image fully responsive */
  
  </style>

</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Chat App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Login.php">Login </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" data-toggle="modal" data-target="#myModal">
        Sign Up
</a>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sign Up & Start Chat!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
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

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
 
</div>
</div>

      </li>    
    </ul>
  </div>  
</nav>
<br>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/img8.jpg" alt="Los Angeles" width="1600" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images/img3.jpg" alt="Chicago" width="1600" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images/img2.jpg" alt="New York" width="1600" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
        <div class="carousel-item">
      <img src="Images/img7.jpg" alt="New York" width="1600" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<hr>
<div class="container">
 <table>
  <tr>
    <td>
      <div class="container">
          <div class="card" style="box-shadow: 10px 10px black;">
            <div class="card-header"><center><img src="Images/img9.jpg" class="rounded-circle" height="200px" width="200px"></center></div>
              <div class="card-body">Friendship is simply defined as a mutual affection or an interpersonal bond of an association. Friendship is a beautiful bond that is free from demographics like age, gender or geographical location.</div> 
              <div class="card-footer"><center><a href="Signup.php" class="btn btn-outline-success btn-lg" >Start Chat!</a></center></div>
          </div>
      </div>
    </td>
        <td>
      <div class="container">
        
          <div class="card" style="box-shadow: 10px 10px black;">
            <div class="card-header"><center><img src="Images/img10.jpg" class="rounded-circle" height="200px" width="200px"></center></div>
              <div class="card-body">Friends are a joy in most about everyone’s life and making friends as a child is rather easy than making friends as an adult. As an adult with the passing of time it grows harder to make new friends or find friends as our priorities shift towards shouldering the responsibilities as adults to our families or carrier.
              </div> 
              <div class="card-footer"><center><a href="Signup.php" class="btn btn-outline-success  btn-lg" >Start Chat!</a></center></div>
          </div>
      </div>
    </td>
        <td >
      <div class="container">
        
          <div class="card" style="box-shadow: 10px 10px black;">
            <div class="card-header"><center><img src="Images/img11.png" class="rounded-circle" height="200px" width="200px"></center></div>
              <div class="card-body">Welcome to Chatsfriends.net , we are looking forward to enjoy our chat where you can meet people from England, Canada , USA or India.

</div> 
              <div class="card-footer"><center><a href="Signup.php" class="btn btn-outline-success btn-lg" >Start Chat!</a></center></div>
          </div>
      </div>
    </td>
  </tr>
</table>
</div>
<br><br>
<hr>
<br><br>
<?php

include('footer.php');
?>
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