
$(document).ready(function(){
    //----------flext-controls---------------------
   $('.slides li').bind('mouseover',function(){
       var top;
       $('.slides img').each(function(){
            if($(this).is(':visible')){
                top = parseInt($(this).height())/2;
            }
        });
       $('.prev').css({top:top});
       $('.next').css({top:top});
   });
   //--------------------navbars-----------------
   $('.dropdown').hover(function(){
      $(this).find('.dropdown-menu').css({display:'block'}); 
   }, function(){$(this).find('.dropdown-menu').css({display:'none'});});
   $('.dropdown-submenu').hover(function(){
      $(this).find('.dropdown-menu').css({display:'block'});
   }, function(){$(this).find('.dropdown-menu').css({display:'none'});});
   
   $('.dropdown').click(function(){
      $(this).find('.dropdown-menu').toggle();
   });
   $('.dropdown-submenu').click(function(){
      $(this).find('.dropdown-menu').toggle();
   });
   //-----------btn-menu click-------
   $('.btn-menu').click(function(){
       $('.navbar').slideToggle();
   });
   //-----------hover flext controls
   $('.slides-img').hover(function(){
    $('.prev').animate({left:10, opacity:1},30);
    $('.next').animate({right:10, opacity:1},30);
   }, function(){
    $('.prev').animate({left:0, opacity:0},30);
    $('.next').animate({right:0, opacity:0},30);
   });
   //-------------------slide show------------------
   var stt = 0;
   var imgStart = $('.slides li:first').attr('stt');
   var imgEnd = $('.slides li:last').attr('stt');
    $('.slides li').each(function(){
      if($(this).is(':visible')){      
        stt = $(this).attr('stt');
        }
    });
   $('.next').click(function(){  
       hide(100);
       stt++;
       if(stt > imgEnd){
           stt = imgStart;
       }
       show(stt);    
   });
   $('.prev').click(function(){  
      hide(100,function(){
          stt--;
       if(stt < 0){
           stt = imgEnd;
       }
       show(stt);
      });
             
   });
   $('.flex-control li').click(function(){
      hide();
      stt = $(this).attr('stt');  
      show(stt);
   });
   function hide(){
      $('.slides li').css({display:'none'}).animate({opacity:0,display:'none'},50);
      $('.flex-control li i').css({color:'#a1a1a1'});
   }
   function show(n){
      $('.slides li').eq(n).css({display:'block'}).animate({opacity:1},50);
      $('.flex-control li i').eq(n).css({color:'#6091ba'});
   }
   //-------------------scroll-----------------
   $(window).bind('scroll', function(){
    var scroll = $(window).scrollTop();     
    if(scroll <=200)
    { 
        $('#topcontrol').fadeOut();
    }
    else 
       $('#topcontrol').fadeIn();
   }); 
});

