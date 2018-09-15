<?php
?>
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 mb-2">
				<a class="footer_logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_well-land_grey.png" alt="ウェルランド～さくら～" height="28px" /></a>
				<div class="">
				〒451-0063<br>
				愛知県名古屋市西区押切2-1-30
				</div>
			</div>
			<div class="col-md-8">
				<?php wp_nav_menu( array('menu' => 'footerMenu' )); ?>
			</div>
		</div>
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
