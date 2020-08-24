<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css" />
    

    <title><?php echo htmlspecialchars($results['pageTitle']) ?></title>
</head>

<body>

    <div class="container-menu">
        <div class="menu">
            <div class="logo">
                <a href="admin.php"><img src="img/logo.png"></a>
            </div>
        </div>
    </div>
    <div class="container" id="adminHeader">
        <h2> JMP Admin</h2>
        <p> Te has logeado como <b><?php echo htmlspecialchars($_SESSION['username']) ?></b>. <a href="admin.php?action=listJuegos"> Editar juegos</a> <a href="admin.php?action=listCategorias">Editar categorias</a> <a href="admin.php?action=listBoletas">Ver Boletas</a> <a href="admin.php?action=logout">Cerrar sesión</a></p>
    </div>