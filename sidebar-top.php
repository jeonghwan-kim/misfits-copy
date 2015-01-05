<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<div class="sidebar-top">
		<nav id="site-navigation" class="main-navigation" role="navigation">
<!--			--><?php
//			// Primary navigation menu.
//			wp_nav_menu( array(
//					'menu_class'     => 'nav-menu',
//					'theme_location' => 'primary',
//			) );
//			?>
			<?php shailan_dropdown_menu(); ?>
		</nav><!-- .main-navigation -->
	</div><!-- .sidebar-top -->
<?php endif; ?>
