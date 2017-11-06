<!DOCTYPE html>
<html>
<head> 
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<div class="header-left">
		<div class="site-title">
			<h1 class="site-name"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!--.site-title-->
	</div><!--.header-left-->
	
	<?php if( is_active_sidebar( 'header-widget-area' ) ) : ?>
		<div class="header-right">
			<?php dynamic_sidebar( 'header-widget-area' ); ?>
		</div>
	<?php endif; ?>

</header>

<nav class="main">
	<?php wp_nav_menu( array(
		'theme_location' => 'header-menu',
		'container_class' => 'menu'
		)); ?>
</nav>

<div class="container">
	<div class="content">
		
		<?php do_action ( 'tutsplus_before_content' ); ?>




