<?php
/**
 * @package WordPress
 * @subpackage sigma
 */
?>
	</div><!-- page-container -->               
</div>
	

	
<div class="footer clear">
	<div class="container container-sixteen">
		<?php if ( is_active_sidebar( 'footer-sidebar' ) ) dynamic_sidebar( 'footer-sidebar' ); ?>
		<div class="offset-by-twelve four columns">
			Website by <a href="//jdforrest.net" target="_blank">John Darwin Forrest</a>
		</div>
	</div>
</div>
    
<?php wp_footer(); ?>
   
</body>
</html>