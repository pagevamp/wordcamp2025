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

	<!-- Leadspace Section -->
	<?php include(get_template_directory() . '/homepage/m-leadspace.php'); ?>

	<!-- Service List Section -->
	<?php include(get_template_directory() . '/homepage/m-service-list.php'); ?>

	<!-- Project List Section -->
	<?php include(get_template_directory() . '/homepage/m-project-list.php'); ?>

	<!-- Approach Section -->
	<?php include(get_template_directory() . '/homepage/m-approach.php'); ?>

	<!-- Company Section -->
	<?php include(get_template_directory() . '/homepage/m-company.php'); ?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
