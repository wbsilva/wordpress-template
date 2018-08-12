<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( ); ?></title>
	<?php wp_head(); ?>
</head>
<body>

<div class="header">
	<nav class="navbar navbar navbar-custom">
	  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand navbar-brand-custom" href="#"><span><img src="<?php bloginfo('template_directory' );?>/assets/images/logomenu.png"></span></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <?php 
		    	// Register Custom Navigation Walker
				require_once ('assets/includes/wp-bootstrap-navwalker.php'); 
			?>
		    <?php 
		    	wp_nav_menu( array(
		    		'menu'				=> 'Menu',
				    'theme_location'    => 'menu-header',
				    'depth'             => 2,
				    'container'         => 'div',
				    'container_class'   => 'collapse navbar-collapse navbar-collapse-custom',
				    'container_id'      => 'bs-example-navbar-collapse-1',
				    'menu_class'        => 'nav navbar-nav navbar-right',
				    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				    'walker'            => new WP_Bootstrap_Navwalker(),
				) );
		    ?>
	  </div>
	  		<!-- /.container-fluid -->
	</nav>

</div>