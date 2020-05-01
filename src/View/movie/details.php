<!-- <section class="details_movie">
    
    <section class="background"></section>

    <section class="affiche-text">

        <div class="affiche"></div>
        
        <div class="text">
            <p class="title">Titre </p>
            <div class="evaluation">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p class="resum">
                Restabat ut Caesar post haec properaret 
                accitus et abstergendae causa suspicionis 
                sororem suam, eius uxorem, Constantius ad 
                se tandem desideratam venire multis 
                fictisque blanditiis hortabatur. quae 
                licet ambigeret metuens saepe cruentum, 
                spe tamen quod eum lenire poterit ut germanum 
                profecta, cum Bithyniam introisset, in 
                statione quae Caenos Gallicanos appellatur, 
                absumpta est vi febrium repentina. cuius 
                post obitum maritus contemplans cecidisse 
                fiduciam qua se fultum existimabat, 
                anxia cogitatione, quid moliretur haerebat.
            </p>
            <div class="voir"><i class="fas fa-plus"></i> VOIR</div>
        </div>

    </section>
    
</section> -->

<?php
$url_params = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);

if(substr($url_params[2], 0, 5)=="movie"){
    $id_movie=substr($url_params[2], 5);
}
?>

<div class="fond"></div>

<form class="popup" method="POST" action="../MVC_PiePHP/updateMovie<?php echo $id_movie; ?>">
    <div><div class="popin-dismiss">&times;</div></div>
    <div class="mini_bg">
        <input type="text" class="mini_title" name="title" value="Titre" required="required"/>
        <p class="mini_genre">genre</p>
    </div>
    <div class="mini_affiche"></div>
    
        <textarea class="mini_resum" name="resum" required="required">texte resumé film"</textarea>
  
    <select class="genres" name="genre">
        <option value="action">Action</option>
        <option value="animation">Animation</option>
        <option value="aventure">Aventure</option>
        <option value="biographie">Biographie</option>
        <option value="comedie">Comedie</option>
        <option value="drame">Drame</option>
        <option value="thriller">Thriller</option>
    </select>
    <div class="boutons">
        <a href="deleteMovie<?php echo $id_movie; ?>"><div class="delete">SUPPRIMER</div></a>
        <input class="ok" type="submit" value= "VALIDER"/>
    </div> 

    <input type="hidden" name="id_movie" value="<?php echo $id_movie; ?>"/>
</form>
<?php echo $_SESSION['details_movie']; ?>

