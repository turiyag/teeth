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
        $(function() {
            drawBubble('body','one',200,200,100,'#f0f0a0');
            drawBubble('body','two',300,200,100,'#00f0a0');
            drawBubble('body','three',400,200,100,'#ff0000');
            drawBubble('body','four',500,200,100,'#00ff00');
            drawBubble('body','five',600,200,100,'#0000ff');
			$('canvas').wander();
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
    </script>
</head>

<body>
    <?php include('nav.php'); ?>
    <div id="content" style="">
    </div>
    <?php include('footer.php'); ?>
</body>
</html>

