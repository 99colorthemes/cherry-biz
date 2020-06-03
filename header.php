<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cherry-biz
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

<body id="nnc-body" <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}
?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'cherry-biz'); ?></a>

        <?php the_custom_header_markup(); ?>

        <?php
            get_template_part( 'template-parts/search/search', 'popup' );

            get_template_part( 'template-parts/top-bar');
        ?>

        <header id="masthead" class="site-header nnc-header">
            <div class="nnc-container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-7">
                        <div class="d-flex align-items-center">
                            <div class="site-logo">
                                <?php the_custom_logo(); ?>
                            </div>
                            <div class="site-branding">
                                <?php if (is_front_page() && is_home()) :?>
                                <h1 class="site-title m-0"><a
                                        href="<?php echo esc_url(home_url('/')); ?>"
                                        rel="home"><?php bloginfo('name'); ?></a>
                                </h1>
                                <?php
                                else :
                                    ?>
                                <h1 class="site-title m-0"><a
                                        href="<?php echo esc_url(home_url('/')); ?>"
                                        rel="home"><?php bloginfo('name'); ?></a>
                                </h1>
                                <?php
                                endif;
                                $cherry_biz_description = get_bloginfo('description', 'display');
                                if ($cherry_biz_description || is_customize_preview()) :
                                    ?>
                                <p class="site-description m-0"><?php echo $cherry_biz_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                </p>
                                <?php endif; ?>
                            </div><!-- .site-branding -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-5">
                        <div class="d-flex justify-content-end">

                            <div id="main-nav" class="nnc-nav d-none d-lg-block">
                                <nav id="site-navigation" class="main-navigation">
                                    <?php
                                        wp_nav_menu([
                                            'theme_location' => 'menu-1',
                                            'menu_id' => 'primary-menu',
                                        ]);
                                    ?>
                                </nav>
                            </div>
                            <button id="nnc-menu-icon" class="nnc-menu-icon d-lg-none d-block l-h-0">
                                <svg class="nnc-icon nnc-icon--lg" id="nnc-icon-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 459 459"><path d="M0 382.5h459v-51H0v51zM0 255h459v-51H0v51zM0 76.5v51h459v-51H0z"/></svg>
                            </button>

                            <?php get_template_part( 'template-parts/side-menu'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->



        <div id="content" class="site-content">