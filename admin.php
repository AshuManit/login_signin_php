<?php 
$conn=mysqli_connect("localhost","root","","db");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			ADMIN PAGE
		</title>
    <link href="bootstrap.min.css" rel="stylesheet">		
	</head>
	<body>
	<div class="container fluid">
		<div class="jumbotron text-center">
			<h1>ADMIN PAGE</h1>
		</div><hr>
		<table class="table table-hover">
		<thead>
			<tr class="active">
			<td>ID</td>
			<td>USER NAME</td>
			<td>EMAIL</td>
			<td>PASSWORD</td>
			</tr>
		</thead>
	<?php 
		$sql="select * from signup";
		$query=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($query))
		{	
	?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['password']; ?></td>
		</tr>
		<?php }
		
		?>	
	</table>
	</div>
	</body>

</html>