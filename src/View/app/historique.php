<section class="profil_histo_section">
    <section class="profil_section">
        <div class="identity">
            <div class="profil_picture"></div>
            <div>
                <p class="name"><?php echo $_SESSION['surname'].' '.$_SESSION['name'];?></p>
                <p class="date">membre depuis le : 00/00/0000</p>
                <p class="nbr_movie">nombre de film(s) vu(s) : XX</p>

                <a href="profilEdit"><div class="button">Editer mon profil <i class="fas fa-user-edit"></i></div></a>
            </div>
        </div>

        <div>
            <p class="titre">Derniers films</p>
            <div class="derniers_films">
                <?php echo  $_SESSION['last_movie'];?>
            </div>
        </div>
    </section>

    <section class="histo_section">
    <p class="titre">Mon historique</p>
    <div class="histo">
        <?php echo $_SESSION['historique_all'];?>
    </div>
    </section>
</section>