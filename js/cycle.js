$(function(){
    var liWidth = $("#galeria ul li").outerWidth(),
    speed = 6000,
    rotate = setInterval(auto, speed);    
    //Mostra os Botões
   $("#galeria").hover(function(){
       $("#buttons").fadeIn();
       clearInterval(rotate);
   }, function(){
       $("#buttons").fadeOut();
       rotate = setInterval(auto, speed);
    });
    //Próximo
    $(".next").click(function(e){
       e.preventDefault();
       $("#galeria ul").css({'width':'99999%'}).animate({left:-liWidth}, function(){
         $("#galeria ul li").last().after($("#galeria ul li").first());
         $(this).css({'left':0, 'width':'auto'});
       });
    });
    //Voltar 
    $(".prev").click(function(e){
       e.preventDefault();
       $("#galeria ul").css({'width':'99999%'}).animate({left:liWidth}, function(){
        $("#galeria ul li").first().before($("#galeria ul li").last().css({'margin-left':-liWidth}));
        $("#galeria ul li").first().css({'margin-left':'0'});
        $(this).css({'left':'0', 'width':'auto'});
       });
    });
    function auto(){
        $(".next").click();
    };
});

$(document).ready(function(){
    $("a[rel=popup]").click( function(ev){
        ev.preventDefault();
 
        var id = $(this).attr("href");
 
        var alturaTela = $(document).height();
        var larguraTela = $(window).width();
     
        //colocando o fundo preto
        $('#mascara').css({'width':larguraTela,'height':alturaTela});
        $('#mascara').fadeIn(1000);
        $('#mascara').fadeTo("slow",0.8);
 
        var left = ($(window).width() /2) - ( $(id).width() / 2 );
        var top = ($(window).height() / 2) - ( $(id).height() / 2 );
     
        $(id).css({'top':top,'left':left});
        $(id).show();  
    });
 
    $("#mascara").click( function(){
        $(this).hide();
        $(".janela-login").hide();
    });
 
    $('.fechar').click(function(ev){
        ev.preventDefault();
        $("#mascara").hide();
        $(".janela-login").hide();
    });
});























