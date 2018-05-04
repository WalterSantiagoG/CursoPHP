<?php 

$result = false;

if (!empty($_POST)) {
	$sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
	$query = $pdo->prepare($sql);
	$result = $query->execute([
		'title' => $_POST['title'],
		'content' => $_POST['content']
	]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blog Title</h1>
			</div>
		</div>
		<div class="row">
			
			<div class="col-md-8" >
				<h2>New Post</h2>
				<p>
					<a class="btn btn-default" href="posts.php">Back</a>
				</p>
				<?php 
					if ($result) {
						echo '<div class="alert alert-success">Post Saved!</div>';
					}
				?>
				<form action="insert-post.php" method="POST">
					<div class="form-group">
						<label for="inputTitle">Title</label>
						<input class="form-control" type="text" name="title" id="inpuTitle">
					</div>
						
					<textarea class="form-control" name="content" id="inputContent" rows="5"></textarea>
					<br>
					<input class="btn btn-primary" type="submit" value="Save">

					
				</form>
				
			</div>
			<div class="col-md-4">
				Sidebar<br>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum lectus, sollicitudin quis condimentum ut, sodales in quam. Pellentesque eros neque, molestie nec facilisis a, dictum a nulla. Sed a risus quis felis sodales ultrices. Pellentesque varius arcu in maximus egestas. Ut sit amet accumsan mauris, a vestibulum nisl. Cras quis facilisis ipsum, in scelerisque tellus. Curabitur iaculis justo sed consequat ultrices. Suspendisse fringilla sollicitudin ante, pharetra tempor nibh pharetra et. Vestibulum aliquam lobortis ex porta dignissim.
			</div>
		</div>
		<div class="row">
			<div class="col-md-12"> 
				<footer>
					This is a footer<br>
					<a href="admin/index.php">Admin panel</a>
				</footer>	
			</div>
			
		</div>
	</div>
</body>
</html>