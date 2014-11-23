<?php
/*
Template Name: Contact Us
*/ 
?><?php include ('site_specific/defines.php'); ?><?php include('header.php'); ?>

<section class="main">

	<div class="container">
    	
	<?php include('navigation.php'); ?>

	<div class="runner contact">
        <h1>Contact Us</h1>	    
            <ul>
                <li> Contact us by completing the contact form</li>
                <li> Alternatively, phone or email us</li>
            </ul>
            
            
            <div class="cta-right">
         		<p>Call us today 
                <span class="ld-phonenumber"><?php echo $phonenumber; ?></span></p>
         	</div>
            
            
         </div>

	<div class="cat-left">
	<h2>CONTACT EDWARDS PLANET & TOOL HIRE</h2>
	<?php the_content(); ?>
	<?php include ('includes/forms/contact-form.php'); ?>

	
	
		

		
	</div>

	<div class="cat-right">
	<h2>Our Location</h2>
	<iframe src="http://mapsengine.google.com/map/embed?mid=zw058rQd96R8.kXU2n-1HpCGg" width="350" height="220" style="margin-bottom:20px;"></iframe>

	<h2>ALTERNATIVE CONTACT</h2>
	<p><strong>Address:</strong></p>
	<p><?php echo $companyAddressStacked; ?></p>
	<p><strong>Email:</strong></p>
	<p class="contact-email"><?php echo $companyEmail; ?></p>

	<h2>OPENING HOURS</h2>
	<p>
	Weekdays - 7:30am - 5:30pm <br/>
	Saturdays - 8:00am - 12:30pm</p>

	</div>

	


	
    </div>
    
</section>

<?php include ('footer.php'); ?>