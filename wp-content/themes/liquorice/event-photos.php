<?php

/*
  Template Name: Event Photos 
 */

 get_header();
 
 $events = array (  array(  'name' => 'WeddingWire World', 
                            'type' => 'Conference', 
                            'date' => date("M d, Y", strtotime("2012-07-23")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101094929-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101094929.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/WeddingWire-World-2012/24355389_x58ckQ',
                            'link_title' => 'DC Photobooth at WeddingWire World'
                        ),
                    array(  'name' => 'Ashley and Darryl', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-07-22")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101015241-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_002520.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/ashley-and-darryl/24322608_THPD82',
                            'link_title' => 'DC Photobooth at Ashley and Darryl\'s Wedding'
                        ),
                    array(  'name' => 'Dorothy\'s Birthday Party', 
                            'type' => 'Birthday', 
                            'date' => date("M d, Y", strtotime("2012-06-30")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_002520-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_002520.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/6-30-Dorothys-Birthday/23913877_LtdN5X',
                            'link_title' => 'DC Photobooth at Dorothy\'s Birthday Party'
                        ),
                    array(  'name' => 'Jenna\'s Graduation Party', 
                            'type' => 'Graduation Party', 
                            'date' => date("M d, Y", strtotime("2012-06-30")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_021302-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/07/20000101_021302.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/6-30-Jennas-Graduation-Party/23913837_qbwqfX',
                            'link_title' => 'DC Photobooth at Jenna\'s Graduation Party'
                        ),
                    array(  'name' => 'Steve\'s 70th Part 2', 
                            'type' => 'Birthday', 
                            'date' => date("M d, Y", strtotime("2012-06-23")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101030716-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101030716.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Birthday/steves-70th-bday-623/23748189_RzStmC',
                            'link_title' => 'DC Photobooth at Steve\'s 70th Birthday Party (part 2)'
                        ),
                    array(  'name' => 'Antoine Bethea\'s Safe Coverage', 
                            'type' => 'Fundraiser', 
                            'date' => date("M d, Y", strtotime("2012-06-21")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101022821-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101022821.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/Antoine-Bethea-Safe-Coverage/23725441_DZmTVL',
                            'link_title' => 'DC Photobooth at Antoine Bethea\'s Safe Coverage Fundraiser'
                        ),
                    array(  'name' => 'Steve\'s 70th', 
                            'type' => 'Birthday', 
                            'date' => date("M d, Y", strtotime("2012-06-16")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101004856-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101004856.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Events/Birthday/Steves-70th-Birthday/23618578_bD3TXN',
                            'link_title' => 'DC Photobooth at Steve\'s 70th Birthday Party'
                        ),
                    array(  'name' => 'Thomas & Yong', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-06-09")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101003910-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101003910.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/Tommy-and-Yong-Wedding/23568163_38QJkh',
                            'link_title' => 'DC Photobooth at the Wedding of Thomas and Yong'
                        ),
                    array(  'name' => 'NBC 4', 
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2012-06-08")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101002941-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101002941.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/NBC-Universal/23567985_k8jLz9',
                            'link_title' => 'DC Photobooth at NBC 4 Party'
                        ),
                    array(  'name' => 'Ashley & Zoe', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-06-02")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/i-3tFZk67-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/06/i-3tFZk67.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/6-2-Ashley-and-Zoe-Wedding/23355382_nznb84',
                            'link_title' => 'DC Photobooth at the Wedding of Ashley and Zoe'
                        ),
                    array(  'name' => 'Sam & Emma Goldstein', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-05-12")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/i-4W6ndHh-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/i-4W6ndHh.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/5-12-Goldstein-Wedding/23120174_wtKgfK',
                            'link_title' => 'DC Photobooth at the Wedding of Sam and Emma Goldstein'
                        ),
                    array(  'name' => 'University of Maryland', 
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2012-05-12")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/i-zXW466b-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/i-zXW466b.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/5-12-UMD/23120692_CqK2HT',
                            'link_title' => 'DC Photobooth at the University of Maryland End of Year Celebration'
                        ),
                    array(  'name' => 'Mark Twain Middle School Dance', 
                            'type' => 'Dance', 
                            'date' => date("M d, Y", strtotime("2012-05-11")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_025723-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_025723.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Dance/5-11-Mark-Twain-Middle-School/22931160_HCfrtw',
                            'link_title' => 'DC Photobooth at Mark Twain Middle School 8th Grade Dance'
                        ),
                    array(  'name' => 'Howard University Graduation Celebration', 
                            'type' => 'Graduation Party', 
                            'date' => date("M d, Y", strtotime("2012-05-10")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_023552-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_023552.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/Howard-University-Graduation/22931303_txqdJs',
                            'link_title' => 'DC Photobooth at Howard University School of Pharmacy Celebration'
                        ),
                    array(  'name' => 'Dorman\'s Bat Mitzvah', 
                            'type' => 'Bat Mitzvah', 
                            'date' => date("M d, Y", strtotime("2012-05-06")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_003205-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_003205.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/5-6-Hannah-Dorman-Bat-Mitzvah/22857874_8HxchX',
                            'link_title' => 'DC Photobooth at Hannah Dorman\'s Bat Mitzvah'
                        ),
                    array(  'name' => 'West Lake HS Prom', 
                            'type' => 'Prom', 
                            'date' => date("M d, Y", strtotime("2012-05-05")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_035157-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_035157.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/5-5-West-Lake-HS-Prom/22857852_MZfW76',
                            'link_title' => 'DC Photobooth at the West Lake High School Prom'
                        ),
                    array(  'name' => 'WeddingWire Recruitment Event', 
                            'type' => 'Recruitment', 
                            'date' => date("M d, Y", strtotime("2012-04-30")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_034046-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_034046.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Professional/4-30-WeddingWire-Recruiting/22763467_3Sj6Z7',
                            'link_title' => 'DC Photobooth at the a WeddingWire Recruitment Event at the Majestic'
                        ),
                    array(  'name' => 'Colleen & Ryan Hill', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-04-28")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_015647-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_015647.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/4-28-Colleen-and-Ryan-Wedding/22763435_WhXcmT#!i=1825945173&k=3LZqr3h',
                            'link_title' => 'DC Photobooth at the Wedding of Colleen and Ryan Hill'
                        ),
                    array(  'name' => 'NBAC Countdown to the Olympics', 
                            'type' => 'Fundraiser', 
                            'date' => date("M d, Y", strtotime("2012-04-14")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/04/20000101_030427-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/04/20000101_030427.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Parties/North-Baltimore-Aquatic-Club/22451267_Tst2Th',
                            'link_title' => 'DC Photobooth at the NBAC Countdown to the Olympics Fundraiser'
                        ),
                    array(  'name' => 'Tai & Becci Truong', 
                            'type' => 'Wedding', 
                            'date' => date("M d, Y", strtotime("2012-03-24")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/03/20000101_052956-1764629163-O-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/03/20000101_052956-1764629163-O.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/3-24-Truong-Wedding/22108372_DKwP2T',
                            'link_title' => 'DC Photobooth at the Wedding of Tai and Becci Truong'
                        ),
                    array(  'name' => 'Baltimore Sheraton North Hotel', 
                            'type' => 'Bridal Show', 
                            'date' => date("M d, Y", strtotime("2012-02-19")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth10-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/02/dcphotobooth10.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/DC-Photobooth/21522481_Hc6Zp9/',
                            'link_title' => 'DC Photobooth at the Baltimore Sheraton North Bridal Show'
                        ),
                    array(  'name' => 'DC Photobooth Launch Party', 
                            'type' => 'Party', 
                            'date' => date("M d, Y", strtotime("2012-01-26")), 
                            'featured_image' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/03/20000101_000347-201x300.jpg',
                            'featured_image_large' => 'http://www.dc-photobooth.com/wp-content/uploads/2012/03/20000101_000347.jpg',
                            'host_url' => 'http://dc-photobooth.smugmug.com/Weddings/DC-Photobooth-Launch-Party/22144760_cZ9Nqj',
                            'link_title' => 'DC Photobooth Launch Party'
                        )
            );
 
 $sample_img_width = 160;
 $sample_img_height = 240;

?>

<div id="primaryContent">
    <div class="post">
        <h1 class="postTitle page">event photos</h1>
        <div style="clear:both"></div>
        
        <div class="event-items-container floatLeft" style="width:967px;" >
            <div class="event-photo-instructions" style="width: 480px; margin-bottom: 10px;">
                Click on your event and use your password to view your photos
            </div>
        
            <?php foreach ( $events as $key=>$event ) { ?>

                <div class="event-item floatLeft<?php if(($key+1)%5==0){ ?> far-right<?php } ?>">
                    <a href="<?php echo $event['host_url'] ?>" target="blank" title="<?php echo $event['link_title'] ?>">
                        <img src="<?php echo $event['featured_image'] ?>" alt="DC Photobooth Event Photos" title="DC Photobooth Event Photos" width="<?php echo $sample_img_width ?>" height="<?php echo $sample_img_height ?>" class="pageimg" />                
                        <div class="event-item-name"><?php echo $event['name'] ?></div>
                    </a>
                    <div class="event-item-date"><?php echo $event['date'] ?></div>
                    <div class="event-item-type"><?php echo $event['type'] ?></div>
                </div>
            <?php } ?>
        </div>
        
        
        <div id="temp-image-filler" style="float:right; display: none;">
            <?php foreach ( $events as $key=>$event ) { ?>
                <div>
                    <img src="<?php echo $event['featured_image_large'] ?>" width="375" height="562" class="postimg" alt="<?php echo $event['link_title'] ?>">
                    <div class="event-item-name" style="width:385px; margin-top: 10px;"><?php echo $event['name'] ?></div>
                    <span class="event-item-date" style="width:385px;"><?php echo $event['date'] ?></span>
                    <span class="event-item-type" style="width:385px;"><?php echo $event['type'] ?></span>
                </div>
            <?php } ?>
        </div>
        
        
        
        <div style="clear:both"></div>
    </div>
</div>



<?php
get_footer();
?>