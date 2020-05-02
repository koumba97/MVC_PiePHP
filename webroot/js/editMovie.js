// EDIT MOVIE
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



// ADD MOVIE
$('.ajout_film').click(function(e){
    $('.popup_add').fadeIn(500);
    $('.fond_add').fadeIn(500);

});

$('.fond_add').click(function(e){
    $('.popup_add').fadeOut(500);
    $('.fond_add').fadeOut(500);
});

$('body').click(function(e){
 
    if($('#background').val()!==""){
        alert('ok')
        url_bg=$('#background').val();
        $('.mini_bg_add')[0].style.background= "url('"+ url_bg +"')";
        $('.mini_bg_add')[0].style.backgroundSize= "cover";
        $('.mini_bg_add')[0].style.backgroundRepeat= "no-repeat";
    }

    if($('#affiche').val()!==""){
        alert('ok')
        url_affiche=$('#affiche').val();
        $('.mini_affiche_add')[0].style.background= "url('"+ url_affiche +"')";
        $('.mini_affiche_add')[0].style.backgroundSize= "cover";
        $('.mini_affiche_add')[0].style.backgroundRepeat= "no-repeat";
    }

    if($('#affiche_genre').val()!==""){

        url_affiche=$('#affiche_genre').val();
        $('.mini_affiche_add_genre')[0].style.background= "url('"+ url_affiche +"')";
        $('.mini_affiche_add_genre')[0].style.backgroundSize= "cover";
        $('.mini_affiche_add_genre')[0].style.backgroundRepeat= "no-repeat";
    }
});



// ADD GENRE
$('.add_genre').click(function(e){

    $('.popup_add_genre').fadeIn(500);
    $('.fond_add').fadeIn(500);
    
});

$('.fond_add').click(function(e){
    $('.popup_add_genre').fadeOut(500);
    $('.fond_add').fadeOut(500);
});