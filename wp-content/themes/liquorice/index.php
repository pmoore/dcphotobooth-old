<?php

    $main_images = array (  'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_035157-688x1024.jpg', 
                            'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_042514-688x1024.jpg',
                            'http://www.dc-photobooth.com/wp-content/uploads/2012/03/20000101_011205-1764617195-O-688x1024.jpg',
                            'http://www.dc-photobooth.com/wp-content/uploads/2012/05/20000101_023552-688x1024.jpg',
                            'http://www.dc-photobooth.com/wp-content/uploads/2012/04/20000101_030427-688x1024.jpg',
                            'http://www.dc-photobooth.com/wp-content/uploads/2012/06/20000101002941-688x1024.jpg'
    );

  get_header();
?>
  
<script type="text/javascript" src="http://static.weddingwire.com/static/js/widgets/mobileRedirect.js"></script><script type="text/javascript"><!--
        WeddingWire.mobile.detectMobile({"storefrontURL":"/website/dc-photobooth-washington-baltimore/d2e61fd51540494f.html"});
        --></script>
  
  <div id="primaryContent" class="index">
<!--      <img src="wp-content/themes/liquorice/images/like-arrow.png" id="social-like-arrow">-->
<!--      <img src="wp-content/themes/liquorice/images/booth/stock-dark-2-small.png" class="stock-img-2">-->
<!--      <img src="wp-content/themes/liquorice/images/booth/stock-dark-small.png" class="stock-img">-->
      
      
      
      <div id="index-social-container" style="width:285px; float:right;">
          <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style" id="image_social_toolbox" style="width:325px; text-align: center; margin: 0px auto; float:left;">
            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet"></a>
            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
        </div>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f18708410c8b891"></script>
        <!-- AddThis Button END -->
          
      </div>
      <div style="clear:both"></div>
          
<!--      Header for home page as needed -->
<!--      <a href="http://dc-photobooth.smugmug.com/Weddings/The-Wedding-Salon/25305705_fjvgXN" style="text-decoration: none;" target="blank" id="index-header-link" title="DC Photobooth at the Wedding Salon Bridal Show">
      <div id="index-header">
          <div class="home-section-header">The Wedding Salon Bridal Show</div>          
          <div class="home-section-description">Looking for your photos from the Wedding Salon Bridal Show at the Madison Hotel in DC?&nbsp;&nbsp;Look no further!<br/>Click here to find your photo and view the rest of them from the evening!</div>          
          <div class="home-section-description"  style="text-align:center; display: none;"><img src="/wp-content/themes/liquorice/images/bridal_shows/sheraton-horizontal.png" alt="DC Photobooth at Sheraton Baltimore North Hotel" style="margin:10px 0"></div>
          <div class="home-section-action" style="padding-right: 0px; margin-bottom: 0px;">find my photos &raquo;</div>
      </div>
      </a>-->
      
      <div style="clear:both"></div>
      
      <div id="index-left" class="home-slideshow mobile-collapse" style="margin-left: 20px;">
          <a class="home-slideshow-ad" href="http://www.weddingwire.com/reviews/dc-photobooth-washington-baltimore/d2e61fd51540494f.html" target="_blank">
              <div class="home-ad-header">DC Photobooth awarded a 2015</div>
              <div class="home-ad-sub-header" style="font-size: 30px">Bride's Choice Award</div>
              <div class="home-ad-sub-header">from WeddingWire!</div>
              <div class="award-badge">
                  <img src="http://static.weddingwire.com/static/images/badges/BCA-2015/BCA-logo.gif" />
              </div>                               
          </a>
          
<!--          <a class="home-slideshow-ad" href="/contact">
              <div class="home-ad-header">Having an event in <?php echo date("F", strtotime("+1 months")); ?>?</div>
              <div class="home-ad-sub-header" style="font-size: 30px">Get $200 Off!</div>
              <div class="home-ad-sub-header">Click Here to Contact Us</div>
          </a>-->
          
          <?php 
                foreach ( array_slice($main_images, 0, 2) as $key=>$img ) { ?>
                    <img src="<?php echo $img ?>" alt="DC Photobooth, Photobooth Rentals" class="pageimg" width="340" height="530">
                <?php
                }
            ?>
                    
          <a class="home-slideshow-ad" href="/contact">
              <div class="home-ad-header">Having an event in <?php echo date("F", strtotime("+1 months")); ?>?</div>
              <div class="home-ad-sub-header" style="font-size: 30px">Get $200 Off!</div>
              <div class="home-ad-sub-header">Click Here to Contact Us</div>
          </a>
          
          <?php 
                foreach ( array_slice($main_images, 2, 2) as $key=>$img ) { ?>
                    <img src="<?php echo $img ?>" alt="DC Photobooth, Photobooth Rentals" class="pageimg" width="340" height="530">
                <?php
                }
            ?>
                    
          <a class="home-slideshow-ad" href="/contact">
              <div class="home-ad-header">Having an event in <?php echo date("F", strtotime("+1 months")); ?>?</div>
              <div class="home-ad-sub-header" style="font-size: 30px">Get $200 Off!</div>
              <div class="home-ad-sub-header">Click Here to Contact Us</div>
          </a>                
                    
          <?php 
                foreach ( array_slice($main_images, 4, 2) as $key=>$img ) { ?>
                    <img src="<?php echo $img ?>" alt="DC Photobooth, Photobooth Rentals" class="pageimg" width="340" height="530">
                <?php
                }
            ?>
          
      </div>
      
      <div id="index-right">
          <div class="home-section">
              
              <div class="home-right-bar">
                <div id="index-event-photos-link">
                    <div id="index-event-photos-link-inner">
                            <a href="/event-photos">Find Your Photos</a>
                    </div>
                </div>

                <div id="bca-2015">
                  <link href='//www.weddingwire.com/assets/global/widget.css' rel='stylesheet' type='text/css'>
                  <div class='ww-bca-2015 ww-reset'>
                  <a class="ww-bca-top" href="http://www.weddingwire.com" title="WeddingWire"><img alt="WeddingWire" src="//www.weddingwire.com/assets/badges/BCA-2015/BCA_2015-badge-top.png" />
                  </a><a class="ww-bca-bottom" href="http://www.weddingwire.com/reviews/dc-photobooth-washington-baltimore/d2e61fd51540494f.html" title="DC Photobooth Reviews, Best Wedding Event Rentals in Washington DC - 2015 Couples&#39; Choice Award Winner"><img alt="DC Photobooth Reviews, Best Wedding Event Rentals in Washington DC - 2015 Couples&#39; Choice Award Winner" src="//www.weddingwire.com/assets/badges/BCA-2015/BCA_2015-badge-bottom.png" />
                  </a><div class='ww-clear'>
                  &nbsp;
                  <img alt="" height="1" src="//www.weddingwire.com/apis/v3/tracker?partner_key=163r5mm3&amp;target_id=d2e61fd51540494f&amp;type=bca_2015" width="1" />
                  </div>
                  </div>
                </div>
                  
                <div id="bca-2014"> 
                  <link href='//www.weddingwire.com/assets/global/widget.css' rel='stylesheet' type='text/css'>
                    <div class='ww-bca-2014 ww-reset'>
                    <a class="ww-bca-top" href="http://www.weddingwire.com" title="Weddings, Wedding Venues"><img alt="Weddings, Wedding Venues" src="//www.weddingwire.com/assets/badges/BCA-2014/BCA_2014-badge-top.png" />
                    </a><a class="ww-bca-bottom" href="http://www.weddingwire.com/reviews/dc-photobooth-washington-baltimore/d2e61fd51540494f.html" title="DC Photobooth Reviews, Best Wedding Event Rentals in Washington DC - 2014 Couples&#39; Choice Award Winner"><img alt="DC Photobooth Reviews, Best Wedding Event Rentals in Washington DC - 2014 Couples&#39; Choice Award Winner" src="//www.weddingwire.com/assets/badges/BCA-2014/BCA_2014-badge-bottom.png" />
                    </a><div class='ww-clear'>
                    &nbsp;
                    </div>
                    <img alt="" height="1" src="//www.weddingwire.com/apis/v3/tracker?partner_key=163r5mm3&amp;target_id=d2e61fd51540494f&amp;type=bca_2014" width="1" />
                    </div>
                </div>  

                <!-- BCA Award -->
                <div id="bca-2013">
                <link rel='stylesheet' type='text/css' href='http://wwcdn.weddingwire.com/static/css/wireWidgets.css' /><div class='ww-bca-2013 ww-reset'><a class='ww-bca-top' href='http://www.weddingwire.com' title='Weddings, Wedding Venues'><img src='http://wwcdn.weddingwire.com/static/images/badges/BCA-2013/BCA_2013-badge-top.png' alt='Weddings, Wedding Venues' /></a><a class='ww-bca-bottom' href='http://www.weddingwire.com/reviews/dc-photobooth-washington-baltimore/d2e61fd51540494f.html' title="DC Photobooth, Best Wedding Event Rentals in Baltimore - 2013 Bride's Choice Award Winner"><img src='http://wwcdn.weddingwire.com/static/images/badges/BCA-2013/BCA_2013-badge-bottom.png' alt="DC Photobooth, Best Wedding Event Rentals in Baltimore - 2013 Bride's Choice Award Winner" /></a><div class='ww-clear'>&nbsp;</div></div><img src='//api.weddingwire.com/api/v3/Tracker.gif?target_id=d2e61fd51540494f&type=bca_2013&partner_key=163r5mm3' width='1' height='1' />
                </div>

                <div id="theknot2013">
                    <img src="/wp-content/themes/liquorice/images/badges/theknotbestof.gif" />
                </div>        

                <div class="ww-rated">
                  <script src='//www.weddingwire.com/assets/vendor/widgets/ww-rated-2013.js' type='application/javascript'></script><div id='ww-widget-wwrated-2013'><a class="ww-top" href="http://www.weddingwire.com" target="_blank" title="Weddings, Wedding, Wedding Venues"></a><a class="ww-bottom" href="http://www.weddingwire.com/reviews/dc-photobooth-washington-baltimore/d2e61fd51540494f.html" target="_blank" title="DC Photobooth Reviews, Washington DC, Maryland, Northern Virginia Event Rentals &amp; Photobooths"></a></div><script>  WeddingWire.ensureInit(function() {WeddingWire.createWWRated2013({"vendorId":"d2e61fd51540494f" }); });</script>
                </div>      

                <!--              WeddingWire Rated-->
                <script type="text/javascript" src="http://wwcdn.weddingwire.com/static/js/widgets/wwrated/2012.js"></script><div id="ww-widget-wwrated-2012" class="ww-reset ww-widget-wwrated-2012"><a target="_new" href="http://www.weddingwire.com/reviews/dc-photobooth-washington-baltimore/d2e61fd51540494f.html" title='DC Photobooth Reviews , Baltimore Event Rentals & Photobooths'>  <img class="ww-top" src="http://wwcdn.weddingwire.com/static/images/badges/ww-rated/2012/WW-RATED12-blue-top.png" alt="WeddingWire Rated 2012"></a><a target="_new" href="http://www.weddingwire.com" title="Weddings, Wedding, Wedding Venues">  <img class="ww-bottom" src="http://wwcdn.weddingwire.com/static/images/badges/ww-rated/2012/WW-RATED12-blue-bottom.png" alt="Weddings, Wedding, Wedding Venues"></a><div class="ww-clear"> </div></div><script type="text/javascript"><!--
                    WeddingWire.ensureInit(function() {WeddingWire.createWWRated2012({"vendorId":"d2e61fd51540494f", "divId":"ww-widget-wwrated-2012"});});
                    --></script>


                
              </div>


              
              <div class="home-section-header">1) why dc photobooth?</div>
              <div class="home-section-description">Looking to rent a photobooth for your wedding, corporate party, or other event?  With the best photobooth in the business, fantastic props and a fun and professional staff, our booth is able to capture those memorable moments of your event in the highest quality possible.  </div>
              <div class="home-section-action"><a href="http://www.weddingwire.com/reviews/dc-photobooth-washington-baltimore/d2e61fd51540494f.html" target="_blank" title="DC Photobooth's reviews">read our reviews &raquo;</a></div>
              
              <div class="home-section-action"></div>
          </div>
          <div class="dc-border home">&nbsp;</div>
          <div class="home-section">
              <div class="home-section-header">2) book us for your event</div>
              <div class="home-section-description">Finally come to your senses and realize we're the most fun and have the best photobooth in town?  Great!  Now check out our packages to find out which one is best for your event</div>
              <div class="home-section-action"><a href="/photobooth-packages" title="Photobooth packages">choose a package &raquo;</a></div>
              <div class="home-section-description">Once you have a package in mind, give us a call or shoot us a message to start the booking process.  Feel free to bring up any questions or concerns.</div>
              <div class="home-section-action"><a href="/contact" title="Contact DC Photobooth">send us a message &raquo;</a></div>
          </div>
          <div class="dc-border home">&nbsp;</div>
          <div class="home-section">
              <div class="home-section-header">3) find your event photos</div>
              <div class="home-section-description">We host all images from our events on a secure, password protected location.  To view your event's photos you'll just need the password provided to you by DC Photobooth at the time of the event.</div>
              <div class="home-section-action"><a href="/event-photos" title="DC Photobooth Event Photos">find my photos &raquo;</a></div>
          </div>
          <div class="dc-border home">&nbsp;</div>
          
          
      </div>
      
      <?php $options = get_option('liquorice_theme_options'); ?>
      <div style="clear:both"></div>
      <div class="home-section">
        <div class="home-section-header">4) keep up with us</div>
        <div class="home-section-description">Follow our blog to see where we've been, where we're going and to check out some of our images from past events!  Also be sure to follow our Facebook and Twitter pages for chances to win great prizes!</div>
        <div class="home-section-action"><a href="<?php echo $options['facebookurl']; ?>" target="blank" title="DC Photobooth Facebook">facebook</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="<?php echo $options['twitterurl']; ?>" target="blank" title="DC Photobooth Twitter">twitter</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="/blog"  title="DC Photobooth Blog">blog &raquo;</a></div>
      </div>
      
      <div class="dc-border home">&nbsp;</div>
      
      <div id="home-reviews-all" name="home-reviews-all">
        <div class="home-section-header">Read Some of Our Reviews:</div>
        <div id="home-reviews-prev-container"><div id="home-reviews-prev"></div></div>
        <div id="home-reviews-next-container"><div id="home-reviews-next"></div></div>
        <div id="home-reviews"><div id="home-reviews-container"></div></div>
        <div class="home-reviews-footer">
            <div style="float:left" id="home-reviews-count"></div>
            <div style="float:right"><a href="http://www.weddingwire.com/reviews/dc-photobooth-washington-baltimore/d2e61fd51540494f.html" target="_blank">Read All Our Reviews &raquo;</a></div>
        </div>
      </div>
      <div style="clear:both"></div>
      
      
      <div class="home-section bottom seo-container" id="home-seo-container">
          <div class="seo-text">
              Planning a wedding, corporate event, holiday party, grand opening or some other shindig in the Washington DC, Northern Virginia, Baltimore or Southern Maryland areas?  What a better way to make your event more memorable than by providing a fun, quick way for you and your guests to take their pictures and create some memories?  Renting a photobooth from DC Photobooth will bring the fun at your event to the next level.  We are the premiere Washington DC photobooth rental company.  We have one of the best photobooths in the industry and we focus on making your event easier for you to maintain by making it more fun for you and your guests.  DC Photobooth is owned and operated by 3 fun and professional gentlemen who have experience in the wedding and event planning industries.  We will strive to make your event one that your guests are sure to remember, without increasing the stress on you or your wallet.  
              <br/><br/>
              DC Photobooth - The Premiere Wedding Photobooth Rental, Event Photobooth Rental Company in Washington DC, Northern Virginia, Baltimore and Southern Maryland
          </div>
          <div class="seo-show-more">
              (hover for more)
          </div>
      </div>
      
      <script type="text/javascript" src="http://wwcdn.weddingwire.com/static/js/widgets/myReviews.js"></script><div id="ww-widget-reviews" class="ww-reset ww-reviews-widget"><div class="ww-reviews-placeholder">Read all of our <a target="_new" href="http://www.weddingwire.com/biz/dc-photobooth-washington-baltimore/d2e61fd51540494f.html">Wedding Rentals, Unique Wedding Services Reviews</a> at <a target="_new" href="http://www.weddingwire.com"><img src="http://wwcdn.weddingwire.com/static/images/logo/WWlogo-83x19.gif" alt="Weddings, Wedding Cakes,  Wedding Planning, Wedding Checklists, Free Wedding Websites, Wedding Dresses, Wedding Ideas & more"/></a></div></div><script type="text/javascript"><!--
        WeddingWire.createReview({"vendorId":"d2e61fd51540494f", "id":"ww-widget-reviews"});
        --></script>
      
  </div>
  
<?php
  get_footer();
?>