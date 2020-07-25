<?php 

require("config.php");
session_start();
$action = isset( $_GET['action']) ? $_GET['action'] : "";
$username = isset ( $_SESSION['username']) ? $_SESSION['username'] : "";

if ($action != "login" && $action != "logout" && !$username)
{
    login();
    exit;
}

switch( $action)
{
    case 'login':
        login();
        break;
    case 'newJuego':
        newJuego();
        break;
    case 'editJuego':
        editJuego();
        break;
    case 'deleteJuego':
        deleteJuego();
        break;
    default:
        listJuegos();
}

function login()
{
    $results = array();
    $results['pageTitle'] = "Admin Login | Widget News";

    if ( isset( $_POST['login']))
    {
        if( $_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD)
        {
            $_SESSION['username'] = ADMIN_USERNAME;
            header( "Location: admin.php");
        }
        else
        {
            $results['errorMessage'] = "Usuario o contraseña incorrecta. Intente de nuevo";
            require( TEMPLATE_PATH . "/admin/login.php");
        }
    } 
    else
    {
        require (TEMPLATE_PATH . "/admin/login.php");
    }
}

function logout()
{
    unset( $_SESSION['username']);
    header( "Location: admin.php");
}

function newJuego()
{
    $results = array();
    $results['pageTitle'] = "Nuevo Juego";
    $results['formAction'] = "newJuego";

    if( isset( $_POST['saveChanges']))
    {
        $juego = new Juego;
        $juego->storeFormValues( $_POST);
        $juego->insert();
        header( "Location: admnin.php?status=changesSaved");
    } elseif( isset($_POST['cancel']))
    {
        header( "Location: admin.php");
    }
    else{

        $results['juego'] = new Juego;
        require(TEMPLATE_PATH . "/admin/editJuego.php");
    }
}

function editJuego(){

    $results=array();
    $resuls['pageTitle'] = "Edit Juego";
    $results['formAction'] = "editJuego";

    if( isset($_POST['saveChanges']))
    {
        if( !$juego = Juego::getById( (int)$_POST['juegoId']))
        {
            header( "Location: admin.php?error = juegoNotFound");
            return;
        }
        $juego->storeFormValues( $_POST);
        $juego->update();
        header ( "Location: admin.php?status=changesSaved" );
    }
    elseif( isset( $_POST['cancel']))
    {
        header( "Location: admin.php");
    }
    else
    {
        $results['juego'] = Juego::getList((int) $_GET['juegoId']);
        require( TEMPLATE_PATH . "/admin/editJuego.php");
    }
}

function deleteArticle()
{
    if( !$juego = Juego::getById( (int) $_GET['articleId']))
    {
        header( "Location: admin/php?error=juegoNotFound");
        return;
    }
    $juego->delete();
    header( "Location: admin.php?error=juegoDeleted");
}

function listJuegos()
{
    $results = array();
    $data = Juego::getList();
    $results['juegos'] = $data['results'];
    $results['totalRows'] = $data['totalRows'];
    $results['pageTitle'] = "All juegos"; 

    if( isset( $_GET['error']))
    {
        if( $_GET['error'] == "juegoNotFound") $results['errorMessage'] = "Error :Juego not found.";
    }

    if( isset($_GET['status']))
    {
        if( $_GET['status'] == "changesSaved") $results['statusMessage'] = "Your changes have been saved";
        if ($_GET['status'] == "juegoDeleted") $results['statusMessage'] = "Juego Deleted";
    }

    require( TEMPLATE_PATH ."/admin/listJuegos.php");
    
}

?>