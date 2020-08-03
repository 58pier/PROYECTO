<?php include "include/header.php" ?>
<?php $arreglo = $results['juego']->getImages(); ?>

<div class="title_game">
    <h1><?php echo htmlspecialchars($results['juego']->nombre) ?></h1>
    <div class="game_img">
        <iframe src="<?php echo htmlspecialchars($arreglo[4])  . "?controls=0&amp"; ?>" frameborder="0" allow="autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($arreglo[0]); ?>">
        <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($arreglo[1]); ?>">
        <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($arreglo[2]); ?>">
    </div>
</div>
<div>
    <div class="logo_juego">
        <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($arreglo[3]); ?>">
        <div class="resumen">

            <h3><?php echo htmlspecialchars($results['juego']->resumen) ?> </h3>

        </div>
    </div>
</div>
<div class="acerca">
    <h2>Acerca del juego:</h2>
    <table class="tabla1">
        <thead>
            <tr>
                <th colspan='1'>DESARROLLADOR</th>
                <th colspan='1'>FECHA DE LANZAMIENTO</th>
                <th colspan='1'>CLASIFICACION</th>
                <th colspan='1'>PLATAFORMA</th>
            </tr>
        </thead>
        <tr>
            <td>
                <p><?php echo htmlspecialchars($results['juego']->desarrollador) ?></p>
            </td>
            <td>
                <p><?php echo date('j M Y', $results['juego']->fecha) ?></p>
            </td>
            <td>
                <p><?php echo htmlspecialchars($results['juego']->clasificacion) ?></p>
            </td>
            <td>
                <p><?php echo htmlspecialchars($results['juego']->plataforma) ?></p>
            </td>
        </tr>
    </table>
</div>
<div class="language">
    <h2>Idiomas:</h2>
    <table class="tabla1">
        <thead>
            <tr>
                <th colspan='1'>Español</th>
                <th colspan='1'>Ingles</th>
                <th colspan='1'>Frances</th>
                <th colspan='1'>Ruso</th>
            </tr>
        </thead>
        <tr>
            <td><input type="checkbox" name="español" id="español" disabled <?php if ($results['juego']->getIdiomas(0) == "español") echo "checked" ?>></td>
            <td><input type="checkbox" name="ingles" id="ingles" disabled <?php if ($results['juego']->getIdiomas(1) == "ingles") echo htmlspecialchars("checked") ?>></td>
            <td><input type="checkbox" name="ingles" id="frances" disabled <?php if ($results['juego']->getIdiomas(2) == "frances") echo htmlspecialchars("checked") ?>></td>
            <td><input type="checkbox" name="ruso" id="ruso" disabled <?php if ($results['juego']->getIdiomas(3) == "ruso") echo htmlspecialchars("checked") ?>></td>
        </tr>
    </table>
</div>
<div class="descripcion">
    <h2>Descripcion:&nbsp&nbsp&nbsp&nbsp</h2>
    <div class="descr_text">
        <h3><?php echo htmlspecialchars($results['juego']->descripcion) ?></h3>
    </div>
</div>
<div class="acerca">
    <h2>Requerimientos:</h2>
    <table class="tabla1">
        <thead>
            <tr>
                <th colspan='1'>PROCESADOR</th>
                <th colspan='1'>SO</th>
                <th colspan='1'>MEMORIA RAM</th>
                <th colspan='1'>TARJETA GRÁFICA</th>
            </tr>
        </thead>
        <tr>
            <td><?php echo htmlspecialchars($results['juego']->getRequerimientos(0)) ?></td>
            <td><?php echo htmlspecialchars($results['juego']->getRequerimientos(1)) ?></td>
            <td><?php echo htmlspecialchars($results['juego']->getRequerimientos(2)) ?></td>
            <td><?php echo htmlspecialchars($results['juego']->getRequerimientos(3)) ?></td>
        </tr>
    </table>
</div>
<div class="descripcion">
    <h2>Más informacion: <a href="<?php echo htmlspecialchars($results['juego']->pagina_web) ?>">Click aqui...</a></h2>
</div>
<div class="derechos_de_autor">
    <h2>Derechos de autor:</h2>
    <h3><?php echo htmlspecialchars($results['juego']->derechos_autor) ?></h3>

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