<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>
<div id="footer-lib-links" class="footer-bar">
<ul class="footerbar" id="liblinks">
<li><a href="http://www.utexas.edu/">UT Home</a></li>
<li><a href="http://www.lib.utexas.edu/">UT Libraries</a></li>
<li><a href="http://lib.utexas.edu/website_feedback">Web Site Feedback</a></li>
<li><a href="http://www.utexas.edu/emergency/">Emergency Preparedness, Safety and Security</a></li>
<li><a href="http://www.utexas.edu/web-accessibility-policy">Accessibility</a></li>
<li><a href="http://www.utexas.edu/web-privacy-policy">Privacy/Confidentiality</a></li>
<li><a href="http://www.lib.utexas.edu/usage_statement.html">Material Usage Statement</a></li>
</ul>
</div>
<?php
/**
			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
*/
?>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>