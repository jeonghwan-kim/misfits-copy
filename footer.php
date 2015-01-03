<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
</div><!-- .contatiner-->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<?php get_sidebar( 'bottom' ); ?>

		<div class="row">
			<div class="col-sm-6">
				<div class="text-muted">
					All rights reserved, Misfits
				</div>
			</div>
			<div class="col-sm-6">
				<div class="text-muted text-right">
					since 2014
				</div>
			</div>
		</div>
	</div>
</footer><!-- .site-footer -->


<?php wp_footer(); ?>
</div><!-- .wrapper-->
</body>
</html>
