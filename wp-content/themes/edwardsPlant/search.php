<?php include ('site_specific/defines.php'); ?>
<?php include('header.php'); ?>

<section class="main">
	<div class="container">
	<?php include('navigation.php'); ?>
		<div id="crumbs">
		<p>Displaying search results for</p>
		</div>
		<div class="product-description">
		
		<h1><?php the_search_query(); ?></h1>
		</div>
		

<!-- common head section content goes here -->
<?php if ( have_posts() ) : ?>
   <!-- HTML content appropriate for results found goes here -->
	<div class="product-squares">
   <?php while ( have_posts() ) : the_post();?>
      
	<div class="square">
		<?php the_post_thumbnail(); ?>
	<div class="title"><p class="small"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p></div>
	</div>

<?php endwhile; ?>

</div>

<?php else : ?>
   <p> Sorry, no products matched your search </p>
<?php endif; ?>
<!-- More common HTML can go here -->

	
	</div>
</section>

<?php include('footer.php'); ?>