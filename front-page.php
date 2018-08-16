<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

<section id="front-slideshow" class="full-width">
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} else {
	echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/home_main.jpg" />';
} ?>
</section>

<section class="module">
	<p><?php the_field('home_vision'); ?></p>
</section>

<section class="module">
	<a href="<?php echo site_url(); ?>/registration/"><button type="button" class="btn btn-pink" id="">会員仮登録</button></a>
</section>

<section>
  <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ttlbn_about.jpg" alt="ウェルランドについて" class="full-width" /></h2>
  <div class="module">
    <p><?php the_field('home_about'); ?></p>
  </div>
</section>

<section>
  <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ttlbn_about.jpg" alt="サービスのしくみ" class="full-width" /></h2>
  <div class="module">
    <p><?php the_field('home_service'); ?></p>
  </div>
</section>

<section>
   <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ttlbn_about.jpg" alt="３つの特徴" class="full-width" /></h2>
   <div class="module">
     <p><?php the_field('home_features'); ?></p>
  </div>
</section>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
