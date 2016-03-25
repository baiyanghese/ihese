<?php
  get_header();
?>
<main class="min-container">
  <section>
     <?php

      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', get_post_format() );
      endwhile;

      the_posts_navigation();

     ?>
      <!-- <div class="artice-title">
      </div>
      <div class="artice-info">

      </div>
      <div class="artice-author">
        <img src="" alt="" />
      </div> -->
  </section>
</main>
<?php
  get_footer();
?>
