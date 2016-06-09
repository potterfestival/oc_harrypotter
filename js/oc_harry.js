/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*! Main */
jQuery(document).scroll(function(e){
    /*
     * Keep navnbar on top while scrolling
     */
    var scrollTop = jQuery(document).scrollTop();
    if(scrollTop > 0){
        console.log(scrollTop);
        jQuery('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
    } else {
        jQuery('.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
    }
});
/*
 * Main ready
 */
jQuery(document).ready(function(){
    /*
     * Make translation dialog close on selection
     */
    jQuery('body').on('click','.gtflag',function(){
        jQuery('#gtranslate').modal('hide');
    })
    jQuery('body').on('click','.nturl',function(){
        jQuery('#gtranslate').modal('hide');
    })
    
    
});