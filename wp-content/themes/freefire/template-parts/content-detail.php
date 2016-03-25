<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Free_fire
 */

?>

<article id="post-<?php the_ID(); ?>"  class="clearfix">
  <div class="artice-detail-title">
    <?php
        if ( is_single() ) {
          the_title( '<h1 class="entry-title">', '</h1>' );
        } else {
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        }
    ?>
    <a href="/" class="return-index">返回首页</a>
  </div>
  <div class="artice-detail-time">
    <?php freefire_posted_on("detail"); ?>
  </div>
  <div class="entry-content">
    <?php
      the_content( sprintf(
        /* translators: %s: Name of current post. */
        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'freefire' ), array( 'span' => array( 'class' => array() ) ) ),
        the_title( '<span class="screen-reader-text">"', '"</span>', false )
      ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'freefire' ),
        'after'  => '</div>',
      ) );
    ?>
  </div>
</article>
