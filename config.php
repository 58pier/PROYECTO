<?php 

    ini_set("display_errors",true); 
    date_default_timezone_get("America/Lima");

    define("DB_DNS","mysql:localhost;dbname=proyecto");

    define("DB_USERNAME","root");
    define("DB_PASSWORD","");

    define("CLASS_PATH","classes");
    define("TEMPLATE_PATH","templates");

    define("HOMEPAGE_NUM_JUEGOS",5);

    define("ADMIN_USERNAME","root");
    define("ADMIN_PASSWORD","admin");

    require(CLASS_PATH. "/Juego.php");

    function handleException($exception)
    {
        echo "Lo sentimos, tenemos un problema. Por favor intente mas tarde";
        echo_log($exception->getMessage());
    }

    set_Exception_handler('handleException');

?>