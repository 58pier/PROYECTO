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
    if( !$juego = Juego::getList( (int) $_Get))
}

?>