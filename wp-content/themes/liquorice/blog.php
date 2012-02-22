<?php
/*
  Template Name: Blog Posts
 */

get_header();
?>
<!--<h1 class="postTitle page" style="text-align:right">dc photobooth blog</h1>-->
<!--    <div style="clear:both"></div>-->
<div id="primaryContent" class="blog-content">
    
    <ol id="posts">
        <?php

        $temp = $wp_query;
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query('posts_per_page=5' . '&paged=' . $paged);
        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>


    


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
                    <a class="addthis_button_preferred_1"></a>
                    <a class="addthis_button_preferred_2"></a>
                    <a class="addthis_button_preferred_3"></a>
                    <a class="addthis_button_preferred_4"></a>
                    <a class="addthis_button_compact"></a>
                    <a class="addthis_counter addthis_bubble_style"></a>
                </div>
                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f18708410c8b891"></script>
                <!-- AddThis Button END -->
            </div>
            
                <?php wp_link_pages('before=<p class="page-link">&after=</p>&next_or_number=number&pagelink=page %'); ?>
            <p class="postMeta">Category <?php the_category(', ') ?> | Tags: <?php the_tags(); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>

            <div class="dc-border">&nbsp;</div>
        </li>

        <?php comments_template(); // Get wp-comments.php template  ?>

    <?php endwhile; ?>

</ol>

<?php $wp_query = null;
$wp_query = $temp; ?>

<div class="pagination-older"><?php next_posts_link('Older Entries'); ?></div>
<div class=" pagination-newer"><?php previous_posts_link('Newer Entries'); ?></div> 



</div>
<div id="secondaryContent">
    <?php get_sidebar(); ?>
</div>

<?php
get_footer();
?>
