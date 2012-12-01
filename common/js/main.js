var G_vmlCanvasManager;
var PALETTE = ['#f99f1c','#52a6ec','#8fc747','#ee6d7a','#6d81c0','#7a6eea'];
var availableColors = PALETTE.slice(0);
var patharray = window.location.pathname.split('/');
var age = patharray[patharray.length - 2];
$(function() {
    $("#nav" + age + "link").css({"background-position":"0 0"});
    if(!(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent))) {
        resized();
        $(window).resize(resized);
        $("#bubblebox").bubble({x:100,y:250});
        $("#bubblebox").bubble({x:100,y:450});
        $("#bubblebox").bubble({x:980,y:250});
        $("#bubblebox").bubble({x:980,y:450});
        $("#bubblebox").bubble({x:700,y:600});
        $("#bubblebox").bubble({x:240,y:650,color:"#bbbbbb",radius:$.rbetween(15,30)});
        $("#bubblebox").bubble({x:700,y:700,color:"#bbbbbb",radius:$.rbetween(15,30)});
        $("#bubblebox").bubble({x:100,y:350,color:"#bbbbbb",radius:$.rbetween(15,30)});
        $("#bubblebox").bubble({x:980,y:550,color:"#bbbbbb",radius:$.rbetween(15,30)});
        $("#bubblebox").bubble({x:980,y:350,color:"#bbbbbb",radius:$.rbetween(15,30)});
    } else {
        $("html, body, #bubblebox").css({"width":"800px"});
        $("#content, #nav").css({left:"50px"});
        $("#footer").css({"text-align":"right"});
        $("#bubblebox").bubble({x:30,y:200,radius:$.rbetween(50,80),wanderradius:10});
        $("#bubblebox").bubble({x:600,y:200,radius:$.rbetween(50,80),wanderradius:10});
        $("#bubblebox").bubble({x:500,y:620,radius:$.rbetween(50,80),wanderradius:10});
        $("#bubblebox").bubble({x:240,y:630,color:"#bbbbbb",radius:$.rbetween(15,30),wanderradius:10});
        $("#bubblebox").bubble({x:700,y:700,color:"#bbbbbb",radius:$.rbetween(15,30),wanderradius:10});
    }
});

function resized() {
    $("#content, #nav").center({vertical:false});
    $("#bubblebox").center({vertical:false,minX:-1000});
    if ($(window).width() < 900) {
        $("#footer").css({"text-align":"right"});
    } else {
        $("#footer").css({"text-align":"center"});
    }
}

