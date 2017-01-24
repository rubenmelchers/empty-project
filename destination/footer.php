<?php
/**
 * The template for displaying the footer
**/
?>
<footer class="footer">
	<div class="wrap">
		<div class="row">
			<div class="col-lg-12">
				<p class="footer__copyright">
					©Ruben Melchers, 2017
				</p>
				<?php wp_nav_menu(array('menu' => 'navigation', 'container' => '', 'menu_class' => 'footer__menu')); ?>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<!--build:js js/main.min.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
<!-- endbuild -->
</body>
</html>
