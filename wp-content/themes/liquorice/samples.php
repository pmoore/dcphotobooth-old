<?php

/*
  Template Name: Samples Page
 */

 get_header();

 $sample_img_width = 160;
 $sample_img_height = 240;
 
 $sample_images = array(    
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/09/lighthouse-201x300.jpg", 
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/09/lighthouse-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101094929-201x300.jpg", 
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101094929-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101015241-201x300.jpg", 
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101015241-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_002520-201x300.jpg", 
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_002520-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101_022821-1921269247-O-201x300.jpg", 
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101_022821-1921269247-O-688x1024.jpg" ),
     
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_042514-201x300.jpg", 
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_042514-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/i-4W6ndHh-201x300.jpg", 
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/i-4W6ndHh-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_023552-201x300.jpg", 
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_023552-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/08/i-NnHQQRm-201x300.jpg", 
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/08/i-NnHQQRm-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_035157-201x300.jpg", 
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_035157-688x1024.jpg" ),
    
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_025723-201x300.jpg",
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_025723-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/09/20000101024545-201x300.jpg",
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/09/20000101024545-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/04/20000101_030427-201x300.jpg",
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/04/20000101_030427-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/09/i-TMM65XH-201x300.jpg",
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/09/i-TMM65XH-688x1024.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_034046-201x300.jpg",
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_034046-688x1024.jpg" ),
     
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth10-201x300.jpg",
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth10.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth21-201x300.jpg",
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth21.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth17-201x300.jpg",
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth17.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth1-201x300.jpg", 
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth1.jpg" ),
    array(  "small" => "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth231-201x300.jpg",
            "large" => "http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth231.jpg" )
);
 
?>

<div id="primaryContent">
    <div class="post" id="sample-gallery-page">
        <h1 class="postTitle page">sample galleries</h1>
        
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style" id="image_social_toolbox" style="width:325px; text-align: center; margin: 0px auto; float:left; margin-top: 20px;">
            <a class="addthis_button_pinterest" pi:pinit:url="<?php the_permalink() ?>" pi:pinit:media="<?php echo $sample_images[0]["large"] ?>" pi:pinit:layout="horizontal" style="outline:none;"></a>
            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet"></a>
        </div>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f18708410c8b891"></script>
        <!-- AddThis Button END -->
        
        <div style="clear:both"></div>

        
        <?php 
            foreach ( $sample_images as $key=>$img ) { ?>
                <img src="<?php echo $img["small"] ?>" data-large-src="<?php echo $img["large"] ?>" alt="DC Photobooth Sample Images" title="DC Photobooth Sample" width="<?php echo $sample_img_width ?>" height="<?php echo $sample_img_height ?>" class="alignnone size-full pageimg sample-gallery<?php if(($key+1)%5==0){ ?> far-right<?php } ?>" />
            <?php
            }
        ?>
        <div id="main-image-dialog">
            <div id="main-image-share" style="margin-bottom:5px; padding-left: 20px;">
                
            </div>
            <img src="<?php echo $sample_images[0]["large"] ?>" id="main-sample-image"><br/>click anywhere outside image to close
        </div>
    </div>
</div>



<?php
get_footer();
?>
