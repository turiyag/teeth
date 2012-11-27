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
        $(function() {
            drawBubble('#content','one',200,200,200);
            $('#content').wander();
        });
        function drawBubble(parent,id,x,y,radius) {
            $(parent).append('<canvas id="' + id + '" width="' + (radius * 2) + '" height="' + (radius * 2) + '"></canvas>');
            var ctx = $("#" + id)[0].getContext("2d");
            //draw a circle
            ctx.beginPath();
            ctx.arc(x, y, radius, 0, Math.PI*2, true); 
            ctx.closePath();
            ctx.fill();
        }
    </script>
</head>

<body>
    <?php include('nav.php'); ?>
    <div id="content">
    </div>
    <?php include('footer.php'); ?>
</body>
</html>

