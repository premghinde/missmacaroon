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
		<div id="ftwitter">
		<h2>TWITTER FEED</h2>
		<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		<?php endif; ?>
		</div>
		<div id="fsignup">
		<h2>SIGN UP</h2>
		<?php echo do_shortcode('[form form-5]'); ?>
		</div>
	</section>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="/wp-content/themes/missmacaroon/js/jquery.min.js"></script>
<script src="/wp-content/themes/missmacaroon/js/mm.js"></script>
<?php wp_footer(); ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36379495-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>