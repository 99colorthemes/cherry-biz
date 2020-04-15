<section class="nnc-hero">
    <div class="swiper-container nnc-hero-slider-container">
        <div class="swiper-wrapper">
            <?php
                for ($counter = 0; $counter < cherry_biz_config('slider_limit'); $counter++) {
                $page = get_post(get_theme_mod('cherry_biz_slider_page_'.$counter));
             //   print_r($page);
              //  die;
            ?>
                <div class="swiper-slide">
                    <div class="nnc-banner d-flex align-items-center" style="background-image: url('http://localhost:8888/cherry-biz/wp-content/uploads/2020/03/StockSnap_ANRQEVKQFG-scaled.jpg');">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8">
                                    <div class="nnc-banner__info">
                                        <h5 class="nnc-banner__title"><?php echo get_theme_mod('cherry_biz_slider_title_'.$counter); ?></h5>
                                        <h2  class="nnc-banner__subtitle"><?php echo $page->post_title; ?></span></h2>
                                        <div class="nnc-banner__btn">
                                            <a href="<?php echo $page->guid; ?>" class="btn btn--primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>