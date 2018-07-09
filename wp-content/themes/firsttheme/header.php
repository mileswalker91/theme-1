
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blog Template for Bootstrap</title>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>



<body style="background-color:<?php the_field('page_background', 'option'); ?>">

	<nav class="navbar navbar-fluid navbar-expand-lg  fixed-top navbar-dark">

		<a class="navbar-brand logo" href="http://wordpress.test"><img src="<?php the_field('theme_logo', 'option'); ?>" /></a>
			<div class="navbar-header">
				<button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="navbar-toggler-icon "></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class=" navbar-nav ml-auto">
				<?php bootstrap_nav(); ?>
			</ul>
			</div><!--/.nav-collapse -->


	</nav>
