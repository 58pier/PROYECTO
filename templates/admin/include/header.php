<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">


    <title><?php echo htmlspecialchars($results['pageTitle']) ?></title>
</head>

<body>

    <div class="container-menu">
        <div class="menu">
            <div class="logo">
                <img src="img/logo.png">
            </div>
        </div>
    </div>
    <div class="container" id="adminHeader">
        <h2> JMP Admin</h2>
        <p> Te has logeado  como <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=listJuegos"> Editar juegos</a> <a href="admin.php?action=listCategorias">Editar categorias</a> <a href="admin.php?action=logout">Cerrar sesión</a></p>
    </div>