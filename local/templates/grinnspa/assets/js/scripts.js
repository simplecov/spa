$(document).ready(function(){

    $('body').niceScroll({
        scrollspeed: 150,
        cursorborder: 0,
    });

    header.init();

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

    header.changeElementOffset('.logo', '#menu-opener');


    /**
     * Main page big slider
     */
    //$('.header-big-slider').height($(window).height());
    $('.header-big-slider').slick({
        dots: true,
        infinite: true,
        speed: 1500,
        fade: true,
        adaptiveHeight: true,
        autoplay: true
    });
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
        //this.customScrollAnimation();
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
        if(reverse)
        {
            if($(window).scrollTop() > count)
                $(selector).css(optionsHide);
            else
                $(selector).css(optionsShow);
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
    }

};