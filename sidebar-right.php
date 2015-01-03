<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
	<div class="sidebar">
		<div id="widget-area" class="" role="complementary">
			<?php dynamic_sidebar( 'sidebar-right' ); ?>
		</div><!-- .widget-area -->

	</div><!-- .sidebar-->
<?php endif; ?>
