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
    case 'logout':
        logout();
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
    case 'listCategorias':
        listCategorias();
        break;
    case 'newCategoria':
        newCategoria();
        break;
    case 'editCategoria':
        editCategoria();
        break;
    case 'deleteCategoria':
        deleteCategoria();
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
            require( TEMPLATE_PATH . "/admin/loginForm.php");
        }
    } 
    else
    {
        require (TEMPLATE_PATH . "/admin/loginForm.php");
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
        header( "Location: admin.php?status=changesSaved");
    } elseif( isset($_POST['cancel']))
    {
        header( "Location: admin.php");
    }
    else{

        $results['juego'] = new Juego;
        $data = Category::getList();
        $results['categorias'] = $data['results'];
        require(TEMPLATE_PATH . "/admin/editJuego.php");
    }
}

function editJuego(){

    $results=array();
    $resuls['pageTitle'] = "Editar Juego";
    $results['formAction'] = "editJuego";

    if( isset($_POST['saveChanges']))
    {
        if( !$juego = Juego::getById( (int)$_POST['juegoId']))
        {
            header( "Location: admin.php?error=juegoNotFound");
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
        $results['juego'] = Juego::getById((int) $_GET['juegoId']);
        $data = Category::getList();
        $results['categorias'] = $data['results'];
        require( TEMPLATE_PATH . "/admin/editJuego.php");
    }
}

function deleteJuego()
{
    if( !$juego = Juego::getById( (int) $_GET['juegoId']))
    {
        header( "Location: admin.php?error=juegoNotFound");
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
    $data = Category::getList();
    $results['categorias'] = array();
    foreach ( $data['results'] as $categoria) $results['categorias'][$categoria->id] = $categoria;
    $results['pageTitle'] = "Todos los  juegos"; 

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

function listCategorias()
{
    $results = array();
    $data = Category::getList();
    $results['categorias'] = $data['results'];
    $results['totalRows'] = $data['totalRows'];
    $results['pageTitle'] = "Categorias de Juegos";

    if( isset( $_GET['error']))
    {
        if( $_GET['error'] == "categoriaNotFound" ) $results['errorMessage'] = "Error: Categoria no encontrada.";
        if( $_GET['error'] == "categoriaContainsJuegos") $results['errorMessage'] = "Error: Categoria contiene articulos. Elimina los articulos, o alignalos a otra categoria antes de eliminar esta categoria.";
    }

    if( isset( $_GET['status']))
    {
        if( $_GET['status'] == "changesSaved") $results['statusMessage'] = "Tus cambios han sido guardados";
        if( $_GET['status'] == "categoriaDeleted") $results['statusMessage'] = "Categoria eliminada.";
    }
    require( TEMPLATE_PATH . "/admin/listCategorias.php");
}

function newCategoria()
{
    $results = array();
    $results['pageTitle'] = "Nueva Categoria de Juego";
    $results['formAction'] = "newCategoria";

    if( isset( $_POST['saveChanges']))
    {
        $categoria = new Category;
        $categoria->storeFormValues( $_POST);
        $categoria->insert();
        header( "Location: admin.php?action=listCategorias&status=changesSaved");
    }
    elseif( isset( $_POST['cancel']))
    {
        header( "Location: admin.php?action=listCategorias");
    }
    else
    {
        $results['categoria'] = new Category;
        require( TEMPLATE_PATH . "/admin/editCategoria.php");
    }
}

function editCategoria()
{
    $results = array();
    $results['pageTitle'] = "Editar Categoria de Juego";
    $results['formAction'] = "editCategoria";

    if( isset( $_POST['saveChanges']))
    {
        if( !$categoria = Category::getById( (int)$_POST['categoriaId']))
        {
            header( "Location: admin.php?action=listCategorias&error=categoriaNotFound");
            return;
        }

        $categoria->storeFormValues( $_POST);
        $categoria->update();
        header( "Location: admin.php?Action=listCategorias&status=changesSaved");
    }
    elseif( isset( $_POST['cancel']))
    {
        header( "Location: admin.php?action=listCategorias");
    }
    else
    {
        $results['categoria'] = Category::getById( (int)$_GET['categoriaId']);
        require( TEMPLATE_PATH . "/admin/editCategoria.php");
    }
}

function deleteCategoria()
{
    if( !$categoria = Category::getById( (int)$_GET['categoriaId']))
    {
        header( "Location: admin.php?action=listCategorias&error=categoriaNotFound");
    }
    
    $juegos = Juego::getList( 1000000 , $categoria->id);

    if( $juegos['totalRows'] > 0)
    {
        header( "Location: admin.php?action=listCategories&error=categoriaContainsJuegos");
        return;
    }

    $categoria->delete();
    header( "Location: admin.php?action=listCategorias&status=categoriaDeleted");

}
?>