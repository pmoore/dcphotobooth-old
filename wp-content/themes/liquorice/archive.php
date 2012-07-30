<?php get_header(); ?>


 <?php is_tag(); ?>
  <?php if (have_posts()) : ?>

  <div id="archives"> 
  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
   <?php /* If this is a category archive */ if (is_category()) { ?>
    <h2><?php ucwords(single_cat_title()); ?> Posts</h2>
   <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
   <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h2>a <?php the_time('F jS, Y'); ?></h2>
   <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h2> <?php the_time('F, Y'); ?></h2>
   <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2><?php the_time('Y'); ?></h2>
   <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2>Author Archive</h2>
   <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h2>Blog Archives</h2>
   <?php } ?>
   </div>
<div id="primaryContent" class="blog-content archives">
 <ol id="posts">
  <?php while (have_posts()) : the_post(); ?>

    <li id="post-<?php the_ID(); ?>" <?php post_class('postWrapper'); ?>>


        <h2 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

        <div class="post-date"><span class="month"><?php the_time('M') ?></span><br /><span class="date"><?php the_time('j') ?></spa></div>

        <div class="post">
            <?php //the_content(__('(more...)')); ?>
            <?php echo get_post_meta(get_the_ID(), 'teaser', true); ?>
        </div>
        <div class="post-read-more"><a href="<?php the_permalink() ?>" rel="bookmark">read more &raquo;</a></div>
        <div class="post-social">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style "
                    addthis:url="<?php the_permalink() ?>"
                    addthis:title="<?php the_title(); ?>">
                <a class="addthis_button_facebook"></a>
                <a class="addthis_button_twitter"></a>
                <a class="addthis_button_gmail"></a>
                <a class="addthis_button_compact"></a>
                <a class="addthis_counter addthis_bubble_style"></a>
            </div>
            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f18708410c8b891"></script>
            <!-- AddThis Button END -->
        </div>

            <?php wp_link_pages('before=<p class="page-link">&after=</p>&next_or_number=number&pagelink=page %'); ?>
        <p class="postMeta">Category <?php the_category(', ') ?> | <?php the_tags(); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>

        <div class="dc-border">&nbsp;</div>
    </li>

    <?php comments_template(); // Get wp-comments.php template ?>

  <?php endwhile; ?>

  </ol>
</div>

 
 <?php else : ?>

  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

  <?php endif; ?>


 <div class="pagination-older"><?php next_posts_link('Older Entries ') ?></div>
<div class=" pagination-newer"><?php previous_posts_link('Newer Entries ') ?></div> 
    


<?php get_footer(); ?>