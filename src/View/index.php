<!DOCTYPE HTML>
<html lang="FR" >
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport"
        content ="width= device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" type="text/css" href="../../MVC_PiePHP/webroot/css/home.css">
        <link rel="stylesheet" type="text/css" href="../../MVC_PiePHP/webroot/css/profil.css">
        <link rel="stylesheet" type="text/css" href="../../MVC_PiePHP/webroot/css/movie.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
        <title>Pie PHP </title >
    </head>
    
    <body>
        <section class="view_contents">
            <?php include("app/side_bar.php"); ?>

            <div class="menu-contents">
                <?php include("app/menu.php"); ?>
                <div class="view">
                    <?=$view ?>
                </div>
            </div>
        </section>

        <script src="https://kit.fontawesome.com/9b58f0fd79.js" crossorigin="anonymous"></script>
    </body>
</html>