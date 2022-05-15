<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
	<title>
		<?php echo wp_get_document_title(); ?>
	</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div><a href="<?php  echo get_home_url();?>">Главная</a></div>
        <div> <a href='front'>Программа</a></div>
        <div></div>
        <div>Личный кабинет</div>
	</header>