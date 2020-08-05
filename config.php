<?php 

    ini_set("display_errors",false); 
    date_default_timezone_get("America/Lima");

    define("DB_DNS","mysql:host=localhost;dbname=proyecto");

    define("DB_USERNAME","root");
    define("DB_PASSWORD","");

    define("CLASS_PATH","classes");
    define("TEMPLATE_PATH","templates");

    define("HOMEPAGE_NUM_JUEGOS",5);

    define("ADMIN_USERNAME","root");
    define("ADMIN_PASSWORD","admin");

    define("JUEGO_IMAGE_PATH", "juegos/img");
    define("JUEGO_VIDEO_PATH", "juegos/videos");


    require(CLASS_PATH. "/Juego.php");
    require(CLASS_PATH . "/Categoria.php");
    require(CLASS_PATH . "/Boleta.php");



    function handleException($exception)
    {
        echo "Lo sentimos, tenemos un problema. Por favor intente mas tarde";
        echo($exception->getMessage());
    }

    set_Exception_handler('handleException');

?>