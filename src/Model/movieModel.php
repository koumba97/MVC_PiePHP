<?php
namespace Model;
@session_start();


class movieModel{

    
    

    public function __construct()
    {   
        //$this->table=$table;
        //$this->params=$params;
        $this->bdd = new \PDO('mysql:host=localhost;dbname=Pie_PHP;charset=utf8', 'root', 'root');
    }
    public function save($title, $genre, $resum, $affiche, $bg){
        
        $this->bdd->exec("INSERT INTO movie (title, genre, resum, affiche, background) 
        VALUES('".$title."', '".$genre."', '".$resum."', '".$affiche."', '".$bg."') ") or die("failed");

        header("location:index");
    }

    public function read($id_movie){
        $_SESSION['details_movie']="";
        $select_data = $this->bdd->query("SELECT * FROM movie WHERE id_movie=$id_movie");
        while($result = $select_data->fetch()){

            $_SESSION['details_movie']=
            '<section class="details_movie">
    
                <section class="background" style="background: linear-gradient(to bottom, transparent, rgb(18, 18, 18)), url(\''. $result['background'] .'\'), linear-gradient(to bottom, transparent, rgb(18, 18, 18)); background-repeat: no-repeat; background-size: cover;"></section>

                <section class="affiche-text">

                    <div class="affiche" style="background-image:url(\''. $result['affiche'] .'\');"></div>
                    
                    <div class="text">
                        <p class="title">'.$result['title'].'</p>
                        <p class="genre">'.$result['genre'].'</p>
                        <div class="evaluation">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="resum">
                            '.$result['resum'].'
                        </p>

                        <br>
                        <div style="display:flex; justify-content:space-between;">
                            <div class="voir"><i class="fas fa-plus"></i> VOIR</div>
                            <div class="edit"><i class="far fa-edit"></i> MODIFIER</div>
                        </div>
                    </div>

                </section>
            
            </section>';


            $url_params = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);

            if(substr($url_params[2], 0, 5)=="movie"){
                $id_movie=substr($url_params[2], 5);
            }
          

            $_SESSION['edit_movie']=
            '<div class="fond"></div>

            <form class="popup" method="POST" action="../MVC_PiePHP/updateMovie'. $id_movie.'">
                <div><div class="popin-dismiss">&times;</div></div>
                <div class="mini_bg" style="background: linear-gradient(to bottom, transparent, rgb(18, 18, 18)), url(\''. $result['background'] .'\'), linear-gradient(to bottom, transparent, rgb(18, 18, 18)); background-repeat: no-repeat; background-size: cover;">
                    <input type="text" class="mini_title" name="title" value="'.$result['title'].'" required="required"/>
                    <p class="mini_genre">'.$result['genre'].'</p>
                </div>
                <div class="mini_affiche" style="background-image:url(\''. $result['affiche'] .'\');"></div>
                
                <textarea class="mini_resum" name="resum" required="required">'.$result['resum'].'</textarea>
            
                <select class="genres" name="genre">
                    '.$_SESSION['genre_list'].'
                </select>
                
                <div class="boutons">
                    <a href="deleteMovie'.$id_movie.'"><div class="delete">SUPPRIMER</div></a>
                    <input class="ok" type="submit" value= "VALIDER"/>
                </div> 

                <input type="hidden" name="id_movie" value="'.$id_movie.'"/>
            </form>';
        }

    }

    
    public function update($id_movie, $title, $resum, $genre){
      
        echo $resum;


        //$resum = nl2br(htmlspecialchars ($resum,ENT_QUOTES));
        $data_update= $this->bdd->query('UPDATE movie SET title="'. $title .'", resum="'. $resum .'", genre="'. $genre .'" WHERE id_movie='. $id_movie ) or die("failed");
        header("location:movie$id_movie");
    }


    public function delete($id_movie){

        $this->bdd->exec("DELETE FROM movie WHERE id_movie=$id_movie"); 
        header("location:index");
    }

    public function read_all(){

        $_SESSION['result_home']="";
        $select_data = $this->bdd->query("SELECT * FROM movie");
        while($result = $select_data->fetch()){
            $_SESSION['result_home'].=
            
            
            '<a href="movie'.$result['id_movie'].'">'.
            '<section class="movie">' .
            '<div class="affiche" style="background-image:url(\''. $result['background'] .'\');"></div>'.
            
                '<div class="title_eval">
                    <p class="title">'.$result['title'].'</p>
                    <div class="evaluation">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            
            </section>
            </a>';
        }

        $_SESSION['genre_list']="";
        $select_data = $this->bdd->query("SELECT * FROM genres");
        while($result = $select_data->fetch()){
            $_SESSION['genre_list'].=
            '<option value="'.$result['genre'].'">'.$result['genre'].'</option>';
        }

    }
}