<?php
// replace WordPress Howdy in WordPress 3.3
function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Hi,', '', $my_account->title );            
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );


#Theme options
add_theme_support("menus");
add_theme_support("title-tag");
//add_theme_support("custom-background");
add_theme_support( 'post-thumbnails' ); 


if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
}


#Menus
register_nav_menus(array("main-menu" => "Main menu location"));

#Sidebar

function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'testiteema2' ),
        'id'            => 'sidebar_1',
        'before_widget' => '<aside class="sidebar">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Secondary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

//Javascrpt

