<?php
  $username= $_POST['email'];
  $password= $_POST['pass'];
$con=mysqli_connect("localhost", "root", "root", "xeroxapp");
  $username= stripcslashes($username);
  $password= stripcslashes($password);
  $username=  mysqli_real_escape_string($con,$username);
  $password=  mysqli_real_escape_string($con,$password);



  $result = mysqli_query($con,"select * from web_login where usermail='$username' and passwd='$password'")
                or die("Failed to query database".mysqli_error($con));
  $row= mysqli_fetch_array($result);


  if ($row['usermail'] == $username && $row['passwd'] == $password) {
    header("Location:Allusers/index.php");  
  } else {
    echo "Failed to Login!";
  }

 ?>
