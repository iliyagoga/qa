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
	<div class="middlee">
	<?php
		// циклы вывода записей
		// если записи найдены
		if ( have_posts() ){
			while ( have_posts() ){
				the_post();
				 if( check_sql(get_permalink())!='sql'){
					echo "<div class='post'>";
					echo '<h3 class="single">'.get_the_title() .'</h3>';
					echo '<p class="first_title">'.first_title(get_the_excerpt())."</p>";
					echo "</div> ";
					echo "<div class='post post_body'>";
					echo the_content();
					echo "</div> ";
					 }
				 else{
					echo the_content();
					echo '<input class="checked">';
					
					add_myscripts();
					jquery_start();
					add_form();
					print_r(request(get_the_excerpt()));
			
				
				 }
		
			}
		}
		// елси записей не найдено
		else{
			echo ' <p>Записей нет...</p>';
		}
		?>
	</div>



	<?php wp_footer(); ?>
</body>

</html>