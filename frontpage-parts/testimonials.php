<?php
$cherry_biz_testimonials_title = get_theme_mod('cherry_biz_testimonials_title');
$cherry_biz_testimonials_sub_title = get_theme_mod('cherry_biz_testimonials_sub_title');
$cherry_biz_testimonials_category = get_theme_mod('cherry_biz_testimonials_category');

if($cherry_biz_testimonials_category) :

    $cherry_biz_testimonials = new WP_Query(array(
        'posts_per_page' =>  cherry_biz_config('testimonials_limit'),
        'post_type'      =>  'post',
        'category__in'   =>  $cherry_biz_testimonials_category
    ));

?>
    <section class="nnc-testimonial nnc-s-padd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-section">
                    <h6 class="nnc-section__title"><?php echo esc_html($cherry_biz_testimonials_title); ?></h6>
                    <h2 class="nnc-section__subtitle"><?php echo esc_html($cherry_biz_testimonials_sub_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="swiper-container nnc-testimonial-container">
                    <div class="swiper-wrapper">
                    <?php
                        if($cherry_biz_testimonials->have_posts()) :
                            while ($cherry_biz_testimonials->have_posts()):$cherry_biz_testimonials->the_post();
                            $tags = get_the_tags();
                    ?>
                        <div class="swiper-slide">
                            <div class="nnc-testimonial__item">
                                <i class="fas fa-quote-left nnc-icon--xl"></i>
                                <div class="nnc-testimonial__content">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="nn-testomonial__client">
                                    <h5 class="nnc-testimonial__client-name"><?php the_title(); ?></h5>
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
                                </div>
                            </div>
                        </div>
                    <?php
                            endwhile;
                        endif;
                    ?>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>