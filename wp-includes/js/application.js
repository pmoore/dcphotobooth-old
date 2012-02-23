/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/*jQuery initializers*/
$(function(){
    $('.home-slideshow').cycle({
        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });
    $('#booth-screen-slideshow').cycle({
        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });
    
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
    $('.postimg').each(function(index){ 
        /*Place pinterest button on img*/
        $(this).data('pinterest_btn',$('#social_toolbox').find('a.addthis_button_pinterest').clone());
        var p = $(this).position();
        $(this).data('pinterest_btn').css({
            display: 'none',
            position: 'absolute',
            top: p.top+15,
            left: p.left+10
        });  
        $(this).data('pinterest_btn').attr('pi:pinit:media',$(this).attr('src'));        
        $(this).closest('.post').append($(this).data('pinterest_btn'));
        
        $(this).mouseover(
            function(){    
                clearTimeout($(this).data('pinterest_btn').data('pinhide_timeout'+index));
                $(this).data('pinterest_btn').fadeIn(400);
        }).mouseout(
            function(){
                pin_btn = $(this).data('pinterest_btn');
                var pinhide_timeout = setTimeout(function(){pin_btn.fadeOut(400)}, 100);
                $(this).data('pinterest_btn').data('pinhide_timeout'+index, pinhide_timeout);
        });
        $(this).data('pinterest_btn').mouseover(
            function(){
                clearTimeout($(this).data('pinhide_timeout'+index));
            }).mouseout(
            function(){
                //mouse out handler
        });
    });
    
}); //end initializers