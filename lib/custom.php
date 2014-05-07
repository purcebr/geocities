<?php
/**
 * Custom functions
 */

register_nav_menu( 'top-left', __( 'Top Left', 'geocities' ) );
register_nav_menu( 'top-right', __( 'Top Right', 'geocities' ) );
register_nav_menu( 'primary-nav', __( 'Primary Nav', 'geocities' ) );
register_nav_menu( 'footer-nav', __( 'Footer Nav', 'geocities' ) );

if ( function_exists('register_sidebar' )) {
	function widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Primary Sidebar', 'geocities' ),
			'id'            => 'sidebar-primary',
			'before_widget' => '<div class="panel radius">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="alt">',
			'after_title'   => '</h6>',
		) );
	}
}