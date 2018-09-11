<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package campbellmckeogh
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<hr>
		<div class="container">
		<div col-lg-12>
			<div class="row">
			<div col-lg-4 class="pull-left">
				<img class="logo" src="/wp-content/themes/campbellmckeogh/img/logo.png">
			</div>
			<div col-lg-4></div>
			<div col-lg-4>
				<?php echo do_shortcode("[cn-social-icon]"); ?>
			</div>
		</div>
		</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'campbellmckeogh' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'campbellmckeogh' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Design by: %1$s by %2$s.', 'campbellmckeogh' ), 'campbellmckeogh', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
