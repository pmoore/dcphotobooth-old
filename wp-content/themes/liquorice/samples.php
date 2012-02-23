<?php

/*
  Template Name: Samples Page
 */

 get_header();

 $sample_img_width = 160;
 $sample_img_height = 240;
 
 $sample_images = array(    "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth1.jpg", 
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth2.jpg",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth26.jpg",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth20.jpg",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth11.jpg",     
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth10.jpg", 
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth21.jpg",                            
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth17.jpg",                            
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth5.jpg",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth231.jpg",                            
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/01/stock-dark.png",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/01/stock-dark-4.png",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/01/guestbook-2.jpeg",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/01/stock-dark-5.png",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/01/stock-dark-2.png",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/01/DCPB_0052.jpg",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/01/DCPB_0011.jpg",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/01/DCPB_0021.jpg",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/02/all-1-200x300.jpg",
                            "http://www.dc-photobooth.com/wp-content/uploads/2012/01/DCPB_0010-21.jpg"
                        );
 
?>

<div id="primaryContent">
    <div class="post" id="sample-gallery-page">
        <h1 class="postTitle page">sample galleries</h1>
        
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style" id="image_social_toolbox" style="width:320px; text-align: center; margin: 0px auto; float:left; margin-top: 20px;">
            <a class="addthis_button_pinterest" pi:pinit:url="<?php the_permalink() ?>" pi:pinit:media="" pi:pinit:layout="horizontal" style="outline:none;"></a>
            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet"></a>
        </div>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f18708410c8b891"></script>
        <!-- AddThis Button END -->
        
        <div style="clear:both"></div>

        
        <?php 
            foreach ( $sample_images as $key=>$img ) { ?>
                <img src="<?php echo $img ?>" alt="DC Photobooth Sample Images" title="DC Photobooth Sample" width="<?php echo $sample_img_width ?>" height="<?php echo $sample_img_height ?>" class="alignnone size-full pageimg sample-gallery<?php if(($key+1)%5==0){ ?> far-right<?php } ?>" />
            <?php
            }
        ?>
        <div id="main-image-dialog">
            <div id="main-image-share" style="margin-bottom:5px;">
                
            </div>
            <img src="<?php echo $sample_images[0] ?>" id="main-sample-image"><br/>click anywhere outside image to close
        </div>
    </div>
</div>



<?php
get_footer();
?>
