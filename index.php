<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dr. Good Tooth</title>
    <link rel="stylesheet" type="text/css" href="splashstyle.css" />
    <link rel="stylesheet" type="text/css" href="common/style.css" />
	<script type="text/javascript" src="common/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="common/js/jquery-center.1.1.js"></script>
    <script type="text/javascript">
        var iAnimationTime = 300;
        $(function() {
            $("#splashcontent").center();
            $("#splashpopups").center();
            $(window).resize(function() {
                $("#splashcontent").center();
                $("#splashpopups").center();
            });
            $("#kidspic").hover(function() {
                $("#kidspopup").animate({top:"0px"},iAnimationTime);
            }, function() {
                $("#kidspopup").animate({top:"100px"},iAnimationTime);
            });
            $("#grownupspic").hover(function() {
                $("#grownupspopup").animate({top:"130px"},iAnimationTime);
            }, function() {
                $("#grownupspopup").animate({top:"70px"},iAnimationTime);
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

