/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/*jQuery initializers*/
$(function(){
    
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
    
    
});