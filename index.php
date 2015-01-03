<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

  <div class="flexslider">
    <ul class="slides">
      <?php $recent_posts = wp_get_recent_posts( array( 'numberposts' => '5' ) );?>

      <?php foreach( $recent_posts as $recent ) : ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent[ 'ID' ] ), 'single-post-thumbnail' ); ?>
      <?php $category_name = get_the_category( $recent[ 'ID' ] )[ 0 ]->name; ?>
      <?php $post_link = get_permalink($recent[ 'ID' ]); ?>
      <?php $post_title = $recent[ 'post_title' ]; ?>

      <li>
        <a href="<?php echo $post_link; ?>"><img src="<?php echo $image[0]; ?>" /></a>
        <header class="caption">
          <h4>
            <span class="label label-primary angular"><?php echo $category_name; ?></span>
          </h4>
          <h2><a href="<?php echo $post_link; ?>"><?php echo $post_title; ?></a></h2>
        </header>
      </li>
      <?php endforeach; ?>

    </ul>
  </div>

  <div class="row">
    <div class="col-md-8">
<!--      <div id="primary" class="content-area">-->
<!--        <main id="main" class="site-main" role="main">-->
<!---->
<!--        --><?php //if ( have_posts() ) : ?>
<!---->
<!--          --><?php //if ( is_home() && ! is_front_page() ) : ?>
<!--            <header>-->
<!--              <h1 class="page-title screen-reader-text">--><?php //single_post_title(); ?><!--</h1>-->
<!--            </header>-->
<!--          --><?php //endif; ?>
<!---->
<!--          --><?php
//          // Start the loop.
//          while ( have_posts() ) : the_post();
//
//            /*
//             * Include the Post-Format-specific template for the content.
//             * If you want to override this in a child theme, then include a file
//             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
//             */
//            get_template_part( 'content', get_post_format() );
//
//          // End the loop.
//          endwhile;
//
//          // Previous/next page navigation.
//          the_posts_pagination( array(
//            'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
//            'next_text'          => __( 'Next page', 'twentyfifteen' ),
//            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
//          ) );
//
//        // If no content, include the "No posts found" template.
//        else :
//          get_template_part( 'content', 'none' );
//
//        endif;
//        ?>
<!---->
<!--        </main><!-- .site-main -->-->
<!--      </div><!-- .content-area -->-->
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>


<?php get_footer(); ?>
