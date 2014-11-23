<?php include ('site_specific/defines.php'); ?>
<?php include('header.php'); ?>

<section class="main">
	<div class="container">
	<?php include('navigation.php'); ?>
	<div class="product-description">
	<h1>404 Error</h1>
		
		<div class="error-message">
			<p>The page you are trying to reach does not exist, or has been moved.<br/> 
			Please use the menus or the search box to find what you are looking for. </p>
		</div>

		<div class="error-search">
			<?php get_search_form(); ?>
		</div>
		
	
	</div>

	<div class="cat-left error">
	<h2>Recent Products</h2>
	<ul>
	<?php
		$recent_posts = wp_get_recent_posts();
		foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
		}
	?>
	</ul>
	</div>

	<div class="cat-right error">
	<h2>Popular Categories</h2>
	<ul>
	<?php wp_list_categories('number=11&show_count=1&orderby=count&depth=1&$hierarchical=1&order=DESC&title_li=') ?>
	</ul>

	</div>

</div>
</section>

<?php include('footer.php'); ?>