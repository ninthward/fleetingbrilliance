<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Personal_Portfolio_of_Campbell_Mckeogh
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="site-info">
            <a href=""><img src="http://fleetingbrilliance.com/wp-content/uploads/2018/01/poweredByWp-e1517586494205.png"></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cmck_underscores' ), 'campbell_mckeogh_portfolio', '<a href="http://underscores.me/">Campbell Mckeogh</a>' );
			?>
        </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
