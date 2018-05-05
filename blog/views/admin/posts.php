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
				<h2>Post</h2>
				<p>
					<a class="btn btn-primary" href="<?php echo BASE_URL; ?>admin/posts/create">New Post</a>
				</p>
				<table class="table">
					<tr>
						<th>Title</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php foreach ($blogPosts as $blogPost){ ?>
					<tr>
						<td><?php echo $blogPost['title'] ?></td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>
					<?php } ?>
				</table>
				
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
					<a href="<?php echo BASE_URL; ?>admin">Admin panel</a>
				</footer>	
			</div>
			
		</div>
	</div>
</body>
</html>