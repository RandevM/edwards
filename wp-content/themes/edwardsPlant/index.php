<?php 
    include ('site_specific/defines.php'); 
    include('header.php'); ?>

<section class="main">

	<div class="container">
    	<?php include('navigation.php'); ?>
    	
    	<div class="runner home">
            <h1>North London's <span>Largest</span> Hire Operation</h1>	    
            <ul>
                <li> Same Day Plant &amp; Tool Hire</li>
                <li> Large Stock Available </li>
            </ul>
            <div class="leftbox">
            	<h2>Established since 1967 <span>we are the largest</span> tool &amp; plant hire operation</h2>                
            </div>
            <div class="cta-right">
         		<p>Call us today <span class="ld-phonenumber"><?php echo $phonenumber; ?></span></p>
         	</div>
        </div>
         
        <div class="product-squares">

    	    <a href="<?php bloginfo('url') ?>/excavators-dumpers-diggers">
                <div class="square">
                	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/excavators.jpg" alt="excavators dumpers diggers">
                	<div class="title">
                    <p>Excavators
                    <span>Diggers &amp; Dumpers</span></p>
                    </div>
                </div>
    	    </a>
            
            <a href="<?php bloginfo('url') ?>/category/access-powered-access/">
	            <div class="square">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/access.jpg" alt="access">
                	<div class="title">
                    <p>Access
                    <span>&amp; powered access</span></p>
                    </div>
                </div>
	        </a>

    	    <a href="<?php bloginfo('url') ?>/category/generators-welding-lighting/">		
                <div class="square">
                	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/generators-welding-lighting.jpg" alt="generators">
                	<div class="title">
                    <p>Generators <span>Welding &amp; Lighting</span></p>
                    </div>
                </div>
    	    </a>
            
            <a href="<?php bloginfo('url') ?>/breaking-drilling/">
	            <div class="square">
                	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/breaking.jpg" alt="breaking drilling">
                	<div class="title">
                    <p>Breaking <span>&amp; Drilling</span></p>
                    </div>
                </div>
	        </a>		
            
    	    <a href="<? bloginfo('url') ?>/lifting-handling/">		
                <div class="square">
                	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/lifting.jpg" alt="lifting handling">
                	<div class="title">
                    <p>Lifting<span>&amp; handling</span></p>
                    </div>
                </div>
    	    </a>
            
    	    <a href="<?php bloginfo('url') ?>/sawing-cutting-grinding">
                <div class="square">
                	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/sawing.jpg" alt="sawing cutting grinding">
                	<div class="title">
                    <p>Sawing
                    <span>cutting &amp; Grinding </span></p>
                    </div>
                </div>
    	    </a>
            
            <a href="<?php bloginfo('url') ?>/concreting-preparation/">
        	    <div class="square">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/concrete.jpg" alt="concrete preparation">
                    <div class="title">
                    <p>Concreting <span>&amp; preparation</span></p>
                    </div>
                </div>
	        </a>
            
            <a href="<?php bloginfo('url') ?>/category/plumbing-pumps/">
        	    <div class="square">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/plumbing.jpg" alt="plumbing">
                    <div class="title">
                    <p>Pumps <span>&amp; Plumbing</span></p>
                    </div>
                </div>
	       </a>
        
        </div>
	</div>

</section>

<section class="outer-main-aside">

    	<div class="container">

            <article class="main" id="main">
            
                <h1>Welcome to Edwards Tool &amp; Plant Hire</h1>
		        <img alt="edwards plant" src="<?php echo get_stylesheet_directory_uri() ?>/images/imgcontent/index.jpg" class="img-right">
                <p>Here at Edwards Plant &amp; Tool Hire, we offer a comprehensive plant and tool hire service that gives you top of the range equipment at excellent prices. From access equipment to power tools, we have what you need to help you get your job done. Serving Enfield, Barnet, Chingford and Finchley, we pride ourselves on providing you with the best service, whatever your needs are. Diggers, excavators and garden machinery are available from our extensive range of equipment, and should your current machinery develop a fault, our tool and plant repairs service ensures they get back to working order as soon as possible.</p>
                <blockquote>We offer a comprehensive plant and tool hire service that gives you top of the range equipment at excellent prices.</blockquote>
                <p>Simply visit our Enfield depot or give us a call and our friendly team will be happy to help!</p>
            
            </article>
            
            <aside>
				
        		<div class="long-hire">
        			<p><span>20% off</span>on long term hire</p>
        			<a href="<? bloginfo('url') ?>/contact">Contact us now!</a>
        		</div> 

        		<div class="account">
        			<p>New accounts<span>welcome</span>with trade discounts</p>
        		</div>

        		<div class="price">
        			<p class="title">We will not be beaten on price or service</p><p class="text"><span>We are long</span>established through our <span>excellent reputation</span></p>
        		</div> 

        		<div class="serviced">
        			<p>All equipment &amp; machinery<span>fully checked &amp; serviced</span></p>
        		</div>  

            </aside>            
        </div>
    
    </section>

<?php include ('footer.php'); ?>