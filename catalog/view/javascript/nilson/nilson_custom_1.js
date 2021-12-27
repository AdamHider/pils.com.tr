/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var parallax_class = '';

var Parallax = {
    scrollFollowY: 0,
    y: 0,
    friction: 1/2,
    current_tick: 0,
    lastScrollTop: 0,
    scrollDirection: 'down',
    modifier: 1.8,
    isScrolling: false,

    init: function(){
        jQuery('#content .container.page-builder-ltr .row, #content .container-fluid.page-builder-ltr .row').each(function(e){
            $(this.parentElement).css({
                //height: this.getBoundingClientRect().height + 'px'
            });
        });
        
    },
    
    moveBackground: function() {
        jQuery('.so-page-builder .container:nth-child(4)').each(function(e){
            if(Parallax.isElementInViewport(this)){
                jQuery('body').addClass('step-by-step');
            } else {
                if(jQuery('body').hasClass('step-by-step')){
                    setTimeout(function(){
                        //document.getElementsByClassName('box-content3')[0].scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
                    }, 100);
                }
                jQuery('body').removeClass('step-by-step');
            }
        });
        Parallax.y = (Parallax.scrollFollowY) * Parallax.friction;
        jQuery('.parallax-layer').each(function(e){
            var depth = jQuery(this).attr('data-depth')*Parallax.y;
            jQuery(this).css({
                'transform': ' translate3d(0px, ' + depth + 'px, 0px)'
            });
        });
        jQuery('#content .container.page-builder-ltr .module.harita ').each(function(e){
            if(Parallax.isElementInViewport(this)){
                jQuery('#content .container.page-builder-ltr .row').addClass('blackened');
            } else {
                jQuery('#content .container.page-builder-ltr .row').removeClass('blackened');
            }
        });
        jQuery('#content .container.page-builder-ltr .so-categories ').each(function(e){
            if(Parallax.isElementInViewport(this)){
                jQuery('#content .container.page-builder-ltr .row').addClass('oranged');
            } else {
                jQuery('#content .container.page-builder-ltr .row').removeClass('oranged');
            }
        });
         
        jQuery('#header').each(function(e){
            if(jQuery(document).scrollTop() > 0){
                jQuery(this).addClass('fixed-header');
            } else {
                jQuery(this).removeClass('fixed-header');
            }
        });
        Parallax.checkScrollDirection();
        Parallax.checkElementsVisibility();
        window.requestAnimationFrame(Parallax.moveBackground);
    },

    checkElementsVisibility: function(){
        var breakpoint = 70;
        jQuery('.so-page-builder > .container-fluid').each(function(e){
            var active_element = document.querySelector('.so-page-builder > .container-fluid.active');
            if(!active_element){
                var last_block = document.querySelectorAll('.so-page-builder .container')[0];
                if(!Parallax.isElementInViewport(last_block)){
                    jQuery(last_block).addClass('active');
                    active_element = last_block;
                }
            }
            if((Parallax.scrollDirection == 'down' || Parallax.scrollDirection == 'neutral') && !Parallax.isScrolling){
                if(active_element && active_element.getBoundingClientRect().top < -breakpoint){
                    Parallax.isScrolling = true;
                    setTimeout(function(){
                        if(active_element.nextElementSibling){
                            Parallax.scrollToElement(active_element.nextElementSibling);
                        }
                        setTimeout(function(){
                            Parallax.isScrolling = false;
                        }, 400);
                    }, 100);
                } 
            } else 
            if((Parallax.scrollDirection == 'up' || Parallax.scrollDirection == 'neutral')  && !Parallax.isScrolling){
                if(active_element && active_element.getBoundingClientRect().top > breakpoint){
                    Parallax.isScrolling = true;
                    setTimeout(function(){
                        if(active_element.previousElementSibling){
                            Parallax.scrollToElement(active_element.previousElementSibling);
                        }
                        setTimeout(function(){
                            Parallax.isScrolling = false;
                        }, 400);
                    }, 100);
                } 
            } 
        });
    },
    scrollToElement: function (node){
        jQuery("#wrapper").animate({
            scrollTop: node.offsetTop
          }, 300)
        jQuery('.so-page-builder > .container').removeClass('active');
        jQuery('.so-page-builder > .container-fluid').removeClass('active');
        jQuery(node).addClass('active');
    },
    isElementInViewport: function(el) {
            return el.getBoundingClientRect().top <= 0;
    },
    isElementInViewportTop: function(el) {
            return el.getBoundingClientRect().top <= 0;
    },
    isElementInViewportBottom: function(el) {
            return el.getBoundingClientRect().top <= 0;
    },
    
    browserDetect: function(){
        // Opera 8.0+
        var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
        if(isOpera){ return 'Opera'; }
        // Firefox 1.0+
        var isFirefox = typeof InstallTrigger !== 'undefined';
        if(isFirefox){ return 'Firefox'; }
        // Safari 3.0+ "[object HTMLElementConstructor]" 
        var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && window['safari'].pushNotification));
        if(isSafari){ return 'Safari'; }
        // Internet Explorer 6-11
        var isIE = /*@cc_on!@*/false || !!document.documentMode;
        if(isIE){ return 'IE'; }
        // Edge 20+
        var isEdge = !isIE && !!window.StyleMedia;
        if(isEdge){ return 'Edge'; }
        // Chrome 1 - 79
        var isChrome = !!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime);
        if(isChrome){ return 'Chrome'; }
        // Edge (based on chromium) detection
        return false;
    },
    checkScrollDirection: function(){
        var current_scroll = document.querySelector('#wrapper').scrollTop;
        if (Parallax.lastScrollTop < current_scroll) {
            Parallax.scrollDirection = 'down';
        } else if (Parallax.lastScrollTop > current_scroll) {
            Parallax.scrollDirection = 'up';
        } else if (Parallax.lastScrollTop == current_scroll) {
            Parallax.scrollDirection = 'neutral';
        }
        Parallax.lastScrollTop = current_scroll;
    }
}
jQuery(document).ready(function(){
    var clientHeight = jQuery( window ).height();
    jQuery('#wrapper').css('max-height', clientHeight);
    jQuery('body').css('max-height', clientHeight);
    Parallax.currentBrowser = Parallax.browserDetect();
    jQuery('.so-page-builder > .container-fluid:first-child').addClass('active');
    jQuery("#wrapper").scroll(function(e) {
        var scrollY = jQuery("#wrapper").scrollTop();
        Parallax.scrollFollowY = scrollY;
    });
    Parallax.moveBackground();
    //blogRandomizer.randomize();
});



