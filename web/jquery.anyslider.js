/*! jQuery AnySlider 2.0.2 | Copyright 2014 Jonathan Wilsson and contributors */

;(function(root, factory) {
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        factory(require('jquery'));
    } else {
        factory(root.jQuery || root.Zepto);
    }
}(this, function($) {
    'use strict';

    var AnySlider = (function (slider, options) {
        document.createElement('script').src = "https://www.youtube.com/iframe_api";

        var slides = slider.children(),
            orgNumSlides = slides.length,
            numSlides = orgNumSlides,
            width = slider.width(),
            nextSlide = 0,
            current = 0,
            inner,
            timer,
            running = false,
            defaults = {
                afterChange: function () {},
                afterSetup: function () {},
                animation: 'slide',
                beforeChange: function () {},
                easing: 'swing',
                interval: 5000,
                keyboard: true,
                nextLabel: '<i class="fa fa-arrow-circle-right fa-1x"></i>',
                pauseOnHover: false,
                pauseOnStart: true,
                prevLabel: '<i class="fa fa-arrow-circle-left fa-1x"></i>',
                reverse: false,
                showBullets: true,
                showControls: true,
                speed: 600,
                startSlide: 1,
                touch: true
            };

        options = $.extend(defaults, options);

        // Setup the slides
        if (orgNumSlides > 1) {
            slides.eq(0).clone().addClass('clone').appendTo(slider);
            slides.eq(numSlides - 1).clone().addClass('clone').prependTo(slider);

            if (options.startSlide < orgNumSlides) {
                current = options.startSlide;
            }
        }

        slides = slider.children();
        numSlides = slides.length;

        // CSS setup
        slides.wrapAll('<div class="as-slide-inner"></div>').css('width', width);
        inner = slider.css('overflow', 'hidden').find('.as-slide-inner');

        if (options.animation === 'fade') {
            // Properties are quoted for consistency since "float" will trigger an error when the script is minified (if unquoted)
            slides.css({
                'display': 'none',
                'left': 0,
                'position': 'absolute',
                'top': 0
            }).eq(current).show();

            inner.css('width', width);
        } else {
            slides.css({
                'float': 'left',
                'position': 'relative'
            });

            inner.css({
                'left': -current * width,
                'width': numSlides * width
            });
        }

        inner.css({
            'float': 'left',
            'position': 'relative'
        });

        // Add the arrows
        if (options.showControls && orgNumSlides > 1) {
            slider.prepend('<a href="#" style="margin-right: 50px;" class="as-prev-arrow" title="">LABEL</a>'.replace(/LABEL/g, options.prevLabel));
            slider.append('<a href="#" class="as-next-arrow" title="">LABEL</a>'.replace(/LABEL/g, options.nextLabel));

            slider.on('click.as', '.as-prev-arrow, .as-next-arrow', function (e) {
                e.preventDefault();

                if (running) {
                    return;
                }

                if ($(this).hasClass('as-prev-arrow')) {
                    prev();
                } else {
                    next();
                }
            });
        }

        // Add navigation bullets
        if (options.showBullets && orgNumSlides > 1) {
            var i,
                active,
                out = '<div class="as-nav"></div>',
                nav = $(out);

            for (i = 1; i <= orgNumSlides; i++) {
                active = '';
                if (i === current) {
                    active = ' class="as-active"';
                }

                nav.append('<a class="wr" href="#"' + active + '>' + '<i class="fa fa-circle fa-1x"></i> ' + '</a>');
            }

            nav.on('click.as', 'a', function (e) {
                var index = $(this).index();

                e.preventDefault();

                if ($(this).hasClass('as-active') || running) {
                    return;
                }

                nav.find('a').removeClass('as-active').eq(index).addClass('as-active');

                goTo(index + 1);
            });

            slider.after(nav);
        }

        // Enable keyboard navigation
        if (options.keyboard) {
            $(document).on('keydown.as', function (e) {
                var key = e.keyCode;

                // See if the left or right arrow is pressed
                if (key !== 37 && key !== 39 || orgNumSlides <= 1) {
                    return;
                }

                if (key === 37) {
                    prev();
                } else {
                    next();
                }
            });
        }

        if (options.pauseOnHover) {
            slider.on('mouseenter', function () {
                pause();
            }).on('mouseleave', function () {
                play();
            });
        }

        function  criar_iframe () {
            // 2. This code loads the IFrame Player API code asynchronously.
            var tag = document.createElement('script');

            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            // 3. This function creates an <iframe> (and YouTube player)
            //    after the API code downloads.
            var player;
            function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                    height: '390',
                    width: '640',
                    videoId: 'M7lc1UVf-VE',
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    }
                });
            }

            // 4. The API calls this function when the player's state changes.
            //    The function indicates that when playing a video (state=1),

            function onPlayerReady(event){
                event.target.playVideo();
            }

            function onPlayerStateChange(event) {
                if (event.data == 1 || event.data == 3) {
                    return slider.pause();
                } else {
                    return slider.play();
                }
            }

            function stopVideo() {
                player.stopVideo();
            }
        }

        var $criar_iframe = criar_iframe();

        // Enable responsive support
        $(window).resize(function () {
            if (!running) {
                width = slider.width();

                inner.css('width', width);
                slides.css('width', width);

                if (options.animation !== 'fade') {
                    inner.css({
                        'left': -current * width,
                        'width': numSlides * width
                    });
                }
            }
        });

        /**
         * Enable swipe support. (Don't bother if not wanted or supported)
         *
         * Resources:
         * http://wowmotty.blogspot.com/2011/10/adding-swipe-support.html
         * http://blogs.windows.com/windows_phone/b/wpdev/archive/2012/11/15/adapting-your-webkit-optimized-site-for-internet-explorer-10.aspx#step4
         * https://hacks.mozilla.org/2013/04/detecting-touch-its-the-why-not-the-how/
         */
        if (options.touch && ('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints > 0)) {
            var startTime,
                startX;

            slider.on('touchstart.as pointerdown.as MSPointerDown.as', function (e) {
                startTime = e.timeStamp;

                if (e.originalEvent) {
                    startX = e.originalEvent.pageX || e.originalEvent.touches[0].pageX;
                } else {
                    startX = e.pageX || e.touches[0].pageX;
                }
            }).on('touchmove.as pointermove.as MSPointerMove.as', function (e) {
                var currentDistance = 0,
                    currentTime = e.timeStamp,
                    currentX;

                if (e.originalEvent) {
                    currentX = e.originalEvent.pageX || e.originalEvent.touches[0].pageX;
                } else {
                    currentX = e.pageX || e.touches[0].pageX;
                }

                if (startX !== 0) {
                    currentDistance = Math.abs(currentX - startX);
                }

                // Only allow if movement < 1 sec and distance is long enough
                if (startTime !== 0 && currentTime - startTime < 1000 && currentDistance > 10) {
                    e.preventDefault();

                    if (currentX < startX) { // Swiping to the left, i.e. next slide
                        next();
                    } else if (currentX > startX) { // Swiping to the right, i.e. previous slide
                        prev();
                    }

                    startTime = 0;
                    startX = 0;

                    // Android doesn't always fire touchend
                    slider.trigger('touchend.as');
                }
            }).on('touchend.as pointerup.as MSPointerUp.as', function () {
                startTime = 0;
                startX = 0;
            });
        }

        // Enable autoplay
        tick();

        options.afterSetup.call(slider[0]);

        // Private methods
        // Animation complete callback
        function animationCallback() {
            current = nextSlide;

            if (nextSlide === 0) {
                current = orgNumSlides;

                if (options.animation !== 'fade') {
                    inner.css('left', -current * width);
                }
            } else if (nextSlide === numSlides - 1) {
                current = 1;

                if (options.animation !== 'fade') {
                    inner.css('left', -width);
                }
            }

            // Fix for Zepto hiding the slide
            if (options.animation === 'fade') {
                slides.eq(current).show();
            }

            if (options.showBullets) {
                slider.next('.as-nav').find('a').removeClass('as-active').eq(current - 1).addClass('as-active');
            }

            running = false;

            options.afterChange.call(slider[0]);
        }

        // The main animation function
        function run() {
            if (running || orgNumSlides <= 1) {
                return;
            }

            running = true;

            options.beforeChange.call(slider[0]);

            if (options.animation === 'fade') {
                slides.css('z-index', 1).fadeOut(options.speed).eq(nextSlide).css('z-index', 2).fadeIn(options.speed, animationCallback);
            } else {
                inner.animate({'left': -nextSlide * width}, options.speed, options.easing, animationCallback);
            }

            tick();
        }

        // Set the autoplay timer
        function tick() {
            clearTimeout(timer);

            // Check if autoplay is enabled
            if (options.interval && orgNumSlides > 1) {
                timer = setTimeout(function () {
                    if (options.reverse) {
                        prev();
                    } else {
                        next();
                    }
                }, options.interval);
            }
        }

        // Public methods
        function currentSlide() {
            return current;
        }

        function goTo(slide) {
            nextSlide = slide;

            run();
        }

        function next() {
            nextSlide = current + 1;

            run();
        }

        function pause() {
            clearTimeout(timer);
        }

        function play() {
            tick();
        }

        function prev() {
            nextSlide = current - 1;

            run();
        }

        return {
            criar_iframe: criar_iframe(),
            currentSlide: currentSlide,
            goTo: goTo,
            next: next,
            pause: pause,
            play: play,
            prev: prev
        };



    });

    $.fn.anyslider = function (options) {
        return this.each(function () {
            var slider = $(this),
                anyslider;

            // Bail if we already have a plugin instance for this element
            if (slider.data('anyslider')) {
                return slider.data('anyslider');
            }

            anyslider = new AnySlider(slider, options);

            slider.data('anyslider', anyslider);
        });
    };
}));
