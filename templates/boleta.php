<?php include "include/header.php" ?>

<div id="sections">
    <div class="conte">
        <div id="sec1">
            <div class="izquierda">
                <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($results['juego']->getImages(3)); ?>" width="340px" height="220px">
                <h3><?php echo htmlspecialchars($results['juego']->nombre) ?></h3>
            </div>
        </div>
        <div id="sec2">
            <div class="derecha">
                <h2>RESUMEN DE COMPRA</h2>
                <div id="caja">
                    <h3>Precio: $ <?php echo $results['juego']->precio ?>.00</h3>
                    <h3>Total:  $ <?php echo $results['juego']->precio ?>.00</h3>
                </div>
                <a href=".?action=payJuego&amp;juegoId=<?php echo $results['juego']->id?>"><input id="boton" type="submit" size="" value="CONTINUAR"></a>
            </div>
        </div>
    </div>
</div>
<?php include "include/final-divs.php" ?>
<?php include "include/footer.php" ?>