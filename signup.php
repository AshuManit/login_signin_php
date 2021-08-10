
<!DOCTYPE html>
<html>
	<head>
		<title>Sign-up page</title>
		<link href="bootstrap.min.css" rel="stylesheet">
		<style>
			.panel
			{width:50%;
			float:center;
			box-shadow:2px 2px 4px 6px gray;
			}
		</style>
	</head>
	<body style="background-color:gray;margin-left:350px;margin-top:15px;">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<h1><span class="glyphicon glyphicon-user"></span>SIGN-UP</h1>
			</div>
			<div class="panel-body ">
				<form action="sign.php" method="post">
					<label class="head">User-NAME:</label>
					<input class="form-control size " type="text" name="name" placeholder="Enter a Name"><br>
					<label class="head">Email:</label>
					<input class="form-control size " type="email" name="email" placeholder="ex-ashutigga2067@gmail.com"><br>
					
					<label class="head">Password: </label>
				<input type="password" class="form-control size"  name="psw" placeholder="Enter a Password"><br>	
					<label class="head">Confirm Password: </label>
					<input type="password" class="form-control size"  placeholder="Confirm Password"><hr>
					<input type="submit"  class="form-control btn btn-primary" value="SIGN-UP">
					<br><br>
					<a href="LOGIN.php" style="float:right; font-size:0.9em;" class="alert-danger">Already have an account!!</a>
				</form>
			</div>
		</div>
	</body>
</html>