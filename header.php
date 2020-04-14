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
$cherry_biz_searchbox = get_theme_mod('cherry_biz_search_checkbox', 0);
$cherry_biz_social_link = get_theme_mod('cherry_biz_social_link_checkbox', 0);
$cherry_biz_facebook_link = get_theme_mod('cherry_biz_facebook_link', '');
$cherry_biz_twitter_link = get_theme_mod('cherry_biz_twitter_link', '');
$cherry_biz_instagram_link = get_theme_mod('cherry_biz_instagram_link', '');
$cherry_biz_youtube_link = get_theme_mod('cherry_biz_youtube_link', '');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<body id="nnc-body" <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}
?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'cherry-biz'); ?></a>

        <?php require get_template_directory() . '/search-toggle.php'; ?>

        <div class="nnc-topbar">
            <div class="nnc-container">
                <div class="d-flex align-items-center justify-content-center justify-content-md-between flex-column flex-md-row">
                    <div class="nnc-topbar__info">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item pr-3">123456789</li>
                            <li class="list-inline-item">info@web.com</li>
                        </ul>
                    </div>
                    <div class="sy-top-bar__info d-flex justify-content-end">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item pr-1">
                                <a href="" title="facebook"><i class="fab fa-facebook text-white"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" title="instagram"><i class="fab fa-instagram text-white"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" title="twitter"><i class="fab fa-twitter text-white"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" title="youtube"><i class="fab fa-youtube text-white"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" title="google"><i class="fab fa-google text-white"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

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
                                <p class="site-description m-0"><?php echo $cherry_biz_description; /* WPCS: xss ok. */ ?>
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
                                <svg class="nnc-icon nnc-icon--lg">
                                    <use xlink:href="#nnc-icon-menu"></use>
                                </svg>
                            </button>

                            <?php require get_template_directory() . '/template-parts/side-menu.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->



        <div id="content" class="site-content">