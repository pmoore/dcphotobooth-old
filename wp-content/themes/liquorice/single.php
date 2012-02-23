<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  get_header();

  if (have_posts()) : while (have_posts()) : the_post();
  ?>

    <div id="post-<?php the_ID(); ?>"  <?php post_class('postWrapper'); ?>>

      <h1 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
      <div class="date"><small><?php the_date(); ?> by <?php the_author(); ?></small></div>
      <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style">
            <a class="addthis_button_pinterest" pi:pinit:url="<?php the_permalink() ?>" pi:pinit:media="" pi:pinit:layout="horizontal"></a>
            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet"></a>
            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
        </div>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f18708410c8b891"></script>
        <!-- AddThis Button END -->

        <div style="clear:both"></div>
      <div class="post">
	  <?php the_post_thumbnail(); ?>
	<?php the_content(__('(more...)')); ?></div>
	<?php wp_link_pages('before=<p class="page-link">&after=</p>&next_or_number=number&pagelink=page %'); ?>
	  <p class="postMeta">Category <?php the_category(', ') ?> | Tags: <?php the_tags(); ?> </p>
      <hr class="noCss" />

    </div>
    <div class="post-link">
     <div class="pagination-newer"><?php previous_post_link('%link'); ?></div> 
      <div class="pagination-older"><?php next_post_link('%link'); ?></div>
	</div>
	<?php

  comments_template();

  endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php
  endif;

  get_footer();

?>