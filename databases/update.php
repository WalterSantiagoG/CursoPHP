<?php

include_once 'config.php';
$result = false;

if (!empty($_POST)) {
	$id = $_POST['id'];
	$newName = $_POST['name'];
	$newEmail = $_POST['email'];

	$sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
	$query = $pdo->prepare($sql);

	$result = $query->execute([
		'id' => $id,
		'name' => $newName,
		'email' => $newEmail
	]);

	$nameValue = $newName;
	$emailValue = $newEmail;

} else {
	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE id=:id";
	$query = $pdo->prepare($sql);

	$query->execute([
		'id' => $id
	]);

	$row = $query->fetch(PDO::FETCH_ASSOC);
	$nameValue = $row['name'];
	$emailValue = $row['email'];
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
		<h1>Update user</h1>
		<a href="list.php">List Users</a>
		<?php 
			if ($result) {
				echo '<div class="alert alert-success">Success!!!</div>';
			}
		?>
		<form action="update.php" method="POST">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="<?php echo $nameValue ?>">
			<br>

			<label for="email">Email</label>
			<input type="email" name="email" id="email" value="<?php echo $emailValue ?>">
			<br>

			<input type="hidden" name="id" value="<?php echo $id ?>">

			<input type="submit" value="Update">
		</form>
	</div>
</body>
</html>