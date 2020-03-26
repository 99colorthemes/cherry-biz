<?php

/**
 * The main template file
 * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cherry-biz
 */

$cherry_biz_sidebar = get_theme_mod('cherry_biz_homepage_sidebar', 0);

get_header();
?>

<section class="nnc-hero">
    <div class="swiper-container nnc-hero-slider-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="nnc-banner d-flex align-items-center" style="background-image: url('http://localhost:8888/cherry-biz/wp-content/uploads/2020/03/StockSnap_ANRQEVKQFG-scaled.jpg');">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8">
                                <div class="nnc-banner__info">
                                    <h5 class="nnc-banner__title">Business Consultant</h5>
                                    <h2  class="nnc-banner__subtitle">Manage and Grow Your Business</span></h2>
                                    <div class="nnc-banner__btn">
                                        <a href="" class="btn btn--primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="nnc-banner d-flex align-items-center" style="background-image: url('http://localhost:8888/cherry-biz/wp-content/uploads/2020/03/StockSnap_ZU3GBGBBQP-scaled.jpg');">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8">
                                <div class="nnc-banner__info">
                                    <h5 class="nnc-banner__title">Business Consultant</h5>
                                    <h2  class="nnc-banner__subtitle">Manage and Grow Your Business</span></h2>
                                    <div class="nnc-banner__btn">
                                        <a href="" class="btn btn--primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination-hero"></div>
    </div>
</section>

<section class="nnc-oc bg-white nnc-s-padd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-oc__block">
                    <div class="nnc-oc__item">
                        <img src="http://localhost:8888/cherry-biz/wp-content/uploads/2020/03/Screen-Shot-2020-03-15-at-7.04.09-PM.png" alt="Client Logo">
                    </div>
                    <div class="nnc-oc__item">
                        <img src="http://localhost:8888/cherry-biz/wp-content/uploads/2020/03/Screen-Shot-2020-03-15-at-7.06.44-PM.png" alt="Client Logo">
                    </div>
                    <div class="nnc-oc__item">
                        <img src="http://localhost:8888/cherry-biz/wp-content/uploads/2020/03/Screen-Shot-2020-03-15-at-7.24.16-PM.png" alt="Client Logo">
                    </div>
                    <div class="nnc-oc__item">
                        <img src="http://localhost:8888/cherry-biz/wp-content/uploads/2020/03/Screen-Shot-2020-03-15-at-7.24.00-PM.png" alt="Client Logo">
                    </div>
                    <div class="nnc-oc__item">
                        <img src="http://localhost:8888/cherry-biz/wp-content/uploads/2020/03/Screen-Shot-2020-03-15-at-7.22.43-PM.png" alt="Client Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nnc-f bg-white nnc-s-padd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-section">
                    <h6 class="nnc-section__title">Our Services</h6>
                    <h2 class="nnc-section__subtitle">Web, Mobile App And Custom Software</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card nnc-card text-center">
                    <div class="card-body">
                        <div class="nnc-f__icon">
                            <i class="fas fa-universal-access"></i>
                        </div>
                        <h4 class="nnc-f__title"><a href="" class="">Strategies & Planning</a></h4>
                        <div class="nnc-f__content"><p>Integer auctor massa at erat vehicula, id dapibus urna lacinia. Proin luctus eget
                            lorem eu ullamcorper. Morbi gravida rhoncus egestatra</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card nnc-card text-center mt-4 mt-md-0">
                    <div class="card-body">
                        <div class="nnc-f__icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h4 class="nnc-f__title"><a href="" class="">Highly Customizable</a></h4>
                        <div class="nnc-f__content"><p>Integer auctor massa at erat vehicula, id dapibus urna lacinia. Proin luctus eget
                            lorem eu ullamcorper. Morbi gravida rhoncus egestInteger auctor massa at eratatra</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 d-flex">
                <div class="card nnc-card text-center mt-4 mt-lg-0">
                    <div class="card-body">
                        <div class="nnc-f__icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h4 class="nnc-f__title"><a href="" class="">Weekly Support</a></h4>
                        <div class="nnc-f__content"><p>Integer auctor massa at erat vehicula, id dapibus urna lacinia. Proin luctus eget
                            lorem eu ullamcorper. Morbi gravida rhInteger auctor massa at eratInteger auctor massa at
                            eratInteger auctor massa at eratoncus egestatra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nnc-about nnc-s-padd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="nnc-about__img pr-5">
                    <img src="http://localhost:8888/cherry-biz/wp-content/uploads/2020/03/about-us.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="nnc-about__content">
                    <div class="nnc-section text-left pb-3">
                        <h6 class="nnc-section__title">Our Story</h6>
                        <h2 class="nnc-section__subtitle">Best Online Agency 2020</h2>
                    </div>
                    <div class="nnc-about__desc">
                        <p>Integer auctor massa at erat vehicula, id dapibus urna lacinia. Proin luctus eget
                                lorem eu ullamcorper. Morbi graverat vehicula, id dapibus urna lacinia. Proin luctus eget
                                lorem eu ullamcorper. Morbi graverat vehicula, id dapibus urna lacinia. Proin luctus eget
                                lorem eu ullamcorper. Morbi graverat vehicula, id dapibus urna lacinia. Proin luctus eget
                                lorem eu ullamcorper. Morbi graverat vehicula, id dapibus urna lacinia. Proin luctus eget
                                lorem eu ullamcorper. Morbi gravida rhoncus egestatra</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nnc-product bg-white nnc-s-padd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-section">
                    <h6 class="nnc-section__title">Our Projects</h6>
                    <h2 class="nnc-section__subtitle">Best of Our Works</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="nnc-product__block pl-3 pr-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="nnc-product__item">
                        <div class="nnc-product__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p.png" alt="">
                        </div>
                        <div class="nnc-product__content">
                            <h5>Innovative Interfaces</h5>
                            <span>Tech / Ideas</span>
                            <a href="" class="nnc-product__link"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>   
                <div class="col-md-3">
                    <div class="nnc-product__item">
                        <div class="nnc-product__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p1.png" alt="">
                        </div>
                        <div class="nnc-product__content">
                            <h5>Innovative Interfaces</h5>
                            <span>Tech / Ideas</span>
                            <a href="" class="nnc-product__link"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>   
                <div class="col-md-3">
                    <div class="nnc-product__item">
                        <div class="nnc-product__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p3.png" alt="">
                        </div>
                        <div class="nnc-product__content">
                            <h5>Innovative Interfaces</h5>
                            <span>Tech / Ideas</span>
                            <a href="" class="nnc-product__link"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>   
                <div class="col-md-3">
                    <div class="nnc-product__item">
                        <div class="nnc-product__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p2.png" alt="">
                        </div>
                        <div class="nnc-product__content">
                            <h5>Innovative Interfaces</h5>
                            <span>Tech / Ideas</span>
                            <a href="" class="nnc-product__link"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>       
                <div class="col-md-3">
                    <div class="nnc-product__item">
                        <div class="nnc-product__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p1.png" alt="">
                        </div>
                        <div class="nnc-product__content">
                            <h5>Innovative Interfaces</h5>
                            <span>Tech / Ideas</span>
                            <a href="" class="nnc-product__link"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>   
                <div class="col-md-3">
                    <div class="nnc-product__item">
                        <div class="nnc-product__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p3.png" alt="">
                        </div>
                        <div class="nnc-product__content">
                            <h5>Innovative Interfaces</h5>
                            <span>Tech / Ideas</span>
                            <a href="" class="nnc-product__link"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>   
                <div class="col-md-3">
                    <div class="nnc-product__item">
                        <div class="nnc-product__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p2.png" alt="">
                        </div>
                        <div class="nnc-product__content">
                            <h5>Innovative Interfaces</h5>
                            <span>Tech / Ideas</span>
                            <a href="" class="nnc-product__link"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>      
                <div class="col-md-3">
                    <div class="nnc-product__item">
                        <div class="nnc-product__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p2.png" alt="">
                        </div>
                        <div class="nnc-product__content">
                            <h5>Innovative Interfaces</h5>
                            <span>Tech / Ideas</span>
                            <a href="" class="nnc-product__link"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>


<section class="nnc-testimonial nnc-s-padd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-section">
                    <h6 class="nnc-section__title">Testimonials</h6>
                    <h2 class="nnc-section__subtitle">What Our Clients Say</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="swiper-container nnc-testimonial-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="nnc-testimonial__item">
                                <i class="fas fa-quote-left nnc-icon--xl"></i>
                                <div class="nnc-testimonial__content">
                                    <p>
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                                        Cras dapibus. Vivamus elementum sempeNullam dictum felis eu
                                        pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                                        elementum semper nisi. Aenea
                                    </p>
                                </div>
                                <div class="nn-testomonial__client">
                                    <h5 class="nnc-testimonial__client-name">Joseph Inspire</h5>
                                    <span>Managing Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nnc-testimonial__item">
                                <i class="fas fa-quote-left nnc-icon--xl"></i>
                                <div class="nnc-testimonial__content">
                                    <p>
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                                        Cras dapibus. Vivamus elementum sempeNullam dictum felis eu
                                        pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                                        elementum semper nisi. Aenea
                                    </p>
                                </div>
                                <div class="nn-testomonial__client">
                                    <h5 class="nnc-testimonial__client-name">Joseph Inspire</h5>
                                    <span>Managing Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nnc-testimonial__item">
                                <i class="fas fa-quote-left nnc-icon--xl"></i>
                                <div class="nnc-testimonial__content">
                                    <p>
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                                        Cras dapibus. Vivamus elementum sempeNullam dictum felis eu
                                        pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                                        elementum semper nisi. Aenea
                                    </p>
                                </div>
                                <div class="nn-testomonial__client">
                                    <h5 class="nnc-testimonial__client-name">Joseph Inspire</h5>
                                    <span>Managing Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nnc-blog bg-white nnc-s-padd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-section">
                    <h6 class="nnc-section__title">Our Blog</h6>
                    <h2 class="nnc-section__subtitle">Our Latest Insights</h2>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card nnc-card o-h">
                    <div class="nnc-blog__img">
                        <img src="http://template.bidheegroup.com/images/blog.jpg" alt="blog image">
                    </div>
                    <div class="card-body">
                        <h5 class="nnc-blog__title"><a href="" class="">In-Depth Industry Ecosystem Analysis</a></h5>
                        <div class="nnc-blog__date">
                            <span class="text-muted">John Pieerie</span>
                            <i class="fas fa-circle"></i>
                            <span class="text-muted"><a href="">2 Comments</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card nnc-card o-h">
                    <div class="nnc-blog__img">
                        <img src="http://template.bidheegroup.com/images/blog.jpg" alt="blog image">
                    </div>
                    <div class="card-body">
                        <h5 class="nnc-blog__title"><a href="" class="">In-Depth Industry Ecosystem Analysis</a></h5>
                        <div class="nnc-blog__date">
                            <span class="text-muted">John Pieerie</span>
                            <i class="fas fa-circle"></i>
                            <span class="text-muted"><a href="">2 Comments</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card nnc-card o-h">
                    <div class="nnc-blog__img">
                        <img src="http://template.bidheegroup.com/images/blog.jpg" alt="blog image">
                    </div>
                    <div class="card-body">
                        <h5 class="nnc-blog__title"><a href="" class="">In-Depth Industry Ecosystem Analysis</a></h5>
                        <div class="nnc-blog__date">
                            <span class="text-muted">John Pieerie</span>
                            <i class="fas fa-circle"></i>
                            <span class="text-muted"><a href="">2 Comments</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
