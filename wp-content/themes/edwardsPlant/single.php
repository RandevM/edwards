<?php include ('site_specific/defines.php'); ?>
<?php include('header.php'); ?>

<section class="main">
	<div class="container">
	<?php include('navigation.php'); ?>
	
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="crumbs">','</p>');} ?>

	
	<div class="product-description">
	<h1><?php the_title();?></h1>
	
		<div class="product-left">
			<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			} 
			?>
			
			<div class="cta">
			<p>Call now for latest prices
			<span class="ld-phonenumber"><?php echo $phonenumber; ?></span></p>
			</div>
		</div>

		<div class="product-right">
		<div class="safety">
		<p><strong>Product Information</strong></p>
		</div>
		<table>
			
			<tr>
				<td>Tool</td>
				<td><?php the_field('tool'); ?> </td>
			</tr>
			<tr>
				<td>1 day</td>
				<td><?php the_field('1_day'); ?> </td>
			</tr>
			<tr>
				<td>2 day</td>
				<td><?php the_field('2_day'); ?> </td>
			</tr>
			<tr>
				<td>1 week</td>
				<td><?php the_field('1_week'); ?> </td>
			</tr>
			<tr>
				<td>Description</td>
				<td><?php the_field('description'); ?> </td>
			</tr>
			<tr>
				<td>Consumables</td>
				<td><?php the_field('consumables'); ?> </td>
			</tr>
			<tr>
				<td>Safety Equipment</td>
				<td><?php the_field('safety_equipment'); ?> </td>
			</tr>
			<tr>
				<td>Instructions</td>
				<td><?php the_field('instructions'); ?> </td>
			</tr>
			<?php if( get_field('pdf') ):?>
			<tr>	
				<td>PDF</td>
				<td>
					<a href="<?php the_field('pdf'); ?>" >Download File</a>	
				</td>

				
			</tr><?php endif; ?>
		</table>

		<div class="contact">
		<p><strong>CONTACT US about this product <a href="mailto:enquires@edwardsplant.co.uk?subject=<?php the_title();?>">click here</a></strong></p>
		</div>

		   <aside class="extras">
				
		<div class="long-hire">
			<p><span>20% off</span>on long term hire</p>
			<a href="<? bloginfo('url') ?>/contact">Contact us now!</a>
		</div> 

		

		<div class="price">
			<p class="title">We will not be beaten on price or service</p><p class="text"><span>We are long</span>established through our <span>excellent reputation</span></p>
		</div> 

		<div class="account">
			<p>New accounts<span>welcome</span>with trade discounts</p>
		</div>

		<div class="serviced">
			<p>All equipment &amp; machinery<span>fully checked &amp; serviced</span></p>
		</div>  

	
		
</aside>  



    

		</div>


	</div>


	</div>


           
            
         
    </section>

<?php include('footer.php'); ?>