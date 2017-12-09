$(document).ready(function() { 
    $('#btn-beginner').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 800);
        return false;
    });
    $('#btn-elementary').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 900);
        return false;
    });
    $('#btn-intermediate').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 900);
        return false;
    });
    $('#btn-topmiddle').click(function () {
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 900);
        return false;
    });
    $('#btn-advanced').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 900);
        return false;
    });
    $('#btn-scroll').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 900);
        return false;
    });
});