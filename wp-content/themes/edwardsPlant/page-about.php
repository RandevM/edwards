<?php
/*
Template Name: About Us
*/ 
?>

<?php include ('site_specific/defines.php'); ?>

<?php include('header.php'); ?>

<section class="main">

	<div class="container">
    	
	<?php include('navigation.php'); ?>

	<div class="runner about">
        <h1>About Us</h1>	    
            <ul>
                <li> Find out more about Our Company</li>
                <li> We cover Enfield, Barnet, Chingford & Finchley</li>
            </ul>
            
            
            
            <div class="cta-right">
         		<p>Call us today 
                <span class="ld-phonenumber"><?php echo $phonenumber; ?></span></p>
         	</div>
            
            
         </div>


	<div class="cat-left">
		<h2>ABOUT EDWARDS PLANET & TOOL HIRE</h2>

		<?php the_content(); ?>
	</div>
	
	<div class="cat-right">
	
		<h2>Areas Covered</h2>
		<iframe src="http://mapsengine.google.com/map/embed?mid=zw058rQd96R8.k3GUDYySeub4" width="350" height="220"></iframe>
	</div>
	
   

	<aside class="extras about">
				
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
    
</section>

<?php include ('footer.php'); ?>