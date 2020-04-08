<?php
        $id = $_GET['id'];
	
		include 'dbconnect.php';

		if(isset($_GET['id'])){

		$id = $_GET['id'];

		$select = mysqli_query($connect,"SELECT * FROM `user` WHERE `id`=$id ");

		$row = mysqli_fetch_assoc($select);

	}

		
?>
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
			<h1>Edit Data</h1>
				<div class="form-group">
					<label for="name">Name</label>
					<input class="form-control" type="text" name="firstname" placeholder="Enter FirstName" value="<?php echo $row['name'] ?>">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control" type="email" name="email" placeholder="Enter Email" value="<?php echo $row['email'] ?>" >
				</div>

				<button type="submit" name="save-btn" class="btn btn-primary">Save</button>
				
		</form>
	</center>

</body>
</html>

<?php

include 'dbconnect.php';

if(isset($_POST['save-btn'])){

	/*print_r($_POST);*/

	$firstname = $_POST['firstname'];
	$email = $_POST['email'];

	$insert = mysqli_query($connect,"UPDATE `user` SET `name`='$firstname' , `email`='$email' WHERE `id`=$id");

	if($insert){

		echo "Data Submit!";

	}else{
		echo "Submit Failed!";
	}

}


?>