<nav>
   
    <a href="">FILMS DU MOMENT</a>

    <?php 
        //$_SESSION['surname']="Koum";
        if(isset($_SESSION['surname'])){
            echo "Bonjour " . $_SESSION['surname'];
            echo '<a href="../MVC_PiePHP/register" class="button">DECONNEXION</a>';
        }
        else{
           echo '<a href="../MVC_PiePHP/login" class="button">CONNEXION</a>';
        }
    ?>


</nav>