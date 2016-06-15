<?php get_header(); ?>

<body>	        
	<div class="row">	

		<?php

		if ( have_posts() ):

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts('cat=-4&posts_per_page='.get_option('posts_per_page').'&paged=' . $paged); while(have_posts()) : the_post(); 

		if ( has_post_thumbnail() ) {
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($postid), array( 1000,500 ), false, '' );
			$picbool = true;
		}
		else {
			$src = "wp-content/themes/suwtheme/images/nopicture.jpg";
			$picbool = false;
		}

		?>

		<div class="col-xs-12 col-md-6 col-md-offset-3">
			<h4 class = "list-group-item-text gold-theme nav"><center><?php the_title(); ?></center></h4>
		</div>

		<div class="col-xs-12 col-md-6 col-md-offset-3">
			<div class = "h1contain text-muted gold-theme"><h1 style = "margin-top:4px;"><?php the_time('jS, F Y');?></h1></div>
		</div>
		<div class "row">
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				<div class="content-main">
					<a href="<?php the_permalink(); ?>">
						<div class "banner_holder_thumb">			
							<div class="banner_holderImage" style = "background: url('<?php if($picbool){echo $src[0];} else{echo $src;} ?>')no-repeat; height:300px; position:relative; background-size: cover; background-position: center;">
								<div class="work-detail">
									<div class="vertical-centered">
										<h3>Read the article<br></h3>
									</div>
								</div>								    		
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-md-offset-3">
			<p class = "list-group-item-text"><?php the_excerpt(); ?></p>
		</div>

		<div class="col-xs-12 col-md-6 col-md-offset-3" style = "margin-bottom:10px;">
			<p class = "list-group-item-text gold-theme"><a href="<?php the_permalink(); ?>">[ Read More ]</a></p>
		</div>



	<?php endwhile; ?>

<?php endif; ?>  

<div class="col-xs-12 col-md-6 col-md-offset-3 text-right">
	<ul class="pager">
		<li class="previous"><?php previous_posts_link('&larr; Previous') ?></li>
		<li class="next"><?php next_posts_link('Next &rarr;')?></li>
	</ul>
</div>

<?php wp_reset_query(); ?>


</div>
</body>

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
	

	<?php get_footer(); ?>