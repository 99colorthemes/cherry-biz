<?php

if (!function_exists('cherry_biz_config')) :

    /**
     * Cherry biz config
     */
    function cherry_biz_config( $key = null ) {
        $configs = array();
        $configs['slider_limit'] = 2;
        $configs['clients_limit'] = 4;
        $configs['services_limit'] = 3;
        $configs['projects_limit'] = 8;
        $configs['testimonials_limit'] = 3;
        $configs['blogs_limit'] = 3;

        if($key) {
            return $configs[$key];
        }

        return $configs;

    }

endif;

if (!function_exists('cherry_biz_map_allowed_tags')) :

    function cherry_biz_map_allowed_tags( $cherry_biz_allowedposttags ) {

        // Here add tags and attributes you want to allow
        $cherry_biz_allowedposttags['iframe']=array(

            'align'        => true,
            'width'        => true,
            'height'       => true,
            'frameborder'  => true,
            'name'         => true,
            'src'          => true,
            'id'           => true,
            'class'        => true,
            'style'        => true,
            'scrolling'    => true,
            'marginwidth'  => true,
            'marginheight' => true,

        );
        return $cherry_biz_allowedposttags;

    }

endif;
