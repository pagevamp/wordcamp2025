<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordcamp2025
 */

?>

<footer class="site-footer u-pt-2xl u-pt-3xl">
	<div class="site-footer__bg">
		<div class="l-container u-py-2xl u-py-lg-3xl">
			<div class="l-row">
				<div class="l-col-offset-lg-4 l-col-lg-8">
					<h2 class="site-footer__title">We’re always interested in new ideas.</h2>
					<button class="site-footer__btn">Get in touch</button>
				</div>
			</div>

			<div class="l-row u-py-2xl u-py-lg-3xl">
				<div class="l-col-6 l-col-offset-lg-4 l-col-lg-3">
					<ul class="site-footer__link">
						<li>
							<a title="Home" aria-label="Home" type="link" tabindex="1" href="#">
								Home
							</a>
						</li>
						<li>
							<a title="Projects" aria-label="Projects" type="link" tabindex="1" href="#">
								Projects
							</a>
						</li>
						<li>
							<a title="Services" aria-label="Services" type="link" tabindex="1" href="#">
								Services
							</a>
						</li>
						<li>
							<a title="Approach" aria-label="Approach" type="link" tabindex="1" href="#">
								Approach
							</a>
						</li>
					</ul>
				</div>
				<div class="l-col-6 l-col-lg-4">
					<ul class="site-footer__link">
						<li>
							<a title="Company" aria-label="Company" type="link" tabindex="1" href="#">
								Company
							</a>
						</li>
						<li>
							<a title="Philosophy" aria-label="Philosophy" type="link" tabindex="1" href="#">
								Philosophy
							</a>
						</li>
						<li>
							<a title="Opportunities" aria-label="Opportunities" type="link" tabindex="1" href="#">
								Opportunities
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="l-row u-py-2xl u-py-lg-3xl">
				<div class="l-col-offset-lg-4 l-col-lg-8">
					<div class="site-footer__destination">
						<div class="site-footer__destination-title">
							<span>Kathmandu</span><span class="timezone" id="Asia/Kathmandu">13:15</span>
						</div>
						<div class="site-footer__destination-title">
							<span>Milan</span><span class="timezone" id="Europe/Amsterdam">08:30</span>
						</div>
						<div class="site-footer__destination-title">
							<span>Belfast</span><span class="timezone" id="Europe/Belfast">07:30</span>
						</div>
						<div class="site-footer__destination-title">
							<span>New York</span><span class="timezone" id="America/New_York">03:30</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>