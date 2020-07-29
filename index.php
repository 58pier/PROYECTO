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
        $categoriaId = ( isset( $_GET['categoriaId']) && $_GET['categoriaId']) ? (int) $_GET['categoriaId'] : null;
        $results['categoria'] = Category::getById($categoriaId);
        $data = Juego::getList(100000 , $results['categoria'] ? $results['categoria']->id : null );
        $results['juegos'] = $data ['results'];
        $results['totalRows'] = $data['totalRows'];
        $data = Category::getList();
        $results['categorias'] = array();
        foreach ( $data['results'] as $categoria) $results['categorias'][$categoria->id] = $categoria;
        $results['pageHeading'] = $results['categoria'] ? $results['categoria']->nombre : "Juego Archivado";
        $results['pageTitle'] = $results['pageHeading'];
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
        $results['juego'] = Juego::getById( (int)$_GET["juegoId"]);
        $results['categoria'] = Category::getById( $results['juego']->categoriaId);
        $results['pageTitle'] = $results['juego']->nombre ;
        require(TEMPLATE_PATH . "/viewJuego.php");
    }
    
    function homepage(){

        $results = array();
        $data = Juego::getList( HOMEPAGE_NUM_JUEGOS);
        $results['juegos'] = $data['results'];
        $results['totalRows'] = $data['totalRows'];
        $data = Category::getList();
        $results['categorias'] = array();
        foreach ( $data['results'] as $categoria) $results['categorias'] [$categoria->id] = $categoria;
        $results['pageTitle'] = "GAMER STORE JMP";
        require (TEMPLATE_PATH . "/homepage.php");
    }
?>