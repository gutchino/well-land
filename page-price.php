<?php get_header(); ?>
<div class="section page-header"> 
  <div class="container">
        <div class="row">
          <h1><span class="logo">料金体系</span><!-- <span class="category">About Us</span> --></h1>
        </div>
  </div>
</div>
<div class="container">
<section>
     <h2 class="tit-col mb-4"><i class="fas fa-dollar-sign"></i>

料金表</h2>
</section>

<section class="content module">

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>

    <table class="table table-bordered">
      <thead class="">
        <tr>
          <th>項目</th>
          <th>料金</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>入会金</th>
          <td>&yen;<?php echo number_format ( get_field('price_01_admission') ); ?></td>
        </tr>
        <tr>
          <th>月額会費</th>
          <td>&yen;<?php echo number_format ( get_field('price_02_monthly') ); ?></td>
        </tr>
        <tr>
          <th>利用料（１時間毎）</th>
          <td>&yen;<?php echo number_format ( get_field('price_03_hour') ); ?></td>
        </tr>
        <tr>
          <th>通院費</th>
          <td>&yen;<?php echo number_format ( get_field('price_04_hospital') ); ?></td>
        </tr>
        <tr>
          <th>当施設以外への送迎</th>
          <td>&yen;<?php echo number_format ( get_field('price_05_pickup') ); ?></td>
        </tr>
        <tr>
          <th>昼食費（希望者のみ）</th>
          <td>&yen;<?php echo number_format ( get_field('price_06_foods') ); ?></td>
        </tr>
        <tr>
          <th>おやつ</th>
          <td><?php the_field('price_07_snack'); ?></td>
        </tr>
      </tbody>
    </table>

  <?php endwhile; ?>
<?php endif; ?>

</section>

<?php get_footer(); ?>
