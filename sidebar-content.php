<?php 
/* Widgetized area for our blog. */
if ( is_active_sidebar( 'widget-1' ) ) : ?>
	<div id="content-widget" class="content-widget widget-area" role="complementary">
		<?php dynamic_sidebar( 'widget-1' ); ?>
	</div><!-- #content-widget -->
<?php endif; ?>
