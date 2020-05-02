<?php 
namespace Model;


class historiqueModel{

    public function __construct(){   
        $this->bdd = new \PDO('mysql:host=localhost;dbname=Pie_PHP;charset=utf8', 'root', 'root');
    }

    public function save($id_movie, $id_user){
        
        $this->bdd->exec("INSERT INTO historique (id_movie, id_user, date) 
        VALUES('".$id_movie."', '".$id_user."', NOW()) ") or die("failed");

        header("location:movie$id_movie");
    }

    public function read_all(){
        
        $id_user=$_SESSION['id'];
        $_SESSION['historique_all']="";
        $select_data = $this->bdd->query("SELECT * FROM historique INNER JOIN movie ON movie.id_movie = historique.id_movie WHERE id_user=$id_user ORDER BY id_histo DESC") or die("failed");
        while($result = $select_data->fetch()){
            $_SESSION['historique_all'].=
            '<a href="movie'.$result['id_movie'].'"><div class="last_movie">
                <div class="last_movie-affiche" style="background:url(\''. $result['affiche'] .'\'); background-size:cover;"></div>
                <div class="text">
                    <div class="last_movie-title">'.$result['title'].'</div>
                    <div class="date">vu le '.$result['date'].'</div>
                    <a href="deleteHistorique'.$result['id_histo'].'" class="delete">supprimer</a>
                </div>
            </div></a>';
        }

    }

    public function read(){

        $id_user=$_SESSION['id'];
        $_SESSION['historique']="";
        $select_data = $this->bdd->query("SELECT * FROM historique INNER JOIN movie ON movie.id_movie = historique.id_movie WHERE id_user=$id_user ORDER BY id_histo DESC LIMIT 3") or die("failed");
        while($result = $select_data->fetch()){
            $_SESSION['historique'].=
            '<a href="movie'.$result['id_movie'].'"><div class="last_movie">
                <div class="last_movie-affiche" style="background:url(\''. $result['affiche'] .'\'); background-size:cover;"></div>
                <div class="last_movie-title">'.$result['title'].'</div>
     
            </div></a>';
 
            //"<div class='genre' onclick='editGenre(". $result['id_genre'] .", \"". $result['genre'] ."\", \"". $result['image'] ."\", \"".$result['resum']."\")'.
            //style='background:linear-gradient(to bottom, transparent, rgb(18, 18, 18)), url(\"". $result['image'] ."\"); background-size:cover;'><h3>". $result['genre'] ."</h3></div>");
        }

        //return $result_genres;
    }

    public function delete($id_histo){

        $this->bdd->exec("DELETE FROM historique WHERE id_histo=$id_histo"); 
        header("location:profil");
    }
}
