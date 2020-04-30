<nav>
   
    <a href=""></a>

    <?php 
        //$_SESSION['surname']="Koum";
        if(isset($_SESSION['surname'])){
            echo "<p class='hello'>Bonjour " . $_SESSION['surname'] ."</p>";
            echo '<a href="../MVC_PiePHP/logout" class="button">DECONNEXION</a>';
        }
        else{
           echo '<a href="../MVC_PiePHP/login" class="button">CONNEXION</a>';
        }
    ?>


</nav>