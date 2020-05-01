<section class="profil">
    <div class="name"><?php echo $_SESSION['surname'] . ' ' . $_SESSION['name']; ?></div>
    <form class="form_profil" method="POST" action="../MVC_PiePHP/updateProfil">
        <div class="profil_picture"></div>
        <section class="section_form">
            <div class="identity">
                <p>Prénom : <input type="text" name="surname" value="<?php echo $_SESSION['surname'];?>" required="required"></p>
                <p>Nom : <input type="text" name="name" value="<?php echo $_SESSION['name'];?>" required="required"></p>
                <p>Email : <input type="email" name="email" value="<?php echo $_SESSION['email'];?>" required="required"></p>
            </div>
            <br><br>
            <input type="hidden" name="update" value="identity"/>
            <input type="submit" value="confirmer les modifications" class="confirm">

        </section>
    </form>

    <form class="form_password" method="POST" action="../MVC_PiePHP/updateProfil">

        <div class="password">
            <p>Mot de passe actuel : <input type="password" name="password"></p><br>
            <p>Nouveau  mot de passe : <input type="password" name="new_password"></p>
            <p>Confirmation : <input type="password" name="new_password2"></p>
        </div>

        <input type="hidden" name="update" value="password"/>
        <input type="submit" value="changer de mot de passe" class="confirm">
    </form>

    <form class="form_delete" method="POST" action="../MVC_PiePHP/updateProfil">
        <div class="password">
            <p>Mot de passe : <input type="password" name="password"></p>
            <p>Confirmation : <input type="password" name="password2"></p>
        </div>

        <input type="hidden" name="update" value="delete"/>
        <input type="submit" class="delete" value="supprimer mon compte">
    </form>
</section>
