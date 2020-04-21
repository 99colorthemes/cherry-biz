<?php

$cherry_biz_our_services_title = get_theme_mod('cherry_biz_our_services_title');
$cherry_biz_our_services_sub_title = get_theme_mod('cherry_biz_our_services_sub_title');
$cherry_biz_our_services_checkbox = get_theme_mod('cherry_biz_our_services_checkbox');

if($cherry_biz_our_services_checkbox) :

?>

<section class="nnc-f bg-white nnc-s-padd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-section">
                    <h6 class="nnc-section__title"><?php echo esc_html($cherry_biz_our_services_title); ?></h6>
                    <h2 class="nnc-section__subtitle"><?php echo esc_html($cherry_biz_our_services_sub_title); ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php

            for ($counter = 0; $counter < cherry_biz_config('services_limit'); $counter++) {
                $pageId = get_theme_mod('cherry_biz_our_services_page_'.$counter);

                if($pageId) :
                    $page = get_post($pageId);
            ?>

                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="card nnc-card text-center">
                        <div class="card-body">
                            <div class="nnc-f__icon">
                                <i class="fas fa-<?php echo esc_attr(get_theme_mod('cherry_biz_our_services_icon_'.$counter)); ?>"></i>
                            </div>
                            <h4 class="nnc-f__title">
                                <a href="<?php echo esc_url($page->guid); ?>" class="">
                                    <?php echo esc_html($page->post_title); ?>
                                </a>
                            </h4>
                            <div class="nnc-f__content"><p><?php echo esc_html(wp_trim_words($page->post_excerpt, cherry_biz_config('services_page_excerpt_limit'))); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            } ?>

        </div>
    </div>
</section>
<?php endif; ?>