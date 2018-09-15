<?php
?>
</div>
<footer>
	<div class="container">
		<a class="footer_logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_well-land_grey.png" alt="ウェルランド～さくら～" height="28px" /></a>
		<?php wp_nav_menu( array('menu' => 'footerMenu' )); ?>
	</div>
	<div class="footerCopy">
		<p class="text-center full-width">&copy; <?php echo date( 'Y' ); ?> 株式会社 BIG MAKES</p>
	</div>
</footer>

<!-- SCRIPTS -->
<!-- Example: <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<?php wp_footer(); ?>
</body>
</html>
