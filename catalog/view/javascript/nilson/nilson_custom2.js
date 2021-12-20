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

    init: function(){
        jQuery('#content .container.page-builder-ltr .row, #content .container-fluid.page-builder-ltr .row').each(function(e){
            $(this.parentElement).css({
                height: this.getBoundingClientRect().height + 'px'
            });
        });
        
        jQuery(document).scroll(function(e) {
            var scrollY = jQuery(document).scrollTop();
            Parallax.scrollFollowY = scrollY;
            Parallax.checkElementsVisibility();
        });
    },
    
    moveBackground: function() {
        Parallax.y = (Parallax.scrollFollowY) * Parallax.friction;
        jQuery('.parallax-layer').each(function(e){
            var depth = jQuery(this).attr('data-depth')*Parallax.y;
            jQuery(this).css({
                'transform': ' translate3d(0px, ' + depth + 'px, 0px)'
            });
        });
        jQuery('#content .container.page-builder-ltr, #content .container-fluid.page-builder-ltr, footer').each(function(e){
            if(Parallax.isElementInViewport(this) && this.getBoundingClientRect().height > window.innerHeight){
                jQuery(this.firstElementChild).addClass('fixed-block');
                jQuery(this.nextElementSibling.firstElementChild).css({
                    'box-shadow': '0px 5px 28px 6px #00000059'
                });
                var top = this.getBoundingClientRect().bottom;
                jQuery(this.firstElementChild).css({
                    'opacity': top / window.innerHeight
                });
            } else {
                jQuery(this.firstElementChild).removeClass('fixed-block');
            }
        });
        jQuery('#header').each(function(e){
            if(jQuery(document).scrollTop() > 0){
                jQuery(this).addClass('fixed-header');
            } else {
                jQuery(this).removeClass('fixed-header');
            }
        });
        window.requestAnimationFrame(Parallax.moveBackground);
    },

    checkElementsVisibility: function(){
        jQuery('.an-on-visible').each(function(e){
            if(Parallax.isElementInViewport(this)){
                jQuery(this).removeClass('an-invisible');
                jQuery(this).addClass('an-visible');
            } else {
                jQuery(this).removeClass('an-visible');
                jQuery(this).addClass('an-invisible');
            }
        });
    },
    isElementInViewport: function(el) {
        return (
            el.getBoundingClientRect().bottom < window.innerHeight
        );
    }
}

jQuery( document ).ready(function(){
    Parallax.moveBackground();
    setTimeout(function(){
        Parallax.init();
    }, 100);
    //blogRandomizer.randomize();
});
Parallax.init();



var blogRandomizer = {
    randomize: function(){
        jQuery('.blog-home .cat-wrap').each(function(e){
            var scaleWidth = 4;
            var scaleHeight = 3;
            var minHeight = 250;
            var maxHeight = 300;
            var width = blogRandomizer.getRandomSize(29, 35);
            var height = blogRandomizer.getRandomSize(minHeight, maxHeight);
            if(e == 0 || e%3 == 0){
                var marginTop = blogRandomizer.getRandomSize(0, 50);
                jQuery(this).css({
                    'padding-top': marginTop+'px'
                });
            }
            jQuery(this).find('.item').css({
                'height': height+'px'
            });
        });
    },
    getRandomSize: function(min, max) {
        return Math.round(Math.random() * (max - min) + min);
    }
    
}

