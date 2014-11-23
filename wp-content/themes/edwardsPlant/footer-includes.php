<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/jquery.min.js"></script>

<?php if ($_SERVER['SERVER_NAME'] != 'web-server') {?>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/jquery.cookie.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/jquery.cookiecuttr.js"></script>
<?php } ?>

<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/jquery.validationEngine.js"></script>

<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/scripts/run.js"></script>

<!-- Location Dynamics Script -->

<script>

var ld_var = ld_var || {};
ld_var['ld_message'] = 'Call Locally on Mobile';

</script>

<script src="http://adtrakld.co.uk/ld.js"></script>
<script>if(!window.ld_ready){document.write('<script src="<?php echo get_stylesheet_directory_uri() ?>/includes/ld/ld.js"><\/script>');document.write('<script src="http://adtrakld.co.uk/alert.php?url='+encodeURIComponent(location.href)+'&version=Unknown&message=Primary%20script%20fail"><\/script>');}</script>
