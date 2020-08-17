<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="le-edge">  
		<title>Primeira Pagina</title>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_head(); ?>

	</head>
	<body>
		<div class="container">
			<div class ="row">
              <div class="col-3 logo">

              <a href="<?= site_url(); ?>">
              	<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png ?>" class= "img-fluid">
              </a>


	           </div>
	           <div class="col-9 titulo">

	           		<h1><?php bloginfo("name"); ?></h1>
                       <p><?php bloginfo("description");  ?>
	           	<div>
			</div>
 

