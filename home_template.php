<?php
/*
Template Name: **Do not use - Home template
*/
?>

<?php get_header(); 

	$int = 0;
	query_posts('cat=-4&posts_per_page=8'); while(have_posts()) : the_post();
	if (in_category(4)) { continue; }

	$int ++;

	//Checks if post contains picture or not
	if($int == 1){
		$src = null;
		$postid = get_the_ID();
		$title = get_the_title();
		if ( has_post_thumbnail() ) {
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($postid), array( 1000,500 ), false, '' );
			$picbool = true;
		}
		else {
			$src = "wp-content/themes/suwtheme/images/nopicture.jpg";
			$picbool = false;
		}

		$perm1 = get_permalink($post->ID);
	}

	if($int == 2){
		$postid = get_the_ID();
		$title1 = get_the_title();
		if ( has_post_thumbnail() ) {
			$src1 = wp_get_attachment_image_src( get_post_thumbnail_id($postid), array( 1000,500 ), false, '' );
			$picbool1 = true;
			}
		else {
			$src1 = "wp-content/themes/suwtheme/images/nopicture.jpg";
			$picbool1 = false;
		}
		$perm2 = get_permalink($post->ID);
	}

	if($int == 3){
		$postid = get_the_ID();
		$title2 = get_the_title();
		if ( has_post_thumbnail() ) {
			$src2 = wp_get_attachment_image_src( get_post_thumbnail_id($postid), array( 1000,500 ), false, '' );
			$picbool2 = true;
			}
		else {
			$src2 = "wp-content/themes/suwtheme/images/nopicture.jpg";
			$picbool2 = false;
		}
		$perm3 = get_permalink($post->ID);
	}

	if($int == 4){
		$postid = get_the_ID();
		$title3 = get_the_title();
		if ( has_post_thumbnail() ) {
			$src3 = wp_get_attachment_image_src( get_post_thumbnail_id($postid), array( 1000,500 ), false, '' );
			$picbool3 = true;
			}
		else {
			$src3 = "wp-content/themes/suwtheme/images/nopicture.jpg";
			$picbool3 = false;
		}
		$perm4 = get_permalink($post->ID);
	}
	
	endwhile; wp_reset_query(); ?>

<div class="row">
	<div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="content-main">
        	<a href="<?php echo $perm1; ?>">
        	<div class "banner_holder">
	        	<div class="banner_holderImage" style = "background: url('<?php if($picbool){echo $src[0];} else{echo $src;} ?>')no-repeat; height:350px; position:relative; background-size: cover; background-position: center;">
	        		<div class="work-detail">
		        		<div class="vertical-centered">
		        			<h3><?php echo $title; ?></h3>
		        		</div>
		        	</div>
	    		</div>
    		</div>
    		</a>
    	</div>
    </div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-6 col-md-offset-3">
	    <div class="col-md-4 box1">
	        <div class="content-main-rowTwo bg-alt">
		        <a href="<?php echo $perm2; ?>">
		        	<div class "banner_holder">
		        	<!-- Puts picture in the div -->
			        	<div class="banner_holderImage" style = "background: url('<?php if($picbool1){echo $src1[0];} else{echo $src1;} ?>')no-repeat; height:200px; position:relative; background-size: cover; background-position: center;">
					    	<div class="work-detail">
				        		<div class="vertical-centered">
				        			<h3><?php echo $title1; ?></h3>
				        		</div>
				        	</div>
			    		</div>
		    		</div>
		    	</a>
	        </div>
	    </div>
	    <div class="col-md-4 box2">
	        <div class="content-main-rowTwo bg-alt">
	        	<a href="<?php echo $perm3; ?>">
		        	<div class "banner_holder">
		        	<!-- Puts picture in the div -->
			        	<div class="banner_holderImage" style = "background: url('<?php if($picbool2){echo $src2[0];} else{echo $src2;} ?>')no-repeat; height:200px; position:relative; background-size: cover; background-position: center;">
					    	<div class="work-detail">
				        		<div class="vertical-centered">
				        			<h3><?php echo $title2; ?></h3>
				        		</div>
				        	</div>			    		
			    		</div>
		    		</div>
	    		</a>
	        </div>
	    </div>
	    <div class="col-md-4 box3">
	        <div class="content-main-rowTwo bg-alt">
	        	<a href="<?php echo $perm4; ?>">
		        	<div class "banner_holder">
		        	<!-- Puts picture in the div -->
			        	<div class="banner_holderImage" style = "background: url('<?php if($picbool3){echo $src3[0];} else{echo $src3;} ?>')no-repeat; height:200px; position:relative; background-size: cover; background-position: center;">
					    	<div class="work-detail">
				        		<div class="vertical-centered">
				        			<h3><?php echo $title3; ?></h3>
				        		</div>
				        	</div>			    		
			    		</div>
		    		</div>
		    	</a>
	        </div>
	    </div>
	</div>
</div>

<?php get_footer(); ?>
