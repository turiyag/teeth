(function($){
    /**
     * Makes an element wander randomly, its top left corner centered around x and y
     */
    $.wanderoptions = {
        wanderers:{},
        count:0,
        interval:undefined
    };
    $.fn.wanderings = function () {
        if ($.wanderoptions.count == 0) {
            clearTimeout($.wanderoptions.interval);
        } else {
            $.each($.wanderoptions.wanderers, function (id, opt) {
                var r, d, x, y;
                r = opt.radius * Math.random();
                d = Math.random() * 2 * Math.PI;
                x = opt.pos.left + (Math.sin(d) * r);
                y = opt.pos.top + (Math.cos(d) * r);
                $(opt.elem).animate({top:y + "px", left:x + "px"},opt.tick);
            }); 
        }
    };
    $.fn.wander = function (opt) {
        var options = {
            elem:this,
            pos:$(this).position(),
            radius:200,
            tick:2000
        };
        $.extend(options, opt);
        $(this).css({"position":"absolute","top":options.y+"px","left":options.x+"px"});
        $.wanderoptions.wanderers[$(this).prop('id')] = options;
        $.wanderoptions.count++;
        if ($.wanderoptions.count == 1) {
            $.wanderoptions.interval = setInterval($.fn.wanderings,options.tick);
            $.fn.wanderings();
        }
        return this;
    };
})(jQuery);// JavaScript Document
