<?php
/**
 * The main template file
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cherry-biz
 */


get_header();

require get_template_directory() . '/frontpage-parts/slider.php';

require get_template_directory() . '/frontpage-parts/client.php';

require get_template_directory() . '/frontpage-parts/our-services.php';

require get_template_directory() . '/frontpage-parts/our-story.php';

require get_template_directory() . '/frontpage-parts/our-projects.php';

require get_template_directory() . '/frontpage-parts/testimonials.php';

require get_template_directory() . '/frontpage-parts/our-blogs.php';

get_footer();
