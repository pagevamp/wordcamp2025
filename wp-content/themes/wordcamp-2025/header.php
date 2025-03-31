<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordcamp2025
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'wordcamp2025'); ?></a>

		<div class="cursor">
			<span class="cursor__close h3">×</span>
		</div>

		<header id="masthead" class="header">
			<div class="header__overlay"></div>

			<div class="l-container u-pointer-none">
				<div class="l-row">
					<div class="l-col-md-8 l-col-lg-6 l-col-xl-5">
						<div class="header__container">
							<div class="header__mega-menu">

								<!-- Header Menu -->
								<div class="header__mega-menu-navigation">
									<ul class="header__mega-menu-list">
										<li>
											<a class="header__mega-menu-item" href="#" title="Projects" target="_self">
												<span>Projects</span>
												<span class="header__link-icon">→</span>
											</a>
										</li>
										<li>
											<a class="header__mega-menu-item" href="#" title="Services" target="_self">
												<span>Services</span>
												<span class="header__link-icon">→</span>
											</a>
										</li>
										<li>
											<a class="header__mega-menu-item" href="#" title="Approach" target="_self">
												<span>Approach</span>
												<span class="header__link-icon">→</span>
											</a>
										</li>
										<li>
											<a class="header__mega-menu-item" href="#" title="Company" target="_self">
												<span>Company</span>
												<span class="header__link-icon">→</span>
											</a>
										</li>
										<li>
											<a class="header__mega-menu-item" href="#" title="Philosophy" target="_self">
												<span>Philosophy</span>
												<span class="header__link-icon">→</span>
											</a>
										</li>
									</ul>
									<ul class="header__mega-menu-social">
										<li>
											<a class="header__mega-menu-item u-d-block" href="#" title="LinkedIn ↗︎" target="_blank">
												LinkedIn ↗︎
											</a>
										</li>
										<li>
											<a class="header__mega-menu-item u-d-block" href="#" title="Instagram ↗︎" target="_blank">
												Instagram ↗︎
											</a>
										</li>
										<li>
											<a class="header__mega-menu-item u-d-block" href="#" title="Intro deck ↗︎" target="_blank">
												Intro deck ↗︎
											</a>
										</li>
									</ul>
								</div>

								<!-- Header Contact -->
								<div class="header__mega-menu-contact u-h-100">
									<ul class="header__mega-menu-contact-list">
										<li>
											<button class="header__contact-msg-btn header__mega-menu-contact-item">
												<div>
													<span>Drop us a message</span> <span>→</span>
												</div>
											</button>
										</li>
									</ul>

									<div class="header__mega-menu-form">
										<button class="c-btn header__back-btn">
											<span>←</span>Back
										</button>
										<div class="u-pt-m p1">
											<div class="header__contact-form">
												<?php echo apply_shortcodes('[contact-form-7 id="dcd5415" title="Contact Form"]') ?>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="header__menu">
								<a class="header__logo" href="#" title="Home">
									<span>Outside</span>
								</a>

								<div class="header__btns">
									<button class="header__menu-btn" data-close-text="Close"><span>Menu</span></button>
									<button class="header__contact-btn" data-close-text="Close"><span>Contact</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php
			/*
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$wordcamp2025_description = get_bloginfo( 'description', 'display' );
					if ( $wordcamp2025_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $wordcamp2025_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div> 
				<!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wordcamp2025' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>
			*/
			?>
			<!-- #site-navigation -->
		</header><!-- #masthead -->