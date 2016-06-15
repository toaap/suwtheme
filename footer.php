		</div>
		
		</div>
			
    </div>
		<!--<footer class="container foot">
			
		</footer> --><!-- /.container foot -->
			<div class = "push"></div>
		</div>
		<footer>

        <div class="demo-content-bottom"></div>
			<div class = "container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<div class="col-md-4 box1 footerbox_left">
						<h5 class = "footer_nav_header">suitupweird.com</h5>

						<?php
	            			wp_nav_menu( array(
		                		'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'depth'             => 2,
				                'menu_class'        => 'nav-bottom',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
	            			);
	        			?>

						<!--  navbar navbar-nav 
							p {
    border-style: solid;
    border-top: thick double #ff0000;
}


						<form class="form-inline footer_margin">
						<h5>Sign up for newsletter:</h5>
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
						    <div class="input-group">
						      <input type="text" class="form-control input-sm" id="exampleInputAmount" placeholder="email">
						    </div>
						  </div>
						  <button type="submit" class="btn btn-primary btn-sm">Send</button>
						</form>
						-->

						

					</div>
					<div class="col-md-4 box2" style = "text-align:center;">
					</div>
					<div class="col-md-4 box3">
					<div class="icon-foot mobiledevice">
							<ul>
								<li><a href="https://www.facebook.com/suitupweird/" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://instagram.com/suitupweird/" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://twitter.com/suitupweird/" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="http://suitupweird.com/" target="_blank"><i class="fa fa-tumblr"></i> </a></li>
							</ul>
							<br>
					</div>
					<br> 
					<div class = "footer_mobile_text">
						<h5 class = "text_right">Further questions? Please contact us at:</h5>
						<h5 class = "text_info_mail text_right">info[at]suitupweird.com</h5>
						<h5 class = "text_right">© suitupweird.com 2015<br>designed by: <a href="http://gerdbo.se" target="_blank">gerdbo.se</a></h5>
					</div>
					<div class = "contact_footer">
					</div>
					</div>
				</div>
			</div>
			</div>
		</footer>

				<?php wp_footer(); ?>
				<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
				<script src = "<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	</body>
</html>
