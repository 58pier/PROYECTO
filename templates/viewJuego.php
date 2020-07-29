<?php include "include/header.php" ?>
<div class="title_game">
    <h1><?php echo htmlspecialchars($results['juego']->nombre) ?></h1>
    <div class="game_img">
        <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($results['juego']->trailer) ?>"><?php  /*CARRUSSEL DE IMAGENES DEL JUEGO*/ ?>
    </div>
</div>
<div>
    <div class="logo_juego">
        <img src=""> <?php  /*LOGO DEL JUEGO */ ?>
        <div class="resumen">

            <h3><?php echo htmlspecialchars($results['juego']->resumen) ?> </h3>
            <div class="compra">
                <input type="button" value="COMPRAR">
            </div>
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
                <p><?php echo date('j M Y',$results['juego']->fecha) ?></p>
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
    <p><?php echo htmlspecialchars($results['juego']->idiomas) ?></p>
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
            <td><?php echo htmlspecialchars($results['juego']->requerimientos) ?></td>
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

<?php include "include/footer.php" ?>