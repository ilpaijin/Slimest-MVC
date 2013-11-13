<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SLimest MVC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo Url::assets('css/normalize.css'); ?>" type='text/css'>
	<link rel="stylesheet" href="<?php echo Url::assets('css/foundation.css'); ?>" type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400,200' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo Url::assets('css/style.css'); ?>" type='text/css'>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="fixed">
				<div class="top-bar">
					<span class="label left radius">Slimest MVC</span>
					<section class="top-bar-section">
						<ul class="title-area right">
							<li class=" <?php echo Url::is('/') ? 'active' : '' ; ?>">
						    	<a href="<?php echo Url::base(); ?>/">Home</a>
						  	</li>
						  	<li class=" <?php echo Url::is('/about') ? 'active' : '' ; ?>">
						  		<a href="<?php echo Url::base(); ?>/about">About</a>
						  	</li>
						  	<li class=" <?php echo Url::is('/picture') ? 'active' : '' ; ?>">
						  		<a href="<?php echo Url::base(); ?>/picture">Picture</a>
						  	</li>
						  	<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
						</ul>
					</section>	
				</div>	
			</div>
		</div>
		<div class="inner">
			<?php echo $content; ?>
		</div>	
	</div>
	<script src="<?php echo Url::assets('js/jquery-1.9.0.min.js'); ?>"></script>
	<script src="<?php echo Url::assets('js/foundation.min.js'); ?>"></script>
	<script>
    	$(document).foundation();
	</script>
</body>
</html>