<?php get_header(); ?>

<section>
   <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ttlbn_about.jpg" alt="お問い合わせ" class="full-width" /></h1>
</section>

<section class="content module">

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php endif; ?>

</section>

<?php get_footer(); ?>
