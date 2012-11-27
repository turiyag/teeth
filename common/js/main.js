var patharray = window.location.pathname.split('/');
var age = patharray[patharray.length - 2];
$(function() {
    
    $("#" + age + "link").css({"background-position":"0 0"});
});