<?php
/*
Template Name: Inspiration post template
*/
?>

<?php get_header(); ?>

<body>
	<div class="row">
			<h3 class = "nav" style = "text-align:center; color:#d3ac8d;">Inspiration</h3>

			<!--
			style = "text-align:center; color:#d3ac8d;"
			-->
		
			<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts("cat=4&posts_per_page=25&paged=$paged");
			while(have_posts()) : the_post();?>
				
					<div class="col-xs-12 col-md-6 col-md-offset-3 attachment">

						<div class = "h1contain text-muted"><h1><?php the_time('jS, F Y'); ?></h1></div>
						<div style = "margin-top:-20px;"><h2><?php the_title(); ?></h2></div>
						<?php the_content(''); ?>
					</div>

				<?php endwhile;?>

			<div class="col-xs-12 col-md-8 col-md-offset-2 text-right">
					<ul class="pager">
					    <li class="previous"><?php previous_posts_link('&larr; Previous') ?></li>
					    <li class="next"><?php next_posts_link('Next &rarr;')?></li>
					</ul>
			</div>
			<?php wp_reset_query(); ?>
	</div>
</body>

<?php get_footer(); ?>
