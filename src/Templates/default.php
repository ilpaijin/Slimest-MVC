<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SLimest MVC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo Url::assets('css/normalize.css'); ?>">
	<link rel="stylesheet" href="<?php echo Url::assets('css/foundation.css'); ?>">
	<link rel="stylesheet" href="<?php echo Url::assets('css/style.css'); ?>">
	<style>
		.container { padding-top: 40px; }
	</style>
</head>
<body>
	<div class="container">
		<div class="small-12 columns">
			<div class="row">
				<div class="fixed contain-to-grid">
					<div class="top-bar">
						<span class="label left">Slimest MVC</span>
						<section class="top-bar-section">
							<ul class="title-area right">
								<li class=" <?php echo Url::is('/') ? 'active' : '' ; ?>">
							    	<a href="<?php echo Url::base(); ?>/">Home</a>
							  	</li>
							  	<li class=" <?php echo Url::is('/hello') ? 'active' : '' ; ?>">
							  		<a href="<?php echo Url::base(); ?>/hello">Hello</a>
							  	</li>
							  	<li class=" <?php echo Url::is('/about') ? 'active' : '' ; ?>">
							  		<a href="<?php echo Url::base(); ?>/about">About</a>
							  	</li>
							  	<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
							</ul>
						</section>	
					</div>	
				</div>
			</div>
			<div class="row">
				<?php echo $content; ?>
			</div>	
		</div>
	</div>
	<script src="<?php echo Url::assets('js/jquery-1.9.0.min.js'); ?>"></script>
	<script src="<?php echo Url::assets('js/foundation.min.js'); ?>"></script>
	<script>
    	$(document).foundation();
	</script>
</body>
</html>