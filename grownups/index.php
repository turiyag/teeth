<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dr. Good Tooth</title>
    <link rel="stylesheet" type="text/css" href="../common/style.css" />
    <link rel="stylesheet" type="text/css" href="../common/sitewide.css" />
	<script type="text/javascript" src="../common/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../common/js/jquery-center.1.1.js"></script>
	<script type="text/javascript" src="../common/js/jquery-wander.1.1.js"></script>
	<script type="text/javascript" src="../common/js/excanvas.compiled.js"></script>
	<script type="text/javascript" src="../common/js/main.js"></script>
    <script type="text/javascript">
		var G_vmlCanvasManager;
		var palette = ['f0f0a0','ff0000','00ff00','0000ff','00ffff','ffff00','ff00ff','ed67fd','76dfed','8d3ef2'];
        $(function() {
			$.each(['a','b'], function(ipre,ival) {
				//100,100 to
				$.each(palette,function(i,val) {
					var x = rbetween(100,$(window).width()-300);
					var y = rbetween(100,$(window).height()-300);
					drawBubble('body',val + ival,x,y,100,'#' + val);
				});
			});
			$("#f0f0a0").css({position:"asbolute",top:"300px",left:"300px"});
			// $("#f0f0a0").animate({top:"400px"},2000);
			// $("#f0f0a0").animate({left:"400px"},{ duration: 2000, queue: false });
			$('canvas').wander({
				radius:100,
				tick:1000
			});
			//$('#content').animate({top: "500px"});
			$("#nav").click(function() {
				$('#one').stopWander();
			});
        });
        function drawBubble(parent,id,x,y,radius,color) {
			var el, ctx;
            $(parent).append('<canvas id="' + id + '" width="' + (radius * 2) + '" height="' + (radius * 2) + '"></canvas>');
			el = $("#" + id)[0];
			if (G_vmlCanvasManager) {
				G_vmlCanvasManager.initElement(el);
			}
            ctx = el.getContext("2d");
            //draw a circle
			ctx.fillStyle = color;
            ctx.beginPath();
            ctx.arc(radius, radius, radius, 0, Math.PI*2, true); 
            ctx.closePath();
            ctx.fill();
			$("#" + id).css({position:"absolute",top:y + "px",left:x + "px"});
        }
		function rbetween(min,max) {
			return Math.floor((Math.random() * (max - min)) + min);
		}
    </script>
</head>

<body>
    <?php include('nav.php'); ?>
    <div id="content" style="">
    </div>
    <?php include('footer.php'); ?>
</body>
</html>

