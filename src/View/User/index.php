<?php
    define('BASE_URI', str_replace('\\', '/', substr(__DIR__ , strlen($_SERVER['DOCUMENT_ROOT']) ) ) ) ;
    require_once(implode(DIRECTORY_SEPARATOR, ['../../../Core', 'autoload.php']) ) ;

    $app = new Core\Core();
    $app -> run();

?>



<!DOCTYPE HTML>
<html>
    <header>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="../../webroot/css/home.css">
        <title>Index</title>
    </header>
    

    <body>
<!-- 
       
        <pre>
            POST
            <?php //print_r($_POST); ?>
        </pre>

        <pre>
            GET
            <?php //print_r($_GET); ?>
        </pre>

        <pre>  
            SERVER
            <?php //print_r($_SERVER); ?>
        </pre> -->
    </body>

</html>