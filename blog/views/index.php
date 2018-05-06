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

				<?php foreach ($blogPosts as $blogPost) { ?>
					<div class="blog-post">
						<h2><?php echo $blogPost['title'] ?></h2>
						<p>Jan 1, 2020 by <a href="">Walter</a></p>
						<div class="blog-post-image">
							<img src="images/paisaje.jpg" alt="">
						</div>
						<div class="blog-post-content">
							<?php echo $blogPost['content'] ?>
						</div>
					</div>
					<br>
				<?php } ?>
				
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