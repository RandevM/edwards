<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package adtrak
 */
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">

<title><?php echo $companyName; ?></title>

<meta charset="UTF-8" />
<meta name="author" content="Adtrak LLP (www.adtrak.co.uk)" />
<meta name="revisit-after" content="15 days" />
<meta name="robots" content="index, follow" />

<!-- Stylesheets -->

<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/includes/css/normalize.css"/>
<link href="<?php echo get_stylesheet_directory_uri() ?>/includes/css/master.css" rel="stylesheet" media="all" />
<link href="<?php echo get_stylesheet_directory_uri() ?>/includes/css/print.css" rel="stylesheet" media="print" />
<link rel="shortcut icon" href="favicon.ico" />


<!--[if lt IE 9]><script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/html5shiv.js"></script><![endif]-->

<?php wp_head(); ?>

</head>

<body id="index" class="index" itemscope itemtype="http://schema.org/publisher">

<header class="white">

		<div class="top-nav">
            <div class="container">
        		<div class="search">
        		<?php dynamic_sidebar( 'top-left' ); ?>
        		</div>
                <nav class="top-navigation dark">
                    <ul>
                      	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'items_wrap' => '%3$s', container => 'false' )); ?>
                    </ul>
                </nav>
            </div>
        </div>
        
        <div class="container">
            <div itemscope itemtype="http://schema.org/Organization">
                <a itemprop="url" href="<?php echo home_url(); ?>">
                    <img itemprop="logo" class="logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/logo.jpg" alt="Edwards Tool and Plant Hire" />
                </a>
            </div>
            
            <div class="cta-top-right">
                <p class="phone">Call us now for a <span>free</span> quote: <span class="ld-phonenumber"><?php echo $phonenumber; ?></span></p>
			 <img src="<?php echo get_stylesheet_directory_uri() ?>/images/layout/header-cards.jpg" alt="header-cards"/>
            </div>
  		</div>

</header>