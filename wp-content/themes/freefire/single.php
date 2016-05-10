<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Free_fire
 */

get_header(); ?>

<main class="min-container single">
  <section>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-detail', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</section>
</main>

<?php
// get_sidebar();
get_footer();

?>
<div class="baidu-content">
	<script type="text/javascript">
  	/*20:5 创建于 2016-05-10*/
  	var cpro_id = "u2634649";
	</script>
	<script src="http://cpro.baidustatic.com/cpro/ui/cm.js" type="text/javascript"></script>
</div>
