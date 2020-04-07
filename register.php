



<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.register-form{
		width: 50%;
		border: 2px solid steelblue;
		padding: 10px;
	}
</style>
<body>
	<?php include 'navbar.php'; ?>

	<center>
		<form class="register-form" method="post">
				<div class="form-group">
					<label for="name">Name</label>
					<input class="form-control" type="text" name="firstname" placeholder="Enter FirstName">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control" type="email" name="email" placeholder="Enter Email">
				</div>

				<button type="submit" name="register-btn" class="btn btn-primary">Register</button>
				
		</form>
	</center>

</body>
</html>

<?php

include 'dbconnect.php';

if(isset($_POST['register-btn'])){

	/*print_r($_POST);*/

	$firstname = $_POST['firstname'];
	$email = $_POST['email'];

	$insert = mysqli_query($connect,"INSERT INTO `user` (`name`,`email`) VALUES ('$firstname','$email')");

	if($insert){

		echo "Data Submit!";

	}else{
		echo "Submit Failed!";
	}

}


?>
