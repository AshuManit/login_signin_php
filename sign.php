<?php
 $conn=mysqli_connect("localhost","root","","db");
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["psw"];
  
  $sql="INSERT INTO signup(name,email,password) VALUES('$name','$email','$password');";
  $query=mysqli_query($conn,$sql);
  if(!$query)
	  echo"<script>alert('NOT INSERTED');</script>";
  else
	  echo"INSERTED";
	
  
  
?>
