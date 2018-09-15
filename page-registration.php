<?php get_header(); ?>
<div class="section page-header"> 
  <div class="container">
        <div class="row">
          <h1><span class="logo">会員仮登録</span><!-- <span class="category">About Us</span> --></h1>
        </div>
  </div>
</div>

<div class="container">


<section class="content module">

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>

  <?php endwhile; ?>
<?php endif; ?>

</section>

<?php get_footer(); ?>
