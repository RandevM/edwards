<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package adtrak
 */
?>

<footer>

	<div class="container">

		<div class="areas">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/footer-areas-bg.png" alt="Index Map of covered areas" />
			<p>Covering london and surrounding areas call us to book now: <span class="ld-phonenumber"><?php echo $phonenumber; ?></span></p>
		</div>
	
		<div class="col footer-services">
		
			<p class="title">Sitemap</p>
		
			<nav>

				<ul>
			
						<li><a href="<? bloginfo('url') ?>">Home</a></li>
						<li><a href="<? bloginfo('url') ?>/about-us-areas-covered">About Us & Areas Covered</a></li>
						<li><a href="<? bloginfo('url') ?>/delivery-locations">Delivery</a></li>
						<li><a href="<? bloginfo('url') ?>/terms">Terms</a></li>
						<li><a href="<? bloginfo('url') ?>/contact">Contact</a></li>

					
				</ul>
			
			</nav>      
			
		</div>  	
	
		<div class="col footer-services">
		
			<p class="title">Popular Services</p>
		
			<nav>

				<ul>
			
					
						<li class="diggers-excavators"><a href="<? bloginfo('url') ?>/excavators-dumpers-diggers">Excavators Dumpers &amp; Diggers &raquo;</a></li>

					
						<li class="ladders"><a href="<? bloginfo('url') ?>/access-powered-access/ladders-steps">Ladders &amp; Steps &raquo;</a></li>

					
						<li class="scaffolding-towers"><a href="<? bloginfo('url') ?>/garden-machinery/ground-care">Ground Care &raquo;</a></li>

					
						<li class="pressure-cleaning"><a href="<? bloginfo('url') ?>/cleaning-floorcare/pressure-cleaning">Pressure Cleaning &raquo;</a></li>

					
				</ul>
			
			</nav>   
			
		</div>
		
		<div class="col footer-address">
		
			<p class="title">Address</p>
		
			<p><?php echo $companyAddressStacked; ?></p>
			
		</div>

		<div class="col footer-payment">
		
			<p class="title">Payment Methods</p>
		
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/footer-cards.jpg" alt="Index - Credit cards we accept" />
			
		</div>
		
		<div class="footer-bottom">
			
			<p class="telephone"><span>Telephone:</span> <?php echo $phonenumber; ?></p>
			<p class="email"><span>Email:</span> <?php echo $companyEmail; ?></p>

			<p class="rights">&copy; <?php echo $companyName; ?> <?php echo date("Y"); ?> All Rights Reserved Company Reg No <?php echo $companyRegNumber; ?> &bull; VAT No <?php echo $companyVATNumber; ?></p>
			
		</div>
		
	<div class="clearfix"></div>
	
	</div>

</footer>

<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/jquery.validationEngine.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/run.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/jquery.cookie.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/jquery.cookiecuttr.js"></script>

<?php if ( is_page_template('page-areas.php') ) { ?>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/list.min.js"></script>
	<script>
		var options = {
	  	valueNames: [ 'name']
		};
		var userList = new List('locations', options);
	</script>

<?php }	?>

<?php wp_footer(); ?>

</body>
</html>