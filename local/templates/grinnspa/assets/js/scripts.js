$(document).ready(function(){

    /**
     * Title animation on page load
     */
    setTimeout(
        function()
        {
            header.animationForTitle($('.stylish-title'));
        },
        500
    );

    /**
     * Scroll plugin init
     */
    $('body').niceScroll({
        scrollspeed: 150,
        cursorborder: 0,
    });

    /**
     * Obj init
     */
    header.init();

    /**
     * Header obj usage
     */
    header.changeElementOffset('.logo', '#menu-opener');

    header.showHideElementOnScroll('#menu-opener', 50, true);
    header.showHideElementOnScroll('.to-top-button', 100, false);

    $(window).scroll(function(){
        header.showHideElementOnScroll('#menu-opener', 50, true);
        header.showHideElementOnScroll('.to-top-button', 100, false);
    });

    $('#to-top-button').click(function(){
        header.scrollToTop($(this).attr('id'));
    });

    $('#menu-opener').on('click', function(){
        $('#nav-icon3').toggleClass('open');
        header.openToggler(header.selector, header.procClass);
    });


    /**
     * Main page big slider
     */
    $('#carouselMain').height($(window).height());
});

var header = {

    selector: null,
    headerSelector: '.header-media',
    resizedHeaderClass: 'resized',
    procClass: 'main-menu-shown',

    /**
     * Initiation
     */
    init: function()
    {
        this.target($('#menu-opener'));
        this.animatedTitle($('.stylish-title'));
    },


    /**
     * Get obj
     * @returns {obj}
     */
    getSelector: function()
    {
        return this.obj;
    },

    /**
     * Write "target" to field
     * @param obj
     */
    target: function(obj)
    {
        var target = obj.data('target');
        this.selector = '#' + target;
    },

    /**
     * Adding class to seelctor
     * @param selector
     * @param openClass
     */
    openToggler: function(selector, newClass)
    {
        $(selector).toggleClass(newClass);

        if($(selector).hasClass(newClass))
            $(this.headerSelector).addClass(this.resizedHeaderClass);
        else
            $(this.headerSelector).removeClass(this.resizedHeaderClass);
    },

    /**
     * Animation via css to show/hide elements
     * @param selector
     * @param count
     * @param reverse
     * <a href="//kinohod.ru/movie//" class="kh_boxoffice" kh:ticket kh:widget="movie" kh:id="968" kh:src="193" kh:city="Белгород">Купить билет</a>
     */
    showHideElementOnScroll: function(selector, count, reverse)
    {
        var optionsShow = {
                visibility: 'visible',
                opacity: '1',
        },
            optionsHide = {
                visibility: 'hidden',
                opacity: '0',
            };
        if(reverse) {
            if ($(window).scrollTop() > count)
                $(selector).css(optionsHide);
            else
            {
                header.changeElementOffset('.logo', '#menu-opener');
                $(selector).css(optionsShow);
            }
        }
        else
        {
            if($(window).scrollTop() > count)
                $(selector).css(optionsShow);
            else
                $(selector).css(optionsHide);
        }
    },

    /**
     * Really?
     * @param selector
     */
    scrollToTop: function()
    {
        $('body').animate(
            {scrollTop: 0},
            '300'
        );
    },

    /**
     * Change element offset
     * @param selector1
     * @param selector2
     */
    changeElementOffset: function(selector1, selector2)
    {
        var height = eval($(selector1).offset().top);

        $(selector2).offset({top: height});
    },

    /**
     * Smooth window scroll
     */
    customScrollAnimation: function()
    {
        $(document).bind( 'mousewheel', function (e) {
            var nt = $(document.body).scrollTop()-(e.deltaY*e.deltaFactor*100);
            e.preventDefault();
            e.stopPropagation();
            $(document.body).stop().animate( {
                scrollTop : nt
            } , 500 , 'easeInOutCubic' );
        } )
    },

    /**
     * To animate titles
     * @param selector
     */
    animatedTitle: function(selector)
    {
        selector.append('<i class="screen"></i><i class="screen2"></i><i class="screen3"></i>');

        $(window).scroll(function(){
            header.animationForTitle(selector);
        });
    },

    /**
     * Uses in animatedTitle function, create and change elements witch are governed by CSS
     * @param selector
     */
    animationForTitle: function(selector)
    {
        selector.each(function(){
            if($(this).visible())
            {
                $(this).find('.screen').css('right', '-100%');
                $(this).find('.screen2').css('right', '-100%');
                $(this).find('.screen3').css('right', '-100%');
            }
        });
    }

};