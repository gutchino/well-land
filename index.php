<?php get_header(); ?>
<div class="container">
<section class="content module">

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>  
	<?php endwhile; ?>
<?php endif; ?>

</section>

<?php get_footer(); ?>
