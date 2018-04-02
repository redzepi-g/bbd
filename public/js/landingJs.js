$(document).ready(function(){

    $(".nav-link").mouseenter(function(){
        
        $("#landing").css("transform","scale(1.1)");
    });

    $(".nav-link").mouseleave(function(){
        
        $("#landing").css("transform","scale(1)");
    });

});