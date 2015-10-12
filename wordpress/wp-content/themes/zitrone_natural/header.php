<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zitrone_Natural
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/images/icon.png' ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header class="js-header">
		<div class="grid">
			<div class="grid__col--4">
				<hgroup>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						 <h1 class="main-logo"><?php bloginfo( 'name' ); ?></h1>
					</a>
				</hgroup>
			</div>
			<div class="grid__col--11">
				<?php
					$settings = array(
						'menu' => 'Main Menu',
						'container' => 'nav',
						'container_class' => 'main-menu hidden-sm',
						'menu_class' => '',
						'echo' => 'true'
					);
					wp_nav_menu( $settings );
				?>
			</div>
		</div>
		<div id="mobile-menu-icon" class="visible-sm"><i class="fa fa-bars"></i></div>
		<?php
			$settings = array(
				'menu' => 'Main Menu',
				'container' => 'div',
				'container_class' => 'mobile-menu visible-sm',
				'container_id' => 'mobile-menu-js',
				'menu_class' => '',
				'echo' => 'true'
			);
			wp_nav_menu( $settings );
		?>
	</header>

	<div id="content" class="site-content">
