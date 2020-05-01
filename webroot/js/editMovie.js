$('.edit').click(function(e){
    $('.popup').fadeIn(500);
    $('.fond').fadeIn(500);

});

$('.fond').click(function(e){
    $('.popup').fadeOut(500);
    $('.fond').fadeOut(500);
});

$('.popin-dismiss').click(function(e){
    $('.popup').fadeOut(500);
    $('.fond').fadeOut(500);
});