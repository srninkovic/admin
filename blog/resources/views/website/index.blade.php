<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" cont1="width=device-width, initial-scale=1">
		<title>Websites</title>
		<meta name="description" cont1="A slice reveal effect that shows animated slices between image transitions" />
		<meta name="keywords" cont1="reveal, slices, effect, animation, css, web development, web design" />
		<meta name="author" cont1="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
    <link href="/css/app.css" rel="stylesheet">
	</head>
	<body class="demo-3 loading">
		<main>
			<div class="cont1 grid">
				<div class="grid__item">
					<div class="scroll-img" style="background-image: url(/uploads/<?php  $post = App\Post::find(1); echo $post->post_thumbnail ?>);"></div>
					<div class="grid__item-titlewrap">
            <h2 class="grid__item-title">#<?php  $post = App\Post::find(1); echo $post->post_title ?></h2><!-- input id -->
						<p class="grid__item-description"><?php  $content = App\Post::find(1); echo $content->post_content ?></p>
					</div>
				</div>
				<div class="grid__item">
					<div class="scroll-img" style="background-image: url(/uploads/<?php  $post = App\Post::find(1); echo $post->post_image ?>);"></div>
					<div class="grid__item-titlewrap">
						<h2 class="grid__item-title">#<?php  $post = App\Post::find(1); echo $post->post_title2 ?></h2>
						<p class="grid__item-description"><?php  $content = App\Post::find(1); echo $content->post_content2 ?></p>
					</div>
				</div>
				<div class="grid__item">
					<div class="scroll-img" style="background-image: url(/uploads/<?php  $post = App\Post::find(1); echo $post->post_image2 ?>);"></div>
					<div class="grid__item-titlewrap">
						<h2 class="grid__item-title">#<?php  $post = App\Post::find(1); echo $post->post_title3 ?></h2>
						<p class="grid__item-description"><?php  $content = App\Post::find(1); echo $content->post_content3 ?></p>
					</div>
				</div>
				<div class="grid__item">
					<div class="scroll-img" style="background-image: url(/uploads/<?php  $post = App\Post::find(1); echo $post->post_image3 ?>);"></div>
					<div class="grid__item-titlewrap">
						<h2 class="grid__item-title">#<?php  $post = App\Post::find(1); echo $post->post_title4 ?></h2>
						<p class="grid__item-description"><?php  $content = App\Post::find(1); echo $content->post_content4 ?></p>
					</div>
				</div>
				<div class="grid__item">
					<div class="scroll-img" style="background-image: url(/uploads/<?php  $post = App\Post::find(1); echo $post->post_image4 ?>);"></div>
					<div class="grid__item-titlewrap">
						<h2 class="grid__item-title">#<?php  $post = App\Post::find(1); echo $post->post_title5 ?></h2>
						<p class="grid__item-description"><?php  $content = App\Post::find(1); echo $content->post_content5 ?></p>
					</div>
				</div>
				<!-- <div class="grid__item">
					<div class="scroll-img" style="background-image: url(img/16.jpg);"></div>
					<div class="grid__item-titlewrap">
						<h2 class="grid__item-title">#less</h2>
						<p class="grid__item-description">Timeless manners count</p>
					</div>
				</div>
				<div class="grid__item">
					<div class="scroll-img" style="background-image: url(img/17.jpg);"></div>
					<div class="grid__item-titlewrap">
						<h2 class="grid__item-title">#only</h2>
						<p class="grid__item-description">Together we can sit</p>
					</div>
				</div> -->
				<!-- <div class="grid__item">
					<div class="scroll-img" style="background-image: url(img/18.jpg);"></div>
					<div class="grid__item-titlewrap">
						<h2 class="grid__item-title">#need</h2>
						<p class="grid__item-description">The new kid on the block</p>
					</div>
				</div>
				<div class="grid__item">
					<div class="scroll-img" style="background-image: url(img/11.jpg);"></div>
					<div class="grid__item-titlewrap">
						<h2 class="grid__item-title">#feed</h2>
						<p class="grid__item-description">The new kid on the block</p>
					</div>
				</div> -->
			</div>
		</main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="/js/app.js"></script>
	</body>
</html>
