<?php

require_once 'config.php';

$queryResult = $pdo->query("SELECT * FROM users");

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
		<h1>List Users</h1>
		<a href="index.php">Home</a>
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php 
				while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
					echo "<tr>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo '<td><a href="update.php?id=' .$row['id']. '">Edit</a></td>';
					echo '<td><a href="delete.php?id=' .$row['id']. '">Delete</a></td>';
					echo "</tr>";
				}
			?>
		</table>
	</div>
</body>
</html>