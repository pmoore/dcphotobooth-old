<?php
/*
  Template Name: Blog Posts
 */

get_header();
?>
<div id="primaryContent" class="blog-content">
<?php

$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('posts_per_page=5' . '&paged=' . $paged);
while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>


    <ol id="posts">


        <li id="post-<?php the_ID(); ?>" <?php post_class('postWrapper'); ?>>


            <h2 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

            <div style="text-align: right"><p class="date"><small><?php the_time('F j, Y'); ?></small></p></div>

            <div class="post">
                <div id="postthmb"><?php the_post_thumbnail(); ?></div>

                <?php the_content(__('(more...)')); ?></div>
                <?php wp_link_pages('before=<p class="page-link">&after=</p>&next_or_number=number&pagelink=page %'); ?>
            <p class="postMeta">Category <?php the_category(', ') ?> | Tags: <?php the_tags(', '); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>

            <hr class="noCss" />
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
