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
      <style>
      .output{
      width: 100%;
      height: 300px;
      overflow: scroll;
      box-shadow: 5px 5px  #C70039 ;   
      border:5px solid purple;
      border-radius:5px;
      margin:10px;
      padding:10px;
      
    }
  </style>


  <script>
    function ajax()
    {
      var req = new XMLHttpRequest();
      req.onreadystatechange = function()
      {
        if(req.readyState == 4 && req.status ==200)
        {
          document.getElementById("Chat").innerHTML = req.responseText;
        }
      }
      req.open("GET","Chats.php",true);
      req.send();
    }
  </script>
</head>
<body onload="ajax();">
    
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Chat App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""></a>
      </li>    
    </ul>
  </div>  
</nav>
<br>
<div class="container">
<h1 style="background-color:#6495ed; color:white;"><?php echo $_SESSION['username']; ?>-Online </h1>
<div class="output">
  <center>
<div id="Chat">

</div>
</center>
</div>
<form method="post">
  <textarea class="form-control" cols="5" name = "message" placeholder="Type to send Messages........."></textarea><br>
<input type="submit" name="submit"  value="Send Message" class="btn btn-outline-success">
</form>
<form method="post" action="logout.php">
  <a href="Login.php" class="btn btn-outline-danger">Logout</a>

</form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
  $name = $_SESSION['username'];
  $msg = $_POST['message'];
  $con = mysqli_connect("localhost","root","","chatapp");
  $ins = mysqli_query($con,"INSERT INTO `posts`(`Name`, `Messages`) VALUES ('$name','$msg')");
  
}
?>
