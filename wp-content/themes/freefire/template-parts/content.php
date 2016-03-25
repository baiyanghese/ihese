<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Free_fire
 */

?>

<article id="post-<?php the_ID(); ?>"  class="article-list clearfix">
    <div class="artice-title">
    <?php
      if ( is_single() ) {
        the_title( '<h1 class="entry-title">', '</h1>' );
      } else {
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      }
   ?>
   </div>
   <div class="artice-ctime">
    <?php freefire_posted_on("list"); ?>
   </div>
</article>
