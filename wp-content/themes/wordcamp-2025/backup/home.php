<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordcamp2025
 */

get_header();
?>

<main id="primary" class="site-main">

	<div class="bg-secondary min-vh-100 section-lg">
		<div class="container">

			<h1 class="text-primary text-center os-heading">
				<span>Welcome to</span>
				Outside Bug Squashing
			</h1>
			<div class="text-center os-subtitle mt-5">
				<p>
					We need your help to fix this. You can help us with anyone
				</p>
			</div>

			<div class="os-wrapper">
				<div class="row row-gap-5">
					<div class="col-md-4">
						<div class="os-card p-5 rounded-4">
							<div class="text-center">
								<h2 class="os-title fw-bold text-primary">
									Bug #1
								</h2>
								<div class="post-content mt-5">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga explicabo deleniti quisquam, veniam adipisci quas repudiandae vitae corrupti quibusdam facilis obcaecati atque laboriosam, quia doloremque inventore libero officiis ipsam ducimus.</p>
								</div>
								<div class="mt-5">
									<a href="#" class="os-btn d-flex" title="Fix the Bug">
										Fix the Bug
										<svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 43 42">
											<path stroke-width="4" stroke="#fff" d="M20 7H23C26.866 7 30 10.134 30 14V28.5C30 33.1944 26.1944 37 21.5 37C16.8056 37 13 33.1944 13 28.5V14C13 10.134 16.134 7 20 7Z">
											</path>
											<path stroke-linecap="round" stroke-width="4" stroke="#fff" d="M18 2V7">
											</path>
											<path stroke-linecap="round" stroke-width="4" stroke="#fff" d="M25 2V7">
											</path>
											<path stroke-linecap="round" stroke-width="4" stroke="#fff" d="M31 22H41"></path>
											<path stroke-linecap="round" stroke-width="4" stroke="#fff" d="M2 22H12">
											</path>
											<path stroke-linecap="round" stroke-width="4" stroke="#fff" d="M12.5785 15.2681C3.5016 15.2684 4.99951 12.0004 5 4"></path>
											<path stroke-linecap="round" stroke-width="4" stroke="#fff" d="M12.3834 29.3877C3.20782 29.3874 4.72202 32.4736 4.72252 40.0291">
											</path>
											<path stroke-linecap="round" stroke-width="4" stroke="#fff" d="M30.0003 14.8974C39.0545 15.553 37.7958 12.1852 38.3718 4.20521">
											</path>
											<path stroke-linecap="round" stroke-width="4" stroke="#fff" d="M29.9944 29.7379C39.147 29.1188 37.8746 32.2993 38.4568 39.8355">
											</path>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</main><!-- #main -->

<?php
// get_sidebar();
// get_footer();
