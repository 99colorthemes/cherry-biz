<?php
/**
 * The main template file
 * Template Name: Contact Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                            <div class="nnc-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3087.7357898612604!2d-76.6141256845229!3d39.29424203105896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c8049bdd310607%3A0xa0607fe67449fc83!2s330%20Guilford%20Ave%2C%20Baltimore%2C%20MD%2021202%2C%20USA!5e0!3m2!1sen!2snp!4v1587036761069!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            <div class="nnc-contact">
                                <h2>Contact Us</h2>
                                <p class="text-muted">If you need our help or have any questions or difficulties, please do not hesitate to contact us.</p>
                                <div role="form" class="wpcf7" id="wpcf7-f12-p9-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="/contact-us/#wpcf7-f12-p9-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="12">
                                            <input type="hidden" name="_wpcf7_version" value="5.1.6">
                                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f12-p9-o1">
                                            <input type="hidden" name="_wpcf7_container_post" value="9">
                                        </div>
                                        <p><label> Your Name (required)<br>
                                                <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
                                        <p><label> Your Email (required)<br>
                                                <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
                                        <p><label> Subject<br>
                                                <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
                                        <p><label> Your Message<br>
                                                <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
                                        <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div></form>
                                </div>
                            </div>
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
