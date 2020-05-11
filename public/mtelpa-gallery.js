// $('img').click(function(){
//     $(this).css('height','100%').css('width','100%');
// })

$('img').on('click', function() {
    $(this).toggleClass("toggleFullScreen");
   });