<?php 
$conn=mysqli_connect("localhost","root","","db");
if(isset($_POST["sub"])){
	
	$username=$_POST["name"];
	$pass=$_POST["pass"];
	
	$sql="SELECT * from signup WHERE name='$username' AND password='$pass' ";
		$query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($query);
		if($count >=1){
			header('Location:home.php');
			}else{
			echo"<script> alert('Error')</script>";
		}
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>login page</title>
		<link href="bootstrap.min.css" rel="stylesheet">
		<style>
			.panel
			{width:50%;
			box-shadow:2px 2px 4px 6px gray;
			}
		</style>
	</head>
	<body style="background-color:gray;margin-left:350px;margin-top:75px;">
		<div class="panel panel-success ">
			<div class="panel-heading text-center">
			<h1><span class="glyphicon glyphicon-log-in right"></span>LOGIN</h1>
				
			</div>
			<div class="panel-body">
				<form action="LOGIN.php" method="post" class="form-group">
					<label class="head">Username:</label>
					<input class="form-control size " type="text" name="name" placeholder="Enter a  username"><br>
					<label class="head">Password: </label>
					<input type="password" class="form-control size"  name="pass" placeholder="Enter a Password">
			</div>
			<div class="panel-footer">	
					<div class="checkbox text-left"><label><input type="checkbox" >Remember me</label><br><br>
					<input type="submit" style="box-shadow:1px 1px 2px 2px gray;" name="sub" class="form-control btn btn-primary" value="LOGIN">
					<br><br>
					<a href="#" class="alert-danger " style="float:right; font-size:0.9em;">Forget password!!</a>
				</form>
			</div>
		</div>
	</body>
</html>