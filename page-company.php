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
          <th>会社名</th>
          <td><?php the_field('company_name'); ?></td>
        </tr>
        <tr>
          <th>代表者</th>
          <td><?php the_field('president_name'); ?></td>
        </tr>
        <tr>
          <th>所在地</th>
          <td><?php the_field('company_address'); ?></td>
        </tr>
        <tr>
          <th>設立</th>
          <td><?php the_field('company_since'); ?></td>
        </tr>
        <tr>
          <th>事業内容</th>
          <td><?php the_field('business_contents'); ?></td>
        </tr>
      </tbody>
    </table>

  <?php endwhile; ?>
<?php endif; ?>

</section>

<?php get_footer(); ?>
