<?php 
namespace Model;


class genreModel{

    public $all_genres;

    public function __construct(){   
        $this->bdd = new \PDO('mysql:host=localhost;dbname=Pie_PHP;charset=utf8', 'root', 'root');
    }

    public function save($genre, $image, $resum){
        
        $this->bdd->exec("INSERT INTO genres (genre, image, resum) 
        VALUES('".$genre."', '".$image."', '".$resum."') ") or die("failed");

        header("location:genres");
    }

    public function update($id_genre, $name, $resum){

        $data_update= $this->bdd->query('UPDATE genres SET genre="'. $name .'", resum="'. $resum .'" WHERE id_genre='. $id_genre ) or die("failed");
        header("location:genres");
    }

    public function delete($id_genre){

        $this->bdd->exec("DELETE FROM genres WHERE id_genre=$id_genre"); 
        header("location:genres");
    }


    public function read_all(){

        $result_genres=array();
        $select_data = $this->bdd->query("SELECT * FROM genres");
        while($result = $select_data->fetch()){
            array_push($result_genres, 
            "<div class='genre' onclick='editGenre(". $result['id_genre'] .", \"". $result['genre'] ."\", \"". $result['image'] ."\", \"".$result['resum']."\")'
             style='background:linear-gradient(to bottom, transparent, rgb(18, 18, 18)), url(\"". $result['image'] ."\"); background-size:cover;'><h3>". $result['genre'] ."</h3></div>");
        }

        return $result_genres;
    }

}