<?php
	if(in_category(4)) {
		// Custom Template for Single Posts in Category 4
	include 'single_inspiration.php';
	} else {
?>


<?php get_header(); ?>

	<div class="row">
		<div class="col-xs-12 col-md-6 col-md-offset-3">
			<div class = "panel-default attachment panelPadding">
				<?php while(have_posts()) : the_post(); ?>

				<h3><?php the_title(); ?></h3>
				<p class = "text-muted"><?php the_time('jS, F Y'); ?><p>
				<p><?php the_content(''); ?></p>

				<?php endwhile; wp_reset_query(); ?>

			</div>

		</div>

		<!-- //Feed// -->
		<!--
		<div class = "col-md-3">
			<div class = "list-group">

				<?php query_posts('posts_per_page=8'); while(have_posts()) : the_post(); ?>

					<a href="<?php the_permalink(); ?>" class = "list-group-item">
						<h4 class = "list-group-item-text"><?php the_title(); ?></h4>
						<p class = "list-group-item-text">Posted by <?php the_author(); ?> on <?php the_time('jS, F Y');?></p>
					</a>

				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
		-->
	</div>

<?php get_footer(); 

}?>