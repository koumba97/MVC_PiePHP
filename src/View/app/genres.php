<section class="genres_contener">
    <?php echo implode($result); ?>
    <div class="add_genre"><i class="fas fa-plus"></i></div>
</section>


<section class="popup_genre">
     <div class="fond_add"></div>

    <form class="popup_add_genre" method="POST" action="../MVC_PiePHP/addGenre">
        <div><div class="popin-dismiss">&times;</div></div>
        <div class="mini_bg_add" style="background: linear-gradient(to bottom, transparent, rgb(18, 18, 18)), url(\''. $result['background'] .'\'), linear-gradient(to bottom, transparent, rgb(18, 18, 18)); background-repeat: no-repeat; background-size: cover;">
            <input type="text" class="mini_title" name="name" value="Genre" required="required"/>
        </div>
        <div class="mini_affiche_add_genre"></div>
        
        <textarea class="mini_resum" name="resum" required="required">Description du genre</textarea>

        <div class="pictures">
            <p>Image<input type="text" name="image" id="affiche_genre"/></p>
        </div>

        <div class="boutons">
            <input class="ok_add" type="submit" value= "VALIDER"/>
        </div> 

        <input type="hidden" name="id_movie" value="'.$id_movie.'"/>
    </form>
</section>