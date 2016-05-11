/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*! Main */
jQuery(document).ready(function() {
    setTimeout(function(){ 
    // Check if body height is higher than window height :)
    if (jQuery("site-content").height() > jQuery(window).height()) {
        jQuery('#footer').addClass('footer-nonstick');
        jQuery('#footer').removeClass('footer-stick');
    }
    if (jQuery("site-content").height() < jQuery(window).height()) {
        jQuery('#footer').removeClass('footer-nonstick');
        jQuery('#footer').addClass('footer-stick');
        
    }
    // Check if body width is higher than window width :)
    if (jQuery("site-content").width() > jQuery(window).width()) {
        //alert("Horizontal Scrollbar! D:<");
    }
    }, 300);
    
});