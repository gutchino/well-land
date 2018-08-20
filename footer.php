<?php
?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm module">
				<a href="<?php echo site_url(); ?>">ウェルランド～さくら～</a>
			</div>
			<div class="col-sm module">
				<?php wp_nav_menu( array('menu' => 'footerMenu' )); ?>
			</div>
		</div>
		<div class="footerCopy">
			<p class="text-center full-width">&copy; <?php echo date( 'Y' ); ?> 株式会社 BIG MAKES</p>
		</div>
	</div>
</footer>

<!-- SCRIPTS -->
<!-- Example: <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<?php wp_footer(); ?>
</body>
</html>
