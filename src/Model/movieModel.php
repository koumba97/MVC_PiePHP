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
    public function save(){
        
        // $email=$this->params['email'];
        // $password=sha1($this->params['password']);
        // $name=$this->params['name'];
        // $surname=$this->params['surname'];

        // $this->data = $this->bdd->query("SELECT * FROM user WHERE email = '" . $email . "'");
        // if ($this->data->fetchColumn() > 0){
        //     return "veuillez saisir une autre adresse email";
        // }
        // else{

        //     $this->bdd->exec("INSERT INTO user (id, email, password, name, surname) 
        //     VALUES(0, '".$email."', '".$password."', '".$name."', '".$surname."') ") or die("failed");
    
        //     return "inscription réalisée avec succès";
        // }

    }

    public function read($id_movie){
        $_SESSION['details_movie']="";
        $select_data = $this->bdd->query("SELECT * FROM movie WHERE id_movie=$id_movie");
        while($result = $select_data->fetch()){
            //echo $email=$result['title'];
            $_SESSION['details_movie'].=
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
        }

    }

    
    public function update($id_movie, $title, $resum, $genre){
      
        echo $resum;


        //$resum = nl2br(htmlspecialchars ($resum,ENT_QUOTES));
        $data_update= $this->bdd->query('UPDATE movie SET title="'. $title .'", resum="'. $resum .'", genre="'. $genre .'" WHERE id_movie='. $id_movie ) or die("failed");
        header("location:movie$id_movie");
    }


    public function delete($id_movie){

        //$this->bdd->exec("DELETE FROM 'user' WHERE id=$id"); 
        
    }

    public function read_all(){

        $_SESSION['result_home']="";
        $select_data = $this->bdd->query("SELECT * FROM movie");
        while($result = $select_data->fetch()){
            $_SESSION['result_home'].=
            
            //'<a href="movie">'.
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
    }
}