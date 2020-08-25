<!DOCTYPE html>
<html lang="es">
<?php

use  css\estilos; ?>

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
                            <li><a href="categoria_<?php echo $categoria->id ?>"><?php echo htmlspecialchars($categoria->nombre) ?></a></li>

                        <?php } ?>
                        <?php if( $results['categorias']){ ?>
                        <li>
                            <div class="icon-menu1 ctn-icon-search">
                                <img id="icon-search" src="img/busqueda.png" alt="">
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>
    <ul id="box-search">
        <?php foreach ($results['juegos'] as $juegolista) { ?>
            <li>
                <a href="juego_<?php echo $juegolista->id ?>">
                    <i class="fas fa-search">
                    </i>
                    <?php echo htmlspecialchars($juegolista->nombre) ?>
                </a>
            </li>
        <?php } ?>
    </ul>
    <div id="ctn-icon-search">
        <i class="fas fa-search" id="icon-search"></i>
    </div>
    <div id="cover-ctn-search"></div>
    <div id="icon-menu">
        <i class="fas fa-bars"></i>
    </div>

    <div class="container">