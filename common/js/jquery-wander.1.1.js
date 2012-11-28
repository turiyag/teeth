(function($){
    /**
     * Makes an element wander randomly, its top left corner centered around x and y
     */
    $.wanderoptions = {
        wanderers:{},
        count:0
    };
    $.fn.wanderings = function () {
        if ($.wanderoptions.count == 0) {
            clearTimeout($.wanderoptions.interval);
        } else {
            $.each($.wanderoptions.wanderers, function (id, opt) {
                var r, d, x, y;
                r = opt.radius * Math.random();
                d = Math.random() * 2 * Math.PI;
                x = Math.floor(opt.pos.left + (Math.sin(d) * r));
                y = Math.floor(opt.pos.top + (Math.cos(d) * r));
                $(opt.elem).animate({top:y + "px", left:x + "px"},opt.tick);
            }); 
        }
    };
    $.fn.wander = function (opt) {
        
		$.each($(this), function(i,obj) {
			$(obj).css({position:"absolute"}); //This call must preceed the call to position() for IE7's sake;	
			var options = {
				elem:obj,
				pos:$(obj).position(),
				radius:200,
				tick:2000
			};
			$.extend(options, opt);
			$(obj).css({top:options.y+"px",left:options.x+"px"});
			$.wanderoptions.wanderers[$(obj).prop('id')] = options;
			$.wanderoptions.wanderers[$(obj).prop('id')].interval = setInterval($.fn.wanderings,options.tick);
			$.wanderoptions.count++;
			$.fn.wanderings();
		});
        return this;
    };
	$.fn.stopWander = function (jumpToEnd) {
		delete $.wanderoptions.wanderers[$(this).prop('id')];
		$(this).stop(true, jumpToEnd);
		clearInterval($.wanderoptions.wanderers[$(this).prop('id')].interval);
	};
})(jQuery);// JavaScript Document
