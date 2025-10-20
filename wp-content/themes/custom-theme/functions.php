<?php
add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'nav_menu' => 'Меню'
    ) );

});
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    if( in_array('menu-item', $classes) ){
        $classes[] = 'nav-item ';
    }
    if( in_array('menu-item', $classes) ){
        $classes[] = 'nav-item ';
    }
    return $classes;
}
function add_specific_menu_location_atts( $atts, $item, $args ) {
        $atts['class'] = 'nav-link';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

function top_menu_mobile( $theme_location ) {
if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
$menu = get_term( $locations[$theme_location], 'nav_menu' );
$menu_items = wp_get_nav_menu_items($menu->term_id);

$menu_list = '<ul class="js-menu">' ."\n";

    $count = 0;
    $submenu = false;
    $count_top=0;
    $ico = get_custom_logo(1);
    echo $ico;
    foreach( $menu_items as $menu_item ) {

    $link = $menu_item->url;
    $title = $menu_item->title;
    $cl =  $menu_item->classes;
    if ( !$menu_item->menu_item_parent ) {
    $parent_id = $menu_item->ID;

    $menu_list .= '<li class="'.$cl[0].'">' ."\n";

        $menu_list .= '<a href="'.$link.'" >';

            //$menu_list .='<div class="icon-wrap"><i class="icon '.$ico.'"></i></div>';
            $menu_list .= $title.'</a>' ."\n";
        $count_top++;
        }

        if ( $parent_id == $menu_item->menu_item_parent ) {

        if ( !$submenu ) {
        $submenu = true;
        $menu_list .= '<ul>' ."\n";
            }

            $menu_list .= '<li>' ."\n";
                $menu_list .= '<a href="'.$link.'" class="">'.$title.'</a>' ."\n";
                $menu_list .= '</li>' ."\n";


            if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
            $menu_list .= '</ul>' ."\n";
        $submenu = false;
        }

        }

        if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) {
        $menu_list .= '</li>' ."\n";
    $submenu = false;
    }

    $count++;
    }

    $menu_list .= '</ul>' ."\n";

} else {
$menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
}
echo $menu_list;
}

    /**
* ACF Options Page
*
*/
function ea_acf_options_page() {
if ( function_exists( 'acf_add_options_page' ) ) {
acf_add_options_page( array(
'title'      => 'Site Options',
'capability' => 'manage_options',
) );
}
}
add_action( 'init', 'ea_acf_options_page' );

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);

    return $content;
});
// function resize_image($imgUrl, $width, $height, $imgName=false) {
//     if(!$imgUrl)
//         $imgUrl = get_stylesheet_directory().'/noimage.jpg';
//     $domain = parse_url(site_url());
//     $domain = $domain['host'];
//     $path = parse_url($imgUrl);
//     $path = str_replace(basename($path['path']),'',$path['path']);
//     $pathParts = pathinfo($imgUrl);
//     $imgPath = "/wp-content/cache/supercache/$domain/resized_images".$path;
//     $resizedFilename = $pathParts['filename'].'-'.$width.'x'.$height.'.'.$pathParts['extension'];
//     $filename = ABSPATH.$imgPath.$resizedFilename;
//     if (!file_exists($filename)) {
//         $image = wp_get_image_editor($imgUrl);
//         if (!is_wp_error($image)) {
//             if (!file_exists(ABSPATH.$imgPath))
//                 mkdir(ABSPATH.$imgPath, 0777, true);
//             $image->resize($width, $height, true);
//             // $image->set_quality(80);
//             if (empty($imgName))
//                 $imgName = $pathParts['filename'];
//             $filename = $image->generate_filename(NULL, ABSPATH.$imgPath, NULL);
//             $image->save($filename);
//             $newImgName = basename($filename);
//             return get_site_url().$imgPath.$newImgName;
//         } else
//             return "Ошибка при генерации изображения";
//     } else
//         return  get_site_url().$imgPath.$resizedFilename;
// }
?>
