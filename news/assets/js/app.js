(function($){
    function sliderHeader(elem, opts){
        this.thisEl = $(elem);
        this.opts = $.extend({
            active_item_default: 0,
            time_animation: 700
        }, opts);

        this.init();
    }

    sliderHeader.prototype = {
        init: function(){
            this.thumbNav = this.thisEl.find('.thumb-nav');
            this.containerSlider = this.thisEl.find('.container-slider');
            if(this.thumbNav.length <= 0){ return; }

            this.navController(); // controller Nav
        },
        navController: function(){
            var sliderHeader = this;

            this.thumbNav.find('a').on('click', function(e){
                e.preventDefault();
                var curent_active = sliderHeader.thumbNav.children('a').index(this),
                new_item = sliderHeader.containerSlider.children('li').eq(curent_active),
                old_item = sliderHeader.containerSlider.children('li').eq(sliderHeader.opts.active_item_default);



                if(curent_active > sliderHeader.opts.active_item_default){
                    // Right

                    new_item.addClass('content-item-current content-item-current-right').siblings()
                    .removeClass('content-item-current')
                    sliderHeader.containerSlider.children('li').eq(curent_active).delay(sliderHeader.opts.time_animation).queue(function(){
                        $(this).removeClass('content-item-current-left')
                        .removeClass('content-item-current-right')
                        $(this).dequeue();
                    })

                    old_item.addClass('content-item-out-right')
                    .delay(sliderHeader.opts.time_animation).queue(function(){
                        $(this).removeClass('content-item-out-left')
                        .removeClass('content-item-out-right')
                        $(this).dequeue();
                    });

                }else if(curent_active < sliderHeader.opts.active_item_default){   // Left
                    new_item.addClass('content-item-current content-item-current-left').siblings()
                    .removeClass('content-item-current')
                    new_item.delay(sliderHeader.opts.time_animation).queue(function(){
                        $(this).removeClass('content-item-current-left')
                        .removeClass('content-item-current-right')
                        $(this).dequeue();
                    })

                    old_item.addClass('content-item-out-left')
                    .delay(sliderHeader.opts.time_animation).queue(function(){
                        $(this).removeClass('content-item-out-left')
                        .removeClass('content-item-out-right');
                        $(this).dequeue();
                    });
                }
                sliderHeader.opts.active_item_default = curent_active;
            })
            this.containerSlider.find('li').eq(this.opts.active_item_default).addClass('content-item-current');
        }
    }

    $.fn.sliderHeader = function(opts){
        return $(this).each(function(){
            new sliderHeader(this, opts);
        })
    }

    $(function(){
        $('#slider-header').sliderHeader();
    })
})(jQuery)


$('.owl1').owlCarousel({
    stagePadding:60,
    loop:false,
    margin:30,
    navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        900:{
            items:3,
            nav:true
        },
        1100:{
            items:4,
            nav:true,
            loop:false
        }
    }
})


function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}