(function($){
    /**
     * Draws a wandering bubble
     */
    $.fn.drawBubble = function (opt,parent,id,x,y,radius,color) {
        // var el, ctx;
        // $(parent).append('<canvas id="' + id + '" width="' + (radius * 2) + '" height="' + (radius * 2) + '"></canvas>');
        // el = $("#" + id)[0];
        // if (G_vmlCanvasManager) {
            // G_vmlCanvasManager.initElement(el);
        // }
        // ctx = el.getContext("2d");
        // //draw a circle
        // ctx.fillStyle = color;
        // ctx.beginPath();
        // ctx.arc(radius, radius, radius, 0, Math.PI*2, true); 
        // ctx.closePath();
        // ctx.fill();
        // $("#" + id).css({position:"absolute",top:y + "px",left:x + "px"});
        return x+y;
    }
    $.rbetween = function (min,max) {
        return Math.floor((Math.random() * (max - min)) + min);
    }
    $.rstring = function (opt) {
        var i, sOut, options = {
            length:20,
            charset:"0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"
        };
        $.extend(options,opt);
        sOut = "";
        for (i = 0; i < options.length; i++) {
            sOut += options.charset.charAt($.rbetween(0,options.charset.length));
        }
        return sOut;
    } 
})(jQuery);// JavaScript Document
