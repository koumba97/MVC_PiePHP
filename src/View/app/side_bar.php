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

    <div class="sidebar_link">Genres <i class="fas fa-bookmark"></i></div>

        <?php
        if(isset($_SESSION['surname'])){?>
            <section class="historique_section">
                <h5>HISTORIQUE</h5>

                <div class="last_movie">
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
                </div>

                <span class="plus">VOIR PLUS ></span>
            </section>

            <div class="ajout_film">
                <div class="add"><i class="fas fa-plus"></i></div>
                <p>AJOUTER UN FILM</p>
            </div>
        
        
        
            <?php
        }?>

    <!-- <section class="heart_section">
        <h5>COUP DE </h5>

        <div class="heart_movie">
            <div class="heart_movie-affiche"></div>
            <div class="heart_movie-title">Titre ici</div>
        </div>

        <div class="heart_movie">
            <div class="heart_movie-affiche"></div>
            <div class="heart_movie-title">Titre ici</div>
        </div>

        <span class="plus">VOIR PLUS ></span>
    </section> -->
</section>