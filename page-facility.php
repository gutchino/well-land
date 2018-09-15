<?php get_header(); ?>
<div class="section page-header"> 
  <div class="container">
        <div class="row">
          <h1><span class="logo">施設紹介</span><!-- <span class="category">About Us</span> --></h1>
        </div>
  </div>
</div>

<div class="container">
<section>
   <h2 class="tit-col mb-4"><i class="fas fa-file-medical"></i>ウェルランドについて</h2>
</section> 

<section class="content module conbg">

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>

    <table class="table table-bordered table-mb-block">
      <tbody>
        <tr>
          <th>施設名</th>
          <td><?php the_field('facility_name'); ?></td>
        </tr>
        <tr>
          <th>住所</th>
          <td><?php the_field('facility_address'); ?></td>
        </tr>
        <tr>
          <th>営業時間</th>
          <td><?php the_field('business_hour'); ?></td>
        </tr>
        <tr>
          <th>定休日</th>
          <td><?php the_field('holidays'); ?></td>
        </tr>
        <tr>
          <th>スタッフ</th>
          <td><?php the_field('staff'); ?></td>
        </tr>
      </tbody>
    </table>

  <?php endwhile; ?>
<?php endif; ?>

</section>

<?php get_footer(); ?>
