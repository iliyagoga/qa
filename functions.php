<?php
function first_title($post){
 
    $new_post='';
    if ( strpos($post,'?')){$new_post=explode('?', $post); }
    elseif ( strpos($post,'.')){$new_post=explode('.', $post);}
    elseif ( strpos($post,'!')){$new_post=explode('!', $post);}
    else{return $post;}
    return $new_post[0];
}
function ord_custom_query( $query ) {
        
    if( $query->is_main_query() && ! is_admin()  ) {// условие

        $query->set( 'orderby', 'date' );
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'ord_custom_query' );
function check_sql($link){
    $link=explode('/', $link);
    $link=$link[3];
    $link=explode('_',$link);
    return($link[0]);

}

add_action( 'init', 'register_myscripts' );


// регистрируем скрипт
function register_myscripts(){

	$url = get_template_directory_uri() .'/color.js';

	wp_register_script( 'color', $url );
}

// подключаем скрипты (ставим в очередь на вывод в html)
function add_myscripts() {

	wp_enqueue_script( 'color' );
}

add_action( 'init', 'register_myscripts_2' );
function register_myscripts_2(){

	$url = get_template_directory_uri() .'/form.js';

	wp_register_script( 'form', $url );
}


function add_form() {

	wp_enqueue_script( 'form' );
}

add_action( 'init', 'jquery_post' );
function jquery_post(){

	$url = get_template_directory_uri() .'/jquery_post.js';

	wp_register_script( 'jquery_post', $url );
}


function jquery_start() {

	wp_enqueue_script( 'jquery_post' );
}




add_shortcode( 'baztag', 'baztag_func' );
function baztag_func( $atts, $content ) {
	 return "content = $content";
}


function request($id){
    $url = 'http://qa//wp-content/themes/qa/data.php';
    $params = array(
        'bar' => get_the_ID()
    );
    $params = urlencode_deep( $params );
    $url = add_query_arg( $params, $url );
    $response = wp_remote_get( $url );
    $body = wp_remote_retrieve_body( $response );
    echo $body;
	

}
?>