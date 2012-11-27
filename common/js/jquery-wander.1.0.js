(function($){
    /**
     * Makes an element wander randomly, it's top left corner centered around x and y
     */
	$.wanderoptions = {
		wanderers:{},
		count:0
	};
    $.fn.wander = function (opt) {
		var options = {
			elem:this,
			x:0,
			y:0,
			interval:4000
		};
		$.extend(options, opt);
        $(this).css({"position":"absolute","top":options.y+"px","left":options.x+"px"});
		$.wanderoptions.wanderers[$(this).prop('id')] = options;
		$.wanderoptions.count++;
		if ($.wanderoptions.count == 1) {
			setInterval(wanderings,4000);
		}
		return this;
    };
	$.fn.wanderings = function () {
		if ($.wanderoptions.count == 0) {
		}
	};
})(jQuery);// JavaScript Document
