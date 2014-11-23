<?php include ('site_specific/defines.php');?>
<?php include('header.php');?>

<section class="main">
	<div class="container">
	<?php include('navigation.php');?>
	<?php if(function_exists('yoast_breadcrumb')){yoast_breadcrumb('<p id="crumbs">','</p>');}?>
	<div class="cat-wrap">
	<div class="product-description">
	<h1><?php single_cat_title();?></h1>
		
	</div>

	<div class="runner category">
		<ul>
			<li><?php  $result_random=rand(1,100);if($result_random<=30){echo "Full Range of High Quality Equipment for working safely on site";}else if($result_random<=60){echo "Competitive hire rates - call us for the best prices & service";}else {echo "Reliable Machines & Equipment – all tested and serviced regularly";}?></li>
			<li><?php  $result_random=rand(1,100);if($result_random<=30){echo "Fast, Efficient Same Day Delivery Service";}else if($result_random<=60){echo "Expert, Experienced  Staff on hand to give help & advice";}else {echo "Same day Delivery available directly to you on site";}?></li>
		</ul>
	</div>

<?php $this_category=get_category($cat);if($this_category->category_parent==0){?>

<div class="product-squares">

<?php $current_cat=get_query_var('cat');?>

<?php $cats=get_categories('orderby=count&order=DESC&hide_empty=0&child_of='.$current_cat);foreach($cats as $cat):$args=array('posts_per_page'=>-1,'cat'=>$cat->term_id);query_posts($args); $catlink='<a href="'.get_category_link($cat->term_id).'">';echo $catlink;?>

	<div class="square">
		<img src="<?php echo z_taxonomy_image_url(NULL,array(300,250));?>" alt="product image" />
		<?php $mega='<div class="title">';$mega.='<p class="small">'.$cat->name.'</p>';$mega.='</div>';echo $mega;?>
	</div>
</a>

<?php endforeach;?>

</div>

<?php }else { $parent_category=get_category($this_category->category_parent);?>

	<div class="product-squares">
		<?php if(have_posts()):while(have_posts()):the_post();?>
		<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title_attribute();?>">
		<div class="square">
			<?php the_post_thumbnail();?>
		<div class="title">
			<p class="small"><?php the_title();?></p>
		</div>
	</div> 
</a>

<?php endwhile;else:?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif;?>

</div>

<?php }?>

		<div class="cat-left">
		
		<?php if($this_category->category_parent==0){?>
		
		<h2><?php echo get_cat_name($current_cat);?></h2>

		<?php }else {?>

		<h2><?php single_cat_title();?></h2>

		<?php } echo category_description($current_cat);?> 

		
		</div>

		<div class="cat-right">
		<blockquote>We offer a comprehensive plant and tool hire service that gives you top of the range equipment at excellent prices</blockquote>

		<p style="text-align: center;"><strong>Opening Hours:</strong><br><br> <strong>Weekdays</strong> <br>07.30am - 17:30pm <br><strong>Saturdays</strong><br> 08:00am - 12:30pm</p>
		</div>		
		
		<aside class="extras">
				
		<div class="long-hire">
			<p><span>20% off</span>on long term hire</p>
			<a href="<? bloginfo('url')?>/contact">Contact us now!</a>
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
</section>


<?php include('footer.php');?>