<?php

require_once 'config.php';
$result = false;

if (!empty($_POST)){
	$name = $_POST['name'];
	$email = $_POST['email'];

	//Never use md5 to store passwords!!!
	$password = md5($_POST['password']);

	//Validate
	$sql = "INSERT INTO users(name, email, password) VALUES (:name, :email, :password)";
	$query = $pdo->prepare($sql);

	$result = $query->execute([
		'name' => $name,
		'email' => $email,
		'password' => $password
	]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Databases with Platzi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1>Add user</h1>
		<a href="index.php">Home</a>
		<?php 
			if ($result) {
				echo '<div class="alert alert-success">Success!!!</div>';
			}
		?>
		<form action="add.php" method="POST">
			<label for="name">Name</label>
			<input type="text" name="name" id="name">
			<br>

			<label for="email">Email</label>
			<input type="email" name="email" id="email">
			<br>

			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<br>

			<input type="submit" value="Save">
		</form>
	</div>
</body>
</html>