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
      <div class="row">
        <?php get_sidebar( 'center' ); ?>
      </div>
    </div>
    <div class="col-md-4">
      <?php get_sidebar( 'right' ); ?>
    </div>
  </div> <!-- .row -->


<?php get_footer(); ?>
