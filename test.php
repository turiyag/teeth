<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=600, initial-scale=0.5"> 
    <title>Dr. Good Tooth</title>
    <link rel="stylesheet" type="text/css" href="splashstyle.css" />
	<script type="text/javascript" src="common/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="common/js/jquery-center.1.1.js"></script>
    <script type="text/javascript" src="common/js/modernizr.touch.js"></script>
	<script type="text/javascript" src="common/js/jquery-me.2.0.js"></script>
    <script type="text/javascript">
        var iAnimationTime = 300;
        var up = {};
        $(function() {
            $("#splashcontent").center();
            $("#splashpopups").center();
            
            $(window).resize(function() {
                $("#splashcontent").center();
                $("#splashpopups").center();
            });
            hoverOrClick('#kidspic',function(event) {
                $("#kidspopup").animate({top:"0px"},iAnimationTime);
                event.preventDefault();
            }, function(event) {
                $("#kidspopup").animate({top:"100px"},iAnimationTime);
                event.preventDefault();
            }, function() {
                return;
            });
            hoverOrClick('#grownupspic',function(event) {
                $("#grownupspopup").animate({top:"135px"},iAnimationTime);
                event.preventDefault();
            }, function(event) {
                $("#grownupspopup").animate({top:"70px"},iAnimationTime);
                event.preventDefault();
            }, function() {
                return;
            });
        });
        
    </script>
</head>


<body>
    <div id="splashpopups">
        <p id="kidspopup">kids</p>
        <p id="grownupspopup">grown-ups</p>
    </div>
    <div id="splashcontent">
        <a href="kids"><img id="kidspic" src="img/kids.png" alt="kids" /></a><a href="grownups"><img id="grownupspic" src="img/grownups.png" alt="grownups" /></a>
    </div>
    <img id="splashfooter" src="img/logo.png" alt="logo" />
</body>
</html>

