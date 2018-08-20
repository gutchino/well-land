<?php get_header(); ?>

<section>
   <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ttlbn_about.jpg" alt="料金体系" class="full-width" /></h1>
</section>

<section class="content module">

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>

    <table class="table table-striped">
      <thead class="thead-dark">
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
