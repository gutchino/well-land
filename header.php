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

<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
<link rel="shortcut icon" href="">
<?php wp_head(); ?>
</head>
<body <?php body_class('well-land'); ?>>

<header>
  <?php if ( wp_is_mobile() ) : ?>
    <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <a href="<?php echo home_url(); ?>"><h1 style="display: inline-block; width: 80%; font-size: 18px; text-align: center;"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_well-land_180829_7.png" alt="ウェルランド～さくら～" height="28px" /></h1></a>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <?php wp_nav_menu( array('menu' => 'gMenu' )); ?>
      </div>
    </div>
  <?php else : ?>
    <div class="container">
      <a href="<?php echo home_url(); ?>"><h1 style="display: inline-block; width: 80%; font-size: 18px; text-align: left;"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_well-land_180829_7.png" alt="ウェルランド～さくら～" height="28px" /></h1></a>
    </div>
  <?php endif; ?>
</header>

<section id="front-slideshow" class="full-width">
  <?php if ( has_post_thumbnail() ) {
    $thumbnail_id = get_post_thumbnail_id($post_object->ID); // アタッチメントIDの取得
    $image = wp_get_attachment_image_src( $thumbnail_id, 'full' ); // full サイズのアイキャッチの情報を取得
    $src = $image[0];    // URL
    $width = $image[1];  // 横幅
    $height = $image[2]; // 高さ
    echo '<img src="'.$src.'" alt="" />';
    // the_post_thumbnail();
  } else {
    // echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/home_main.jpg" />';
  } ?>
</section>

<!-- <div class="container"> -->