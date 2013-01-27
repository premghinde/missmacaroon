<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
	<section>
		<div id="flinks"> 
		<h2>LINKS</h2>
		<ul>
		<li><a><a href="/home">Home </a></li> 
		<li><a><a href="/buy-macaroons">Buy Macaroons </a></li> 	
		<li><a><a href="/wedding-macaroons">Wedding Macaroons </a></li> 
		<li><a><a href="/corporate-macaroons">Corporate Macaroons </a></li>
		<li><a><a href="/home-baker">Home Baker </a></li>  
		<li><a><a href="/social-enterprise">Social Enterprise </a></li> 
		<li><a><a href="/contact-us">Contact Us </a></li> 
		</ul> 
		</div>
		<div id="ftwitter"><h2>TWITTER FEED</h2>
		<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		<?php endif; ?>
		</div>
		<div id="fsignup">
		</div>
	</section>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="/wp-content/themes/missmacaroon/js/jquery.min.js"></script>
<script src="/wp-content/themes/missmacaroon/js/mm.js"></script>
<?php wp_footer(); ?>
</body>
</html>