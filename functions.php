<?php


function theme_scripts() {
   wp_enqueue_script( 'theme-main-js', get_stylesheet_directory_uri().'/dist/main.js');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function company_customlogo() {
        add_theme_support( 'custom-logo', array(
             'width'       => 2000,
      'height'      => 1800,
        ) );
}
add_action( 'after_setup_theme', 'company_customlogo', 11 );



function cf($key,$group = null){
  if($group){
    return isset(get_field($group)[$key]) ? get_field($group)[$key] : '';
  } else{
    return get_field($key);
  }
}



add_action( 'widgets_init', 'theme_slug_widgets_initt' );
add_filter('use_block_editor_for_post', '__return_false');
function theme_slug_widgets_initt() {
    register_sidebar( array(
        'name' => __( 'Footer-logo', 'theme-slug' ),
        'id' => 'footer-sidedar-5',
        'description' => __( 'Footer logo block', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="footer-logo-img widget %2$s">',
    	'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ) );
    register_sidebar( array(
        'name' => __( 'Footer-Information', 'theme-slug' ),
        'id' => 'footer-sidedar-6',
        'description' => __( 'Footer Info', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ) ); 
}

 function news($args) {
    $order = isset($args['order']) ? $args['order'] : 'DESC';
    $total = isset($args['total']) ? $args['total'] : 4;
  $args = array(
      'post_type'      => 'recentnews',
      'post_status'    => 'publish',
      'posts_per_page' => $total,
      'order'          => $order
    );
    $wpb_all_query = new WP_Query( $args );
    if ( $wpb_all_query->have_posts() ) {
        ob_start();
      $html='<div class="recent_news__listing_inner">';
      while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
      $html.='<div class="recent_news__listing_item">
				<div class="recent_news_image">
					<a href="'.get_permalink().'"><img src="'.get_the_post_thumbnail_url(get_the_ID(),'large').'" alt="'.get_the_title().'"></a>
				</div>
				<div class="recent_news_content">
					<p class="recent_news_date">
						<span>'.get_the_date('d M Y').'</span>
					</p>
            		<h5><a href="'.get_permalink().'">'.get_the_title().'</a></h5>
            		<p  class="featured-para">'.substr(strip_tags(get_the_content()),0, 150).'</p>
				</div>
			</div>';
      endwhile;
      wp_reset_postdata(); 
      $html.='</div>';
      echo $html;
      return ob_get_clean();
    }
}
add_shortcode('NEWS','news');
