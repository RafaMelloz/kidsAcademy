$(function(){
 
 var open = true;
 var windowSize= $(window)[0].innerWidth;

 var targetMenu= (windowSize < 400 ) ? 200 : 300;

 if (windowSize <= 760) {
    open = false;
 }

 $('.menu-btn').click(function () {
   if(open){
        $('.menu').animate({'width':'0', 'padding':'0'},function () {
            open = false;
        });
        $('header,.content').css( 'width','100%' );
        $('header,.content').animate({ 'left': '0' },
        function() {    
            open = false;
        });
            //o menu esta aberto e sera fechado
   } else{
       $('.menu').animate({ 'width': '300px', 'padding': '0' }, function () {
           open = true;
       });
       $('header,.content').css('width', 'calc(100% - 300px)');
       $('header,.content').animate({ 'left': '300px' },
           function () {
               open = true;
           });

   }
 })

})

$(window).resize(function () {
    windowSize = $(window)[0].innerWidth;
    targetSizeMenu = (windowSize <= 400) ? 200 : 250;
    if (windowSize <= 768) {
        $('.menu').css('width', '0').css('padding', '0');
        $('.content,header').css('width', '100%').css('left', '0');
        open = false;
    } else {
        $('.menu').animate({ 'width': targetSizeMenu + 'px', 'padding': '10px 0' }, function () {
            open = true;
        });

        $('.content,header').css('width', 'calc(100% - 250px)');
        $('.content,header').animate({ 'left': targetSizeMenu + 'px' }, function () {
            open = true;
        });
    }

})
