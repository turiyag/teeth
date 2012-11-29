(function($){
    /**
     * Makes an element wander randomly, its top left corner centered around x and y
     */
    $.wanderoptions = {
        wanderers:{},
        count:0,
        interval:undefined
    };
    $.fn.wanderx = function () {
		$.each($.wanderoptions.wanderers, function (id, opt) {
			$(opt.elem).animate({top:opt.x + (opt.xvariance * Math.random()) + "px", left: opt.y + (opt.yvariance * Math.random()) + "px"},opt.tick);
		}); 
    };
    $.fn.wander = function (opt) {
        var options = {
            elem:this,
            x:0,
            xvariance:100,
            y:0,
            yvariance:100,
            tick:2000
        };
        $.extend(options, opt);
        $(this).css({"position":"absolute","top":options.y+"px","left":options.x+"px"});
        $.wanderoptions.wanderers[$(this).prop('id')] = options;
        $.wanderoptions.count++;
        if ($.wanderoptions.count == 1) {
            $.wanderoptions.interval = setInterval($.fn.wanderx,options.tick);
        }
        return this;
    };
})(jQuery);// JavaScript Document
