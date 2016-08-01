$(document).ready(function(){
    var div = $("#introduction");
    var navbar = $("#navbar");
    navbar.animate({opacity: '1'}, 3000);
    div.animate({opacity: '1'}, 3000);
});



$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});



var $window = $(window);


function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    $(document).ready(function(){

        $element = $('.animation-button-1');
        slideAnimate($element);

        $element = $('.animation-text-block-1');
        slideAnimate($element);

        $element = $('.animation-picture-1');
        slideAnimate($element);

        $element = $('.animation-text-block-2');
        slideAnimate($element);
        followingAnimation($element,$('.animation-text-block-2_1'));

        $element = $('.animation-picture-2');
        slideAnimate($element);

        $element = $('.animation-text-block-3');
        slideAnimate($element);
        followingAnimation($element,$('.animation-text-block-3_1'));


    });

    function slideAnimate(object){
        animate(object, 'in-view', 'out-view', 250, -50);
    }

    function heightAnimate(object){
        animate(object, 'expand', 'noExpand', 250, 120);
    }

    function fadeAnimate(object){

    }


    function animate(object, classToAdd, classToRemove, movementAmount1, movementAmount2){
        var element_height2 = object.outerHeight();
        var element_top_position2 = object.offset().top;
        var element_bottom_position2 = (element_top_position2 + element_height2);

        //check to see if this current container is within viewport
        if ((element_bottom_position2 >= window_top_position) &&
            (element_top_position2 <= window_bottom_position))
        {
            object.addClass(classToAdd);
        }
    }

    function followingAnimation(objectContainer, object)
    {
        objectContainer.one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                    function(event) {
                        object.addClass('in-view');
        })
    }
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');