$(document).ready(function(){

    $(".nav-link").mouseenter(function(){
        
        $("#landing").css("transform","scale(1.1)");
    });

    $(".nav-link").mouseleave(function(){
        
        $("#landing").css("transform","scale(1)");
    });

    /* tab mouseovers */
    $("#tab-one").mouseenter(function(){
        
        $("#tab-one").css("transform","scale(1.1)");
        $("#services").css("background","url('img/branding_bkg_1.jpg') center fixed no-repeat");
        $("#services").css("-webkit-background-size","cover");
        $("#services").css("-moz-background-size","cover");
        $("#services").css("-o-background-size","cover");
        $("#services").css("background-size","cover");
    });

    $("#tab-one").mouseleave(function(){
        
        $("#tab-one").css("transform","scale(1)");
        $("#services").css("background","none");
    });

    $("#tab-two").mouseenter(function(){
        
        $("#tab-two").css("transform","scale(1.1)");
        $("#services").css("background","url('img/design_bkg.jpg') center fixed no-repeat");
        $("#services").css("-webkit-background-size","cover");
        $("#services").css("-moz-background-size","cover");
        $("#services").css("-o-background-size","cover");
        $("#services").css("background-size","cover");
       
    });

    $("#tab-two").mouseleave(function(){
        
        $("#tab-two").css("transform","scale(1)");
        $("#services").css("background","none");
    });

    $("#tab-three").mouseenter(function(){
        
        $("#tab-three").css("transform","scale(1.1)");
        $("#services").css("background","url('img/seo_bkg.jpg') center fixed no-repeat");
        $("#services").css("-webkit-background-size","cover");
        $("#services").css("-moz-background-size","cover");
        $("#services").css("-o-background-size","cover");
        $("#services").css("background-size","cover");
    });

    $("#tab-three").mouseleave(function(){
        
        $("#tab-three").css("transform","scale(1)");
        $("#services").css("background","none");
    });

    $("#tab-four").mouseenter(function(){
        
        $("#tab-four").css("transform","scale(1.1)");
        $("#services").css("background","url('img/social_bkg.jpg') center fixed no-repeat");
        $("#services").css("-webkit-background-size","cover");
        $("#services").css("-moz-background-size","cover");
        $("#services").css("-o-background-size","cover");
        $("#services").css("background-size","cover");
    });

    $("#tab-four").mouseleave(function(){
        
        $("#tab-four").css("transform","scale(1)");
        $("#services").css("background","none");
    });

    

});