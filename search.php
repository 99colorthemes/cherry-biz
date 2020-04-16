<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cherry-biz
 */

get_header();
?>
    <div class="nnc-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div id="primary" class="content-area nnc-content-area">
                        <main id="main" class="site-main">

                        <?php if ( have_posts() ) : ?>

                            <header class="page-header">
                                <h1 class="page-title mt-0">
                                    <?php
                                    /* translators: %s: search query. */
                                    printf( esc_html__( 'Search Results for: %s', 'cherry-biz' ), '<span>' . get_search_query() . '</span>' );
                                    ?>
                                </h1>
                            </header><!-- .page-header -->

                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /**
                                 * Run the loop for the search to output the results.
                                 * If you want to overload this in a child theme then include a file
                                 * called content-search.php and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', 'search' );

                            endwhile;

                            the_posts_navigation();

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
