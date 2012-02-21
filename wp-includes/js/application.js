/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/*jQuery initializers*/
$(function(){
    
    /*GOOGLE ANALYTICS*/
    var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-29355521-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    
    
    $('#index-header').hover(function(){
        $(this).find('.home-section-action').css('text-decoration','underline');
    },
    function(){
        $(this).find('.home-section-action').css('text-decoration','none');
    });
    
    $('#main-image-dialog').dialog({
        closeOnEscape: true,
//        title: '<%=  image_tag("navbar/logintitle.png") %>',
        closeText: "",
        width: 440,
        height: 640,
        modal: true,
        autoOpen: false,
        resizable: false,
        position: 'center',
        dialogClass: 'sample-gallery-container'
    });
    
    $('.sample-gallery').click(function(){
        $('#main-sample-image').attr('src',$(this).attr('src'));
        $('#main-image-dialog').dialog('open'); 
        
        //Attach click listener to overlay only after its been loaded
        $('.ui-widget-overlay').click(function() { 
            $('#main-image-dialog').dialog('close'); 
        });
    });
    
    $('#contact-form').submit(function(){
        $.post(
            '/wp-content/themes/liquorice/mail.php',
            {
                name: $('#username').val(),
                from: $('#usermail').val(),
                subject: $('#subject').val(),
                website: $('#usersite').val(),
                date: $('#userdate').val(),
                message: $('#message').val()
            },
            function(response){
                alert(response);
            }
        );  
        return false;
    });
    
    $('#userdate').datepicker({
        dateFormat: 'mm/dd/yy',
        minDate: '-50y',
        maxDate: '+50y'
    });
    
    // options
    var distance = 10;
    var time = 250;
    var hideDelay = 200;
    var hideDelayTimer = null;
    // tracker
    var beingShown = false;
    var shown = false;
    $('.booth-info').each(function () {
        var trigger = $('.trigger', this);
//        var popup = $('.popup', this).css('opacity', 0);

        trigger.each(function(index, trig){
            var pop = $(trig).next().css('opacity', 0);;
            // set the mouseover and mouseout on both element
            $([trig, pop]).mouseover(function () {
            // stops the hide event if we move from the trigger to the popup element
            if (hideDelayTimer) clearTimeout(hideDelayTimer);

            // don't trigger the animation again if we're being shown, or already visible
            if (beingShown || shown) {
                return;
            } else {
                beingShown = true;
                var top_position = $(trig).data('popuptop');
                var right_position = $(trig).data('popupright');
                // reset position of popup box
                pop.css({
                    top: top_position,
                    right: right_position,
                    display: 'block' // brings the popup back in to view
                })

                // (we're using chaining on the popup) now animate it's opacity and position
                .animate({
                    top: '-=' + distance + 'px',
                    opacity: 1
                }, time, 'swing', function() {
                    // once the animation is complete, set the tracker variables
                    beingShown = false;
                    shown = true;
                });
            }
            }).mouseout(function () {
                // reset the timer if we get fired again - avoids double animations
                if (hideDelayTimer) clearTimeout(hideDelayTimer);

                // store the timer so that it can be cleared in the mouseover if required
                hideDelayTimer = setTimeout(function () {
                    hideDelayTimer = null;
                    pop.animate({
                        top: '-=' + distance + 'px',
                        opacity: 0
                    }, time, 'swing', function () {
                        // once the animate is complete, set the tracker variables
                        shown = false;
                        // hide the popup entirely after the effect (opacity alone doesn't do the job)
                        pop.css('display', 'none');
                    });
                }, hideDelay);
            });
        });
        
        
    });
    
    var all_showing = false;
    $('#booth-show-all').click(function(e){
        e.preventDefault();
        
        if(all_showing){
             $('.popup').each(function(i, t){
                $(t).animate({
                    opacity: 0
                }, 250, 'swing', function() {
                    // once the animation is complete, set the tracker variables
                    shown = false;
                }).css('display', 'none');;
                all_showing=false;
             });      
        }else{
            $('.popup').each(function(i, t){
                $(t).css({
                    display: 'block',
                    top: $(t).prev('.trigger').data('popuptop'),
                    right: $(t).prev('.trigger').data('popupright')
                }).animate({
                    top: $(t).data('popuptop'),
                    right: $(t).data('popupright'),
                    opacity: 1
                }, 250, 'swing', function() {
                    // once the animation is complete, set the tracker variables
                    beingShown = false;
                    shown = true;
                });
                all_showing=true;
            })
        }
        
    });
    
    var navul = $('#main-menu').find('ul');
//    console.log($('#main-menu').width());
//    setTimeout(console.log(navul.width()), 5000);
//    setTimeout(console.log($('#main-menu').width() - navul.width()), 6000);
    setTimeout(function() {
        $('#main-menu').find('ul').css('margin-left',($('#main-menu').width()-$('#main-menu').find('ul').width())/2+"px");
        $('#main-menu').find('ul').css('visibility','visible');
    }, 100);
    
    
}); //end initializers