<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Site
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fox-university' ); ?></a>

	<div class="bg-top navbar-light">
		<div class="container">
			<div class="row no-gutters d-flex align-items-center align-items-stretch">
				<div class="col-md-4 d-flex align-items-center py-4">
					<a class="navbar-brand" href="index.html">Fox. <span>University</span></a>
				</div>
				<div class="col-lg-8 d-block">
					<div class="row d-flex">
						<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
							<div class="text">
								<span>Email</span>
								<span>youremail@email.com</span>
							</div>
						</div>
						<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<div class="text">
								<span>Call</span>
								<span>Call Us: + 1235 2355 98</span>
							</div>
						</div>
						<div class="col-md topper d-flex align-items-center justify-content-end">
							<p class="mb-0">
								<a href="#" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
									<span>Login</span>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center px-4">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<form action="#" class="searchform order-lg-last">
				<div class="form-group d-flex">
				<input type="text" class="form-control pl-3" placeholder="Search">
				<button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
				</div>
			</form>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<?php
					wp_nav_menu(array(
						'menu' => '',
						'container' => false,
						'container_class' => '',
						'theme_location' => 'primary-menu',
						'menu_class' => 'navbar-nav mr-auto',
						'add_li_class'  => 'nav-item'
					));
				?>
			</div>
		</div>
	</nav>
