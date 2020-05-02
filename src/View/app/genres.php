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


<section class="popup_genre_edit">
    <div class="fond_edit_genre"></div>

   
    <form class="popup_edit_genre" method="POST">
        <div><div class="popin-dismiss">&times;</div></div>

        <div class="mini_bg_edit" style="background: linear-gradient(to bottom, transparent, rgb(18, 18, 18)), url(\''. $result['background'] .'\'), linear-gradient(to bottom, transparent, rgb(18, 18, 18)); background-repeat: no-repeat; background-size: cover;">
            <input type="text" class="mini_title" name="name" id="inputName" required="required"/>
        </div>

        <div class="mini_affiche_edit_genre"></div>

        <input type="hidden" class="id_genre" name="id_genre"/>
        <textarea class="mini_resum_edit" name="resum_edit" required="required">Description du genre</textarea>

        <div class="boutons">
            <a class="delete_link" href="deleteGenre"><div class="delete">SUPPRIMER</div></a>
            <input class="ok_add" type="submit" value= "VALIDER"/>
        </div> 

        <input type="hidden" name="id_movie"/>
    </form>
</section>


