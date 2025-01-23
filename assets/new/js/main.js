/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var jQuerywindow = jQuery(window)
    , jQueryhtml = jQuery("html")
    , jQuerybody = jQuery('body');
    
function stickynav() {
    var shrinkHeader = 0
        , itemfill = jQuery('nav.fill-black');
    jQuerywindow.scroll(function () {
        if (jQuery(this).scrollTop() > 1) {
            itemfill.addClass("sticky");
            itemfill.removeClass("normal");
        }
        else {
            itemfill.removeClass("sticky");
            itemfill.addClass("normal");
        }
        var scroll = getCurrentScroll();
        if (scroll > shrinkHeader) {
            jQuery('.header-2').addClass('shrink sticky-header');
            jQuery('#logo_scb').attr('src', jQuery('#logo_scb').attr('src_blanc'));
            
        }
        else {
            jQuery('.sticky-header').removeClass('shrink sticky-header');
            jQuery('#logo_scb').attr('src', jQuery('#logo_scb').attr('src_noir'));
        }
    });

    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }
}

jQuery(document).ready(function () {
    "use strict";
    var jQuery = $.noConflict();
//    stickynav();
});