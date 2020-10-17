<?php
    $con = mysqli_connect("localhost","root","","chatapp");
    $ins = mysqli_query($con,"SELECT * FROM `posts`");
    
    while($row = mysqli_fetch_array($ins))
    {
      echo"<i style='color:red;float:left;'>".$row['Name']."</i>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
      echo"<i style='color:black'float: left; margin:10px 10px;>".$row['Messages']."</i>&nbsp &nbsp ";
      echo"<i style='color:purple;float:right'>".$row['Date']."</i>";
    echo "<br>";
     echo "<hr>";
    }

    echo"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ";

  ?>