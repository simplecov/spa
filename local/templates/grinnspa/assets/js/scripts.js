$(document).ready(function(){

    menuToggler.init();

    console.log(menuToggler.selector);

    $('#menu-opener').on('click', function(){
        menuToggler.openToggler(menuToggler.selector, menuToggler.procClass);
        //$(menuToggler.selector).toggleClass(menuToggler.procClass);
    });

});

var menuToggler = {

    selector: null,
    procClass: 'main-menu-shown',

    /**
     * Initiation
     */
    init: function()
    {
        this.target($('#menu-opener'));
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
    }

};