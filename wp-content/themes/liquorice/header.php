<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class=" ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="keywords" content="dc, va, md, washington, virginia, maryland, photobooth, photobooths, wedding, weddings, corporate, party, parties, dc photobooth, dc photobooths, washington dc photobooth, washington dc photobooths, washington d.c. photobooth, washington d.c. photobooths, virginia photobooths, virginia photobooth, va photobooths, va photobooth, northern virginia photobooths, northern virginia photobooth, arlington photobooth, arlington photobooths, alexandria photobooth, alexandria photobooths, maryland photobooth, maryland photobooths, dc wedding photobooths" />
        <meta name="description" content="Make your event more fun and memorable with DC Photobooths!  With one of the best photobooths in the business, DC Photobooths provides professional grade photographs with fun props while maintaining a professional and customizable decor that is sure to blend in perfectly with your event." />

        
        <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> <?php if (!wp_title('', true, 'left')) ; { ?> | <?php bloginfo('description'); ?> <?php } ?></title>
        
        <?php if(is_home()){ ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php }else{ ?>            
            <link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/liquorice/style-2.css" />
        <?php } ?>
        
        <!--[if IE]>
            <link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/liquorice/style_ie.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/liquorice/reset.css" />
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="/wp-includes/js/jquery/jquery-ui-1.8.17.custom.min.js"></script>
        <script src="/wp-includes/js/application.js"></script>
        
	<link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin' rel='stylesheet' type='text/css'>
        <link href='/wp-includes/css/jquery-ui-1.8.17.custom.css' rel='stylesheet' type='text/css'>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="icon" type="image/png" href="/wp-content/themes/liquorice/images/dc-favicon.png"/>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
<?php
    wp_head();
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
  ?>
</head>

    <body <?php body_class(); ?> id="<?php echo $pagename ?>" >

        <div id="canvas">  
<?php $options = get_option('liquorice_theme_options'); ?>

            <!--	<div id="social-icons">
            <?php if ($options['twitterurl'] != '') : ?>
                                        <a href="<?php echo $options['twitterurl']; ?>" class="twitter"><?php _e('Twitter', 'liquorice'); ?></a>
            <?php endif; ?>
            
            <?php if ($options['facebookurl'] != '') : ?>
                                        <a href="<?php echo $options['facebookurl']; ?>" class="facebook"><?php _e('Facebook', 'liquorice'); ?></a>
            <?php endif; ?>
            
            <?php if (!$options['hiderss']) : ?>
                                        <a href="<?php bloginfo('rss2_url'); ?>" class="rss"><?php _e('RSS Feed', 'liquorice'); ?></a>
            <?php endif; ?>
                    </div> #social-icons-->



            <ul class="skip">
                <li><a href=".menu">Skip to navigation</a></li>
                <li><a href="#primaryContent">Skip to main content</a></li>
                <li><a href="#secondaryContent">Skip to secondary content</a></li>
                <li><a href="#footer">Skip to footer</a></li>
            </ul>

            <div id="header-wrap">
                <div id="header"> 
<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'h4'; ?>
                    <<?php echo $heading_tag; ?> id="site-title">
                    <span>
                        <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><div id="site-title-div">&nbsp;</div></a>
                    </span>
                    </<?php echo $heading_tag; ?>>
                    
                    <?php if(is_home()){ ?>
                        <div id="site-description"><?php bloginfo('description'); ?></div>   
                    <?php } ?>
                    
                    <!--by default your pages will be displayed unless you specify your own menu content under Menu through the admin panel-->
                    <div class="main-menu">
<?php wp_page_menu(array('sort_column' => 'menu_order', 'container_class' => 'menu-header')); ?>
                    </div>
                </div> <!-- end #header-->

               <?php if ($options['twitterurl'] != '') : ?>
                    <a href="<?php echo $options['twitterurl']; ?>" class="twitter" target="blank"><?php _e('Twitter', 'liquorice'); ?></a>
                <?php endif; ?>

                <?php if ($options['facebookurl'] != '') : ?>
                    <a href="<?php echo $options['facebookurl']; ?>" class="facebook" target="blank"><?php _e('Facebook', 'liquorice'); ?></a>
                <?php endif; ?>

                <?php if (!$options['hiderss']) : ?>
                    <a href="<?php bloginfo('rss2_url'); ?>" class="rss" target="blank"><?php _e('RSS Feed', 'liquorice'); ?></a>
                <?php endif; ?>

            </div> <!-- end #header-wrap-->
            

    



            <script type="text/javascript">
//                $(function(){
//                    $('.twitter, .facebook, .rss').hover(
//                        function(){
//                            $(this).stop().animate({
//                                marginTop: '0px'
//                            },
//                            300
//                        );
//                        },
//                        function(){
//                            $(this).stop().animate({
//                                marginTop: '-20px'
//                            },
//                            300
//                        );
//                    });
//                  
//                  $('#outer-screen-hover').hover(function(){
//                      $(this).css('background-color','blue');
//                  },
//                  function(){
//                      $(this).css('background-color','transparent');
//                  });
//                });

                console.log("Window width: "+$(window).width());
            </script>
