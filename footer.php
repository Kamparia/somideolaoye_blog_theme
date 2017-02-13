<?php
/**
 * The template for displaying the footer.
 *
 * Contains all content after the main content area and sidebar
 *
 * @package zeePersonal
 */
 
?>
	
	</div><!-- #content -->
	
	<?php do_action( 'zeepersonal_before_footer' ); ?>

	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		
		<div class="footer-main container clearfix">
			
			<div id="footer-text" class="site-info">
				
				<p>© 2017, All rights reserved. Powered by <a href="http://somideolaoye.com"> Somide Olaoye Anthony.</a></p>			
			
			</div><!-- .site-info -->
			
			<nav id="footer-links" class="footer-navigation navigation clearfix" role="navigation">
				<?php 
					// Display Footer Navigation
					wp_nav_menu( array(
						'theme_location' => 'footer', 
						'container' => false, 
						'menu_class' => 'footer-navigation-menu', 
						'echo' => true, 
						'fallback_cb' => '',
						'depth' => 1)
					);
				?>
			</nav><!-- .footer-navigation -->
			
		</div><!-- .footer-main -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>