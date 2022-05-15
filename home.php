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
	<p class="h_text">Road to QA with jedi Sergei</p>
    <div class="middle">
	<?php
		$myposts = get_posts(array('category_name' => 'front'));

		foreach( $myposts as $post ){
            setup_postdata( $post );
				echo '<div class="front">'.get_the_content().'</div>';
				echo "<div class='button'><a href='front'><p>Начать</p></a> </div>";

					}
					
	
		?>
	</div>


	<?php wp_footer(); ?>
</body>

</html>