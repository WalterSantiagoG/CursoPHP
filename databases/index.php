<?php 

$dbHost = 'localhost';
$dbName = 'cursophp';
$dbUser = 'root';
$dbPass = '';

try{
	$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
	echo $e->getMessage();
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
		<h1>Databases</h1>
		<ul>
			<li>
				<a href="">List Users</a>
			</li>
			<li>
				<a href="">Add Users</a>
			</li>
		</ul>
	</div>
</body>
</html>