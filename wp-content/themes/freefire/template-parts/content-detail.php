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
      ) );?>
      <div class="read-num">
      阅读数 &nbsp;<b><?php
      phsy_set_post_views(get_the_ID());
      echo phsy_get_post_views(get_the_ID());?></b>
      </div>
      <?php $url = 'http://'.$_SERVER['HTTP_HOST'].'?'.$_SERVER['QUERY_STRING'] ?>
      <div class="article-code">
        <img src="http://qr.topscan.com/api.php?bg=ffffff&fg=575757&el=l&w=200&m=10&text=<?php echo $url ?>"/>
        请使用微信扫描阅读
      </div>
      <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'freefire' ),
        'after'  => '</div>',
      ) );
    ?>
  </div>
</article>
