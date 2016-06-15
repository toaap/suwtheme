<!DOCTYPE html>
<html>
	<head>
		<title>SUW | Suit Up Weird</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body>
	<div class="wrapper">
		<div class = "container">
			<div class="row">
        		<div><a href="http://gerdbo.se/suw/?page_id=78"><img class="center-block brand_image" style = "padding-top:10px;" src="wp-content/uploads/2015/10/logosuw.png"/></a></div>
   	 		</div>

			<a class="brand" href="index.html"></a>


			<nav class = "navbar navbar-default">

				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>


				<div class = "collapse navbar-collapse navHeaderCollapse">

				 <?php
            		wp_nav_menu( array(
                		'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
            		);
        		?>

				</div>
			</nav>
		</div>
	<div class = "container">
		<div class="row">
	<div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="demo-content-top"></div>
    </div>
</div>
