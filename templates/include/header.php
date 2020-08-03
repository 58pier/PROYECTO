<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="slick/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick//slick-theme.css" />

    <title><?php echo htmlspecialchars($results['pageTitle']) ?></title>
</head>

<body>

    <div class="container-menu">
        <div class="menu">
            <div class="logo">
                <a href="."><img src="img/logo.png"></a>
            </div>
            <div class="categorias">
                <nav>
                    <ul>
                        <?php foreach ($results['categorias'] as $categoria) { ?>
                            <li><a href=".?action=archive&amp;categoriaId=<?php echo $categoria->id ?>"><?php echo htmlspecialchars($categoria->nombre) ?></a></li>

                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">