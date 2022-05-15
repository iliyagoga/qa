<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
	<title>
		<?php echo wp_get_document_title(); ?>
	</title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

	<?php wp_head(); ?>
</head>

<body>
    <?php get_header(); ?>
	<p class="h_text">Программа обучения</p>
	<div class="middle">
	<?php
	if (is_page('front')){
		$myposts = get_posts();

		foreach( $myposts as $post ){
            setup_postdata( $post );
			echo '<a  id="post" href='.get_permalink().'>';
			echo "<div class='post'>";
			echo '<h3 class="title">'.get_the_title() .'</h3>';
			echo '<p class="first_title">'.first_title(get_the_content())."</p>";
		
			echo "</div> </a>";
					}
				}
	if (is_page('sql')){
		$myposts = get_posts(array('category_name'=> 'sql'));
		foreach( $myposts as $post ){
            setup_postdata( $post );
			echo '<a  id="post" href='.get_permalink().'>';
			echo "<div class='post'>";
			echo '<h3 class="title">'.get_the_title() .'</h3>';
			echo '<p class="first_title">'.first_title(get_the_content())."</p>";
		
			echo "</div> </a>";
					}
				}
		?>
	</div>



	<?php wp_footer(); ?>
</body>

</html>