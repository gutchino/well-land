<?php get_header(); ?>

<section>
   <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ttlbn_about.jpg" alt="施設紹介" class="full-width" /></h1>
</section>

<section class="content module">

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>

    <table class="table table-bordered">
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
