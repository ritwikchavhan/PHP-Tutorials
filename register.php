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
		padding: 20px;
	}
</style>
<body>
	<br>
	<?php include 'navbar.php'; ?> 
<center>
	<div class="register-form">
		<form>
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="email" class="form-control" id="name" name="name" placeholder="Enter Name">
		  </div>

		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
		  </div>

		  <div class="form-group">
		  	<label for="age">Age</label>
		    <input type="number" class="form-control" id="age">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</center>
	
</body>
</html>