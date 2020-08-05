<?php include "include/header.php" ?>
<?php $arreglo = $results['juego']->getImages(); ?>
<style>
    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }
</style>
<div class="title_game">
    <h1><?php echo htmlspecialchars($results['juego']->nombre) ?></h1>
    <div class="game_img">
        <iframe src="<?php echo htmlspecialchars($arreglo[4])  . "?controls=0&amp"; ?>" frameborder="0" allow="autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($arreglo[0]); ?>">
        <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($arreglo[1]); ?>">
        <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($arreglo[2]); ?>">
    </div>
</div>
<div class="body-juego">
    <div class="logo_juego">
        <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($arreglo[3]); ?>">
        <div class="resumen">
            <h4><?php echo htmlspecialchars($results['juego']->resumen) ?> </h4>
        </div>
        <div class="button-pago">
            <button>
                <a href=".?action=buyJuego&amp;juegoId=<?php echo $results['juego']->id?>"><h4>$<?php echo htmlspecialchars($results['juego']->precio) ?>.00</h4></a>
            </button>
        </div>
    </div>

    <div class="fila">
        <h2>Acerca del juego</h2>
        <div class="acerca">
            <div class="acerca-elemento">
                <h5>DESARROLLADOR</h5>
                <p><?php echo htmlspecialchars($results['juego']->desarrollador) ?></p>
            </div>

            <div class="acerca-elemento">
                <h5>FECHA DE LANZAMIENTO</h5>
                <p><?php echo date('j M Y', $results['juego']->fecha) ?></p>
            </div>

            <div class="acerca-elemento">
                <h5>CLASIFICACION</h5>
                <p><?php echo htmlspecialchars($results['juego']->clasificacion) ?></p>
            </div>

            <div class="acerca-elemento">
                <h5>PLATAFORMA</h5>
                <p><?php echo htmlspecialchars($results['juego']->plataforma) ?></p>
            </div>
        </div>
    </div>
    <div class="lenguajes">
        <h2>Idiomas</h2>
        <div class="idiomas">

            <?php if ($results['juego']->getIdiomas(0) == "español") echo ("<div class='idioma-unico'> <p>Español</p> </div>"); ?>

            <?php if ($results['juego']->getIdiomas(1) == "ingles") echo ("<div class='idioma-unico'> <p>Ingles</p> </div>"); ?>

            <?php if ($results['juego']->getIdiomas(2) == "frances") echo ("<div class='idioma-unico'> <p>Frances</p> </div>"); ?>

            <?php if ($results['juego']->getIdiomas(3) == "ruso") echo ("<div class='idioma-unico'> <p>Ruso</p> </div>"); ?>

        </div>
    </div>
    <div class="descripcion">
        <h2>Descripción</h2>
        <div class="descr_text">
            <p><?php echo htmlspecialchars($results['juego']->descripcion) ?></p>
        </div>
    </div>
    <div class="requerimientos">
        <h2>Especificaciones</h2>
        <div class="requerimientos-body">
            <div class="requerimientos-individual">
                <h5>
                    PROCESADOR
                </h5>
                <p>
                    <?php echo htmlspecialchars($results['juego']->getRequerimientos(0)) ?>
                </p>

            </div>
            <div class="requerimientos-individual">
                <h5>
                    SISTEMA OPERATIVO
                </h5>
                <p>
                    <?php echo htmlspecialchars($results['juego']->getRequerimientos(1)) ?>
                </p>

            </div>
            <div class="requerimientos-individual">
                <h5>
                    MEMORIA RAM
                </h5>
                <p>
                    <?php echo htmlspecialchars($results['juego']->getRequerimientos(2)) ?>
                </p>

            </div>
            <div class="requerimientos-individual">
                <h5>
                    TARJETA GRÁFICA
                </h5>
                <p>
                    <?php echo htmlspecialchars($results['juego']->getRequerimientos(3)) ?>
                </p>
            </div>
        </div>
    </div>
    <div class="pagina_web">
        <h2>Información</h2>
        <div class="pagina_web-link">
            <a href="<?php echo htmlspecialchars($results['juego']->pagina_web) ?>"><img src="img/pagina-logo.png" alt=""></a>
        </div>
    </div>

    <div class="derechos_de_autor">
        <h5><?php echo htmlspecialchars($results['juego']->derechos_autor) ?></h5>
    </div>
</div>
<?php include "include/final-divs.php" ?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".game_img").slick({
            dots: true,
            infinite: true,
            variableWidth: true
        });
    });
</script>

<?php include "include/footer.php" ?>