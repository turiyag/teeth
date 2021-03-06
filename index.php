<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=600"> 
	<title>Dr. Good Tooth</title>
	<link rel="stylesheet" type="text/css" href="common/splashstyle.css" />
	<script type="text/javascript" src="common/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="common/js/jquery-center.1.2.js"></script>
	<script type="text/javascript" src="common/js/jquery-me.2.0.js"></script>
	<script type="text/javascript" src="common/js/modernizr.touch.js"></script>
	<script type="text/javascript">
		var iAnimationTime = 300;
		$(function() {
		
			$("#splashcontent").center();
			$("#splashpopups").center();
			$(window).resize(function() {
				$("#splashcontent").center();
				$("#splashpopups").center();
			});
			if(!(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent))) {
				$("#splashcontent").center();
				$("#splashpopups").center();
				$(window).resize(function() {
					$("#splashcontent").center();
					$("#splashpopups").center();
				});
			}
			$("#kidspic").hoverOrClick(function(event) {
				event.preventDefault();
				$("#kidspopup").animate({top:"-5px"},iAnimationTime);
			}, function(event) {
				event.preventDefault();
				$("#kidspopup").animate({top:"100px"},iAnimationTime);
			});
			$("#grownupspic").hoverOrClick(function(event) {
				event.preventDefault();
				$("#grownupspopup").animate({top:"135px"},iAnimationTime);
			}, function(event) {
				event.preventDefault();
				$("#grownupspopup").animate({top:"70px"},iAnimationTime);
			});
		});
	</script>
</head>


<body>
	<img id="splashfooter" src="common/img/logosmall.png" alt="logo" />
	<div id="splashpopups">
		<p id="kidspopup">kids</p>
		<p id="grownupspopup">grown-ups</p>
	</div>
	<div id="splashcontent">
		<a href="kids/"><img id="kidspic" src="img/kids.png" alt="kids" /></a><a href="grownups/"><img id="grownupspic" src="img/grownups.png" alt="grownups" /></a>
	</div>
</body>
</html>

