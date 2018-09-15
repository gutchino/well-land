<?php get_header(); ?>
<div class="container">
<section id="front-slideshow">
</section>

<section class="module">
	<?php the_field('home_vision'); ?>
</section>

<section class="module">
	<button type="button" class="btn btn-pink" id="">ボタン</button>
</section>

<section class="module">
  <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ttlbn_about.jpg" alt="ウェルランドについて" /></h2>
  <?php the_field('home_about'); ?>
</section>

<section class="module">
  <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ttlbn_about.jpg" alt="サービスのしくみ" /></h2>
  <?php the_field('home_service'); ?>
</section>

<section class="module">
   <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ttlbn_about.jpg" alt="特徴" /></h2>
 <?php the_field('home_features'); ?>
</section>

<!-- SCRIPTS -->
<!-- Example: <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<?php wp_footer(); ?>
</body>
</html>
