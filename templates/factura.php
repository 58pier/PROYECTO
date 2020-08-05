<?php include "include/header.php" ?>

<div id="sections2">
    <h2>FACTURACIÓN</h2>
    <div class="conte2">
        <div id="sec3">
            <div class="contenedor_juego">
                <div id="imgx">
                    <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($results['juego']->getImages(3)); ?>" width="60px" height="60px">
                </div>
                <div id="descripcion">
                    <h3><?php echo htmlspecialchars($results['juego']->nombre) ?></h3>
                </div>
                <div id="tot">
                    <h3>$ <?php echo htmlspecialchars($results['juego']->precio) ?>.00</h3>
                </div>
            </div>
        </div>
        <div id="sec4">
            <form action="index.php?action=<?php echo $results['formAction'] ?>" method="post">
                <div class="formulario">
                    <h3>Nombre:</h3>
                    <input name="nombres" class="factura" type="text" id="nombres">
                    <h3>Apellidos:</h3>
                    <input name="apellidos" class="factura" type="text" id="apellidos">
                    <h3>DNI:</h3>
                    <input class="factura" name="dni" type="text" id="dni">
                    <h3>DIRECCIÓN:</h3>
                    <input class="factura" name="direccion" type="text" id="direccion">
                </div>
                <div class="formulario2">
                    <h3>Correo:</h3>
                    <input class="factura" name="correo" type="text" id="correo">
                    <input class="factura" name="juego" id="boton2" type="hidden" size="" value="<?php echo $results['juego']->nombre ?>">
                    <input class="factura" name="importe" id="boton2" type="hidden" size="" value="<?php echo $results['juego']->precio ?>">
                    <input type="submit" value="Comprar" name="saveCompra">
                    <input type="submit" value="Cancelar"  name="cancelar" >
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "include/final-divs.php" ?>

<?php include "include/footer.php" ?>