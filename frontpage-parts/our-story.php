<?php

$cherry_biz_our_story_page_id = get_theme_mod('cherry_biz_our_story_page');
$cherry_biz_our_story_title = get_theme_mod('cherry_biz_our_story_title');
$cherry_biz_our_story_checkbox = get_theme_mod('cherry_biz_our_story_checkbox');

if($cherry_biz_our_story_page_id && $cherry_biz_our_story_checkbox) :
    $page = get_post($cherry_biz_our_story_page_id);
?>

<section class="nnc-about nnc-s-padd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="nnc-about__img pr-5">
                    <?php
                        if(has_post_thumbnail($cherry_biz_our_story_page_id)) {
                            the_post_thumbnail($cherry_biz_our_story_page_id);
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="nnc-about__content">
                    <div class="nnc-section text-left pb-3">
                        <h6 class="nnc-section__title"><?php echo esc_html($cherry_biz_our_story_title); ?></h6>
                        <h2 class="nnc-section__subtitle"><?php echo esc_html($page->post_title); ?></h2>
                    </div>
                    <div class="nnc-about__desc">
                        <p><?php echo esc_html(wp_trim_words($page->post_excerpt, cherry_biz_config('story_page_excerpt_limit'))); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>