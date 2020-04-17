<?php
$cherry_biz_projects_title = get_theme_mod('cherry_biz_projects_title');
$cherry_biz_projects_sub_title = get_theme_mod('cherry_biz_projects_sub_title');
$cherry_biz_projects_category = get_theme_mod('cherry_biz_projects_category');



if($cherry_biz_projects_category) :

    $cherry_biz_projects = new WP_Query(array(
        'posts_per_page' =>  cherry_biz_config('projects_limit'),
        'post_type'      =>  'post',
        'category__in'   =>  $cherry_biz_projects_category
    ));

?>
    <section class="nnc-product bg-white nnc-s-padd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-section">
                    <h6 class="nnc-section__title"><?php echo esc_html($cherry_biz_projects_title); ?></h6>
                    <h2 class="nnc-section__subtitle"><?php echo esc_html($cherry_biz_projects_sub_title); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="nnc-product__block pl-3 pr-3">
        <div class="container-fluid">
            <div class="row">
                <?php
                if($cherry_biz_projects->have_posts()) :
                    while ($cherry_biz_projects->have_posts()):$cherry_biz_projects->the_post();
                    $tags = get_the_tags();
                ?>
                <div class="col-md-3">
                    <div class="nnc-product__item">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="nnc-product__img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="nnc-product__content">
                            <h5><?php the_title(); ?></h5>
                            <span>
                                <?php
                                    $output = '';
                                    foreach ($tags as $key => $tag) {
                                        $output .= $tag->name;

                                        if(count($tag) == ($key + 1)) {
                                            $output .= ' / ';
                                        }
                                    }

                                    echo $output;
                                ?>
                            </span>
                            <a href="<?php the_permalink(); ?>" class="nnc-product__link"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>


            </div>
        </div>
    </div>
</section>
<?php endif; ?>