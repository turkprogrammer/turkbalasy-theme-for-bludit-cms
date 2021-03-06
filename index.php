<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>
<div class="main_page_wrapper" id="main_page_wrapper">
   <div id="editable_page">
	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- Navbar -->
	<?php include(THEME_DIR_PHP.'navbar.php'); ?>

	<!-- Content -->
	<?php
		// $WHERE_AM_I variable detect where the user is browsing
		// If the user is watching a particular page the variable takes the value "page"
		// If the user is watching the frontpage the variable takes the value "home"
		if ($WHERE_AM_I == 'page') {
			include(THEME_DIR_PHP.'page.php');
		} else {
			include(THEME_DIR_PHP.'home.php');
		}
	?>

	<!-- Footer -->
	<?php include(THEME_DIR_PHP.'footer.php'); ?>

	<!-- Javascript -->
	<?php
		// Include Jquery file from Bludit Core
		echo Theme::jquery();

 
		// Include javascript Bootstrap file from Bludit Core
		echo Theme::jsBootstrap();
	?>
	
	<?php echo Theme::js('js/popper.min.js');?>
	<?php echo Theme::js('plugins/slick/slick.js');?>
	<?php echo Theme::js('js/scripts.js');?>


	<!-- Load Bludit Plugins: Site Body End -->
	<?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>