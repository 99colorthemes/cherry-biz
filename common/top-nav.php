<?php

$cherry_biz_top_bar_text_1 = get_theme_mod('cherry_biz_top_bar_text_1');
$cherry_biz_top_bar_text_2 = get_theme_mod('cherry_biz_top_bar_text_2');

$cherry_biz_search_checkbox = get_theme_mod('cherry_biz_search_checkbox');
$cherry_biz_social_link_checkbox = get_theme_mod('cherry_biz_social_link_checkbox');

$cherry_biz_facebook_link = get_theme_mod('cherry_biz_facebook_link', '');
$cherry_biz_twitter_link = get_theme_mod('cherry_biz_twitter_link', '');
$cherry_biz_instagram_link = get_theme_mod('cherry_biz_instagram_link', '');
$cherry_biz_youtube_link = get_theme_mod('cherry_biz_youtube_link', '');

?>

<div class="nnc-topbar">
    <div class="nnc-container">
        <div class="d-flex align-items-center justify-content-center justify-content-md-between flex-column flex-md-row">
            <div class="nnc-topbar__info">
                <ul class="list-inline m-0">
                    <?php if($cherry_biz_top_bar_text_1) : ?>
                        <li class="list-inline-item pr-3"><?php echo esc_html($cherry_biz_top_bar_text_1); ?></li>
                    <?php endif; ?>
                    <?php if($cherry_biz_top_bar_text_2) : ?>
                        <li class="list-inline-item"><?php echo esc_html($cherry_biz_top_bar_text_2); ?></li>
                    <?php endif; ?>
                </ul>
            </div>


            <?php if($cherry_biz_search_checkbox || $cherry_biz_social_link_checkbox) : ?>
                <div class="nnc-top-bar__info d-flex justify-content-end">
                    <?php if($cherry_biz_social_link_checkbox) : ?>
                        <ul class="list-inline m-0">
                            <?php if ($cherry_biz_facebook_link) : ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url($cherry_biz_facebook_link); ?>" title="facebook"><i class="fab fa-facebook text-white"></i></a>
                                </li>
                            <?php endif; ?>

                            <?php if ($cherry_biz_instagram_link) : ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url($cherry_biz_instagram_link); ?>" title="instagram"><i class="fab fa-instagram text-white"></i></a>
                                </li>
                            <?php endif; ?>

                            <?php if ($cherry_biz_twitter_link) : ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url($cherry_biz_twitter_link); ?>" title="twitter"><i class="fab fa-twitter text-white"></i></a>
                                </li>
                            <?php endif; ?>

                            <?php if ($cherry_biz_youtube_link) : ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url($cherry_biz_youtube_link); ?>" title="youtube"><i class="fab fa-youtube text-white"></i></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php
                        endif;

                        if($cherry_biz_search_checkbox) :
                    ?>
                        <button id="nnc-search-icon" role="button" class="nnc-search--icon p-0 bg-none">
                            <i class="fas fa-search text-white"></i>
                        </button>
                        <?php endif; ?>
                    </div>
            <?php endif; ?>
        </div>
    </div>
</div>