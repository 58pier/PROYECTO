<?php 
    require("config.php");
    $action = isset( $_GET['action']) ? $_GET['action'] : "";

    switch($action)
    {
        case 'archive':
            archive();
            break;
        case 'viewJuego':
            viewJuego();
            break;
        default:
            homepage();
    }

    function archive()
    {
        $results = array();
        $data = Juego::getList();
        $result['juegos'] = $data ['results'];
        $results['totalRows'] = $data['totalRows'];
        $results['pageTitle'] = "Juego Archive | Widgets News";
        require( TEMPLATE_PATH. "/archive.php");
    }

    function viewJuego()
    {
        if ( !isset($_GET["juegoId"]) || !$_GET["juegoId"])
        {
            homepage();
            return;
        }

        $results = array();
        $data = Juego::getList();
        $result['juegos'] = $data['results'];
        $results['totalRows'] = $data['totalRows'];
        $results['pageTitle'] = "Juego Archive | Widgets News";
        require(TEMPLATE_PATH . "/archive.php");
        
    
    }





?>