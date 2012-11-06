/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/*jQuery initializers*/
$(function(){
    $('.home-slideshow').cycle({
        fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        timeout: 6000
    });
    $('#booth-screen-slideshow').cycle({
        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });
    $('#temp-image-filler').cycle({
        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });
    $('#booth-images-cycle').cycle({
        fx: 'fade'
    });
    
    $('#index-header').hover(function(){
        $(this).find('.home-section-action').css('text-decoration','underline');
    },
    function(){
        $(this).find('.home-section-action').css('text-decoration','none');
    });
    
    /* Sample Gallery Initializers */
    $('#main-image-dialog').dialog({
        closeOnEscape: true,
        closeText: "",
        width: 440,
        height: 680,
        modal: true,
        autoOpen: false,
        resizable: false,
        position: 'center',
        dialogClass: 'sample-gallery-container',
        close: function(){ $('#main-image-share').empty(); }
    });
    
    
    /* AddThis with Pinterest with each sample image */
    
    $('.sample-gallery').click(function(){
        var tbx = document.getElementById("main-image-share"),
            svcs = {email: 'Email', print: 'Print', facebook: 'Facebook', expanded: 'More'};

        tbx.innerHTML += '<a class="addthis_button_pinterest" pi:pinit:url="http://www.dc-photobooth.com'+ window.location.pathname +'" pi:pinit:media="' + $(this).data('large-src') + '" pi:pinit:layout="horizontal" style="outline:none;"></a>'+
                '<a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="' + $(this).data('large-src') + '"></a>'+
                '<a class="addthis_button_tweet" addthis:url="' + $(this).data('large-src') + '"></a>'
            ;
        

        addthis.toolbox("#main-image-share");

        /*change main image*/
        $('#main-sample-image').attr('src',$(this).data('large-src'));
        $('#main-image-dialog').dialog('open'); 
        
        //Attach click listener to overlay only after its been loaded
        $('.ui-widget-overlay').click(function() { 
            $('#main-image-dialog').dialog('close'); 
        });
    });
    
    
    /* Contact Form Initializers */
    $('#contact-form').submit(function(){
        $.post(
            '/wp-content/themes/liquorice/mail.php',
            {
                name: $('#username').val(),
                from: $('#usermail').val(),
                subject: $('#subject').val(),
                date: $('#userdate').val(),
                location: $('#userlocation').val(),
                message: $('#message').val(),
                referrer: $('#referrer').val()
            },
            function(response){
                alert(response);
                window.location = "../";
            }
        );  
        return false;
    });
    
    $('#userdate').datepicker({
        dateFormat: 'mm/dd/yy',
        minDate: '-50y',
        maxDate: '+50y'
    });
    
    /*Booth Hover Over Initializers*/
    $boothdialog =  $('#booth-popup').dialog({
                        modal: false,
                        autoOpen: false,
                        resizable: false,
                        draggable: false,
                        width: 230,
                        height: 'auto',
                        minHeight: '10px',
                        open: function(event, ui){
                            $(this).closest(".ui-dialog").dialog("moveToTop").find('.ui-dialog-titlebar').remove();
                        }
                    });
    
    
    $('.booth-trigger').each(function(index){
        $(this).hover(
            function(event){
                $boothdialog.empty().append($(this).next('.booth-popup-content').css('display','block'));
                
                
                $boothdialog.dialog("option", "position", {
                    my:"left top",
                    at:"right top",
                    of:event,
                    offset:"20 20"
                });
                $boothdialog.dialog("open");
            },
            function(event){ 
                $boothdialog.find('.booth-popup-content').css('display','none').insertAfter($(this));
                $boothdialog.dialog("close");
            }
        );
    });
    
    
    var navul = $('#main-menu').find('ul');
    setTimeout(function() {
        $('#main-menu').find('ul').css('margin-left',($('#main-menu').width()-$('#main-menu').find('ul').width())/2+"px");
        $('#main-menu').find('ul').css('visibility','visible');
    }, 300);
    
    
    
    /* Pinterest button on hover of postimgs */
    $('.post .postimg').each(function(index){ 
        /*Place pinterest button on img*/
//        $(this).data('pinterest_btn',$('#social_toolbox').find('a.addthis_button_pinterest').clone());
        var p = $(this).position();
//        $(this).data('pinterest_btn').css({
//            display: 'none',
//            position: 'absolute',
//            top: p.top+15,
//            left: p.left+10
//        });  
//        $(this).data('pinterest_btn').attr('pi:pinit:media',$(this).attr('src'));        
//        $(this).closest('.post').append($(this).data('pinterest_btn'));
//        
//        $(this).mouseover(
//            function(){    
//                clearTimeout($(this).data('pinterest_btn').data('pinhide_timeout'+index));
//                $(this).data('pinterest_btn').fadeIn(400);
//        }).mouseout(
//            function(){
//                pin_btn = $(this).data('pinterest_btn');
//                var pinhide_timeout = setTimeout(function(){pin_btn.fadeOut(400)}, 100);
//                $(this).data('pinterest_btn').data('pinhide_timeout'+index, pinhide_timeout);
//        });
//        $(this).data('pinterest_btn').mouseover(
//            function(){
//                clearTimeout($(this).data('pinhide_timeout'+index));
//            }).mouseout(
//            function(){
//                //mouse out handler
//        });
//      
        var pinit_html = '<div style="display: none; position: absolute; top: '+(p.top+15)+'px; left: '+(p.left+10)+'px;" id="pinit-container-'+index+'"><a class="addthis_button_pinterest" pi:pinit:url="http://www.dc-photobooth.com'+ window.location.pathname +'" pi:pinit:media="' + $(this).attr('src') + '" pi:pinit:layout="horizontal" style="outline:none;"></a></div>';
        
        $(this).closest('.post').append(pinit_html);

        $(this).mouseover(
            function(){
                clearTimeout($('#pinit-container-'+index).data('pinhide_timeout'+index));
                $('#pinit-container-'+index).fadeIn(400);
            }).mouseout(
            function(){
                var pinhide_timeout = setTimeout(function(){$('#pinit-container-'+index).fadeOut(400)}, 400);
                $('#pinit-container-'+index).data('pinhide_timeout'+index, pinhide_timeout);
            });
        $('#pinit-container-'+index).hover(
            function(){
                clearTimeout($(this).data('pinhide_timeout'+index));
            },
            function(){
//                $('#pinit-container-'+index).fadeOut(400);
            });
    });
    
    
    
    /*SEO Initializers*/
    $('.seo-container').hover(
        function(){            
            $(this).find('.seo-text').stop().animate({
                height: '175px'
            }, 1500);
        },
        function(){
            $(this).find('.seo-text').stop().animate({
                height: '1.4em'
            }, 1500);
    });
    
}); //end initializers

var reviewCount = 1;

$('.ww-review-box').ready(function($){
    setTimeout(function(){
        $('.ww-review-content').each(function(){
            $(this).clone().addClass("bubble-left").appendTo('#home-reviews-container');
            $('#home-reviews-all').show();
        });
        
        $('.ww-reviews-header-box-right').each(function(){
            $(this).clone().attr("id", "home-reviews-count-text").appendTo('#home-reviews-count');
        });
        $('#home-reviews-count-text a').text($('#home-reviews-count-text').text()+" total on WeddingWire");
        
        $('#home-reviews-prev-container').addClass('disabled');
        
    }, 500);
    
    $('#home-reviews-next-container').click(function(e){
        if(reviewCount < 3){
            reviewCount++;
            $('#home-reviews-container').css('margin-left', parseInt($('#home-reviews-container').css('margin-left'))-824);
            $('#home-reviews-prev-container').removeClass('disabled');
            if(reviewCount == 3)
                $('#home-reviews-next-container').addClass('disabled');
        }
        
    });
    $('#home-reviews-prev-container').click(function(e){
        if(reviewCount > 1){
            reviewCount--;
            $('#home-reviews-container').css('margin-left', parseInt($('#home-reviews-container').css('margin-left'))+824);
            $('#home-reviews-next-container').removeClass('disabled');
            if(reviewCount == 1)
                $('#home-reviews-prev-container').addClass('disabled');
        }
        
    });
})