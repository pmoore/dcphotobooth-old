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
        width: 550,
        height: 810,
        modal: true,
        autoOpen: false,
        resizable: false,
        position: 'center'
    });
    
    $('.sample-gallery').click(function(){
        $('#main-sample-image').attr('src',$(this).attr('src'));
        $('#main-image-dialog').dialog('open');        
    });
    
    $('a.sample-gallery').click(function(e){
        console.log('Click');
        e.preventDefault();
    });
    
    $(".ui-widget-overlay").click(function() { 
        console.log("Clicked");
        $('#main-image-dialog').dialog("close"); 
    });
    
    $('#main-image-dialog').bind('clickoutside', function(e){
        $(this).dialog('close');
        console.log("Clicked");
    });
});