<?php
if ( is_active_sidebar( 'sidebar-bottom' ) ) : ?>
	<div class="sidebar">
		<div id="widget-area" class="row" role="complementary">
			<?php dynamic_sidebar( 'sidebar-bottom' ); ?>
		</div><!-- .widget-area -->

	</div><!-- .sidebar-->
<?php endif; ?>
