

<section class="side_bar">
    <a class="logo" href="../MVC_PiePHP/index">
        <h4>My Cinema</h4>
    </a>
    
    <a href="../MVC_PiePHP/index">
        <div class="sidebar_link">Accueil <i class="fas fa-home"></i></div>
    </a>
    
    <form class="search_section">
        <input type="text" name="search" placeholder="Rechercher..."/>
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>

    <?php
        if(isset($_SESSION['surname'])){
            echo 
            '<a href="../MVC_PiePHP/profil">
                <div class="sidebar_link">Profil <i class="fas fa-user"></i></div>
            </a>';
        }
    ?>

    <a href="../MVC_PiePHP/genres">
        <div class="sidebar_link">Genres <i class="fas fa-bookmark"></i></div>
    </a>

    <?php
        if(isset($_SESSION['surname'])){?>
            <section class="historique_section">
                <h5>HISTORIQUE</h5>

                <!-- <div class="last_movie">
                    <div class="last_movie-affiche"></div>
                    <div class="last_movie-title">Titre ici</div>
                </div>

                <div class="last_movie">
                    <div class="last_movie-affiche"></div>
                    <div class="last_movie-title">Titre ici</div>
                </div>

                <div class="last_movie">
                    <div class="last_movie-affiche"></div>
                    <div class="last_movie-title">Titre ici</div>
                </div> -->
                <?php if(isset($_SESSION['historique'])){echo $_SESSION['historique'];}?>

                <a href="historique" class="plus">VOIR PLUS ></a>
            </section>

            <div class="ajout_film">
                <div class="add"><i class="fas fa-plus"></i></div>
                <p>AJOUTER UN FILM</p>
            </div>
        
        
        
            <?php
        }
    ?>

        
</section>


<div class="fond_add"></div>

<form class="popup_add" method="POST" action="../MVC_PiePHP/addMovie">
    <div><div class="popin-dismiss">&times;</div></div>
    <div class="mini_bg_add" style="background: linear-gradient(to bottom, transparent, rgb(18, 18, 18)), url(\''. $result['background'] .'\'), linear-gradient(to bottom, transparent, rgb(18, 18, 18)); background-repeat: no-repeat; background-size: cover;">
        <input type="text" class="mini_title" name="title" value="Titre du film" required="required"/>
    </div>
    <div class="mini_affiche_add" style="background-image:url(\''. $result['affiche'] .'\');"></div>
    
    <textarea class="mini_resum" name="resum" required="required">Résumé du film</textarea>

    <select class="genres" name="genre">
        <?php echo $_SESSION['genre_list']; ?>
    </select>

    <div class="pictures">
        <p>Couverture<input type="text" name="background" id="background"/></p>
        <p>Affiche<input type="text" name="affiche" id="affiche"/></p>
    </div>

    <div class="boutons">
        <input class="ok_add" type="submit" value= "VALIDER"/>
    </div> 

    <input type="hidden" name="id_movie" value="'.$id_movie.'"/>
</form>