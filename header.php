<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="">
<?php wp_head(); ?>
</head>
<body <?php body_class('well-land'); ?>>

<header>
  <?php if ( wp_is_mobile() ) : ?>
    <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
		  <a href="<?php echo site_url(); ?>"><h1 style="display: inline-block; width: 80%; font-size: 18px; text-align: center;">ウェルランド～さくら～</h1></a>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <?php wp_nav_menu( array('menu' => 'gMenu' )); ?>
      </div>
    </div>
  <?php endif; ?>
</header>
