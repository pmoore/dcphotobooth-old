<?php

/*
  Template Name: Event Photos
 */

 get_header();
 
 $events = array (  
                    array(  'name' => 'Baltimore Sheraton North Hotel', 
                            'type' => 'Bridal Show', 
                            'date' => date("M d, Y", strtotime("2012-02-19")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth10-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth10.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/DC-Photobooth/21522481_Hc6Zp9/'
                        ),
                    array(  'name' => 'Truong Wedding', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-03-24")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/03/20000101_011205-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/03/20000101_011205.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/3-24-Truong-Wedding/22108372_DKwP2T'
                        )
            );
 
 $sample_img_width = 160;
 $sample_img_height = 240;

?>

<div id="primaryContent">
    <div class="post">
        <h1 class="postTitle page">event photos</h1>
        <div style="clear:both"></div>
        
        <div class="event-photo-instructions floatLeft" style="width: 480px; margin-bottom: 10px;">
            Click on your event and use your password to view your photos
        </div>
        
        <div style="clear:both"></div>
        
        <?php foreach ( $events as $key=>$event ) { ?>
        
            <div class="event-item floatLeft<?php if(($key+1)%5==0){ ?> far-right<?php } ?>">
                <a href="<?php echo $event['host_url'] ?>" target="blank">
                    <img src="<?php echo $event['featured_image'] ?>" alt="DC Photobooth Event Photos" title="DC Photobooth Event Photos" width="<?php echo $sample_img_width ?>" height="<?php echo $sample_img_height ?>" class="pageimg" />                
                    <div class="event-item-name"><?php echo $event['name'] ?></div>
                </a>
                <span class="event-item-date"><?php echo $event['date'] ?></span>
                <span class="event-item-type"><?php echo $event['type'] ?></span>
            </div>
        <?php } ?>
        
        
        
        <div id="temp-image-filler" style="float:right;">
            <?php foreach ( $events as $key=>$event ) { ?>
                <img src="<?php echo $event['featured_image_large'] ?>" width="450" height="670" class="postimg">
            <?php } ?>
        </div>
        
        
        
        <div style="clear:both"></div>
    </div>
</div>



<?php
get_footer();
?>