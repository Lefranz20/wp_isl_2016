
<?php
include 'extensions/Tweeter.php';

register_nav_menus(array(
    'main-menu' => "Menu principal"
));

add_action( 'after_setup_theme', 'pdw_theme_setup' );

function pdw_theme_setup(){
    load_theme_textdomain( 'cms-examen-theme-translate', get_template_directory() . '/languages' );
}

//echo $content;

if(!function_exists('examen_cms_enqueue_styles')){

    function examen_cms_enqueue_styles()
    {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/assets/js/jquery.js', array(), false, true);
        wp_enqueue_script('map_js', get_stylesheet_directory_uri().'/assets/js/map.js', array('jquery'), false, true);
        wp_enqueue_script('collapse_js', get_stylesheet_directory_uri().'/assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js', array('map_js'), false, true);
        wp_enqueue_script('carousel_js', get_stylesheet_directory_uri().'/assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js', array('collapse_js'), false, true);
        wp_enqueue_script('transition_js', get_stylesheet_directory_uri().'/assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js', array('carousel_js'), false, true);
        wp_enqueue_script('dropdown_js', get_stylesheet_directory_uri().'/assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js', array('transition_js'), false, true);
        wp_enqueue_script('tooltip_js', get_stylesheet_directory_uri().'/assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js', array('dropdown_js'), false, true);
        wp_enqueue_script('tab_js', get_stylesheet_directory_uri().'/assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js', array('tooltip_js'), false, true);
        wp_enqueue_script('alert_js', get_stylesheet_directory_uri().'/assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js', array('tab_js'), false, true);
        wp_enqueue_script('jquerycolorboxmin_js', get_stylesheet_directory_uri().'/assets/libraries/colorbox/jquery.colorbox-min.js', array('alert_js'), false, true);
        wp_enqueue_script('jqueryflotmin_js', get_stylesheet_directory_uri().'/assets/libraries/flot/jquery.flot.min.js', array('jquerycolorboxmin_js'), false, true);
        wp_enqueue_script('jqueryflotspline_js', get_stylesheet_directory_uri().'/assets/libraries/flot/jquery.flot.spline.js', array('jqueryflotmin_js'), false, true);
        wp_enqueue_script('bootstrapselectmin_js', get_stylesheet_directory_uri().'/assets/libraries/bootstrap-select/bootstrap-select.min.js', array('jqueryflotspline_js'), false, true);
        wp_enqueue_script('googleapis', 'http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing', array('bootstrapselectmin_js'), false, true);
        wp_enqueue_script('infobox_js', get_stylesheet_directory_uri().'/assets/libraries/jquery-google-map/infobox.js', array('googleapis'), false, true);
        wp_enqueue_script('markerclusterer_js', get_stylesheet_directory_uri().'/assets/libraries/jquery-google-map/markerclusterer.js', array('infobox_js'), false, true);
        wp_enqueue_script('google_map_js', get_stylesheet_directory_uri().'/assets/libraries/jquery-google-map/jquery-google-map.js', array('markerclusterer_js'), false, true);
        wp_enqueue_script('owl_carousel_js', get_stylesheet_directory_uri().'/assets/libraries/owl.carousel/owl.carousel.js', array('google_map_js'), false, true);
        wp_enqueue_script('fileinput_js', get_stylesheet_directory_uri().'/assets/libraries/bootstrap-fileinput/fileinput.min.js', array('owl_carousel_js'), false, true);
        wp_enqueue_script('superlist_js', get_stylesheet_directory_uri().'/assets/js/superlist.js', array('fileinput_js'), false, true);


        wp_enqueue_style('font-awesome',get_stylesheet_directory_uri().'/assets/libraries/font-awesome/css/font-awesome.min.css',array(),false,false);
        wp_enqueue_style('carousel_css',get_stylesheet_directory_uri().'/assets/libraries/owl.carousel/assets/owl.carousel.css');
        wp_enqueue_style('colorbox_css',get_stylesheet_directory_uri().'/assets/libraries/colorbox/example1/colorbox.css');
        wp_enqueue_style('bootstrap_select_css',get_stylesheet_directory_uri().'/assets/libraries/bootstrap-select/bootstrap-select.min.css');

        wp_enqueue_style('file_input_css',get_stylesheet_directory_uri().'/assets/libraries/bootstrap-fileinput/fileinput.min.css');
        wp_enqueue_style('superlist_css',get_stylesheet_directory_uri().'/assets/css/superlist.css');
        wp_enqueue_style('main_css',get_stylesheet_directory_uri().'/css/main.css');
    }

    add_action('wp_enqueue_scripts','examen_cms_enqueue_styles');
}



