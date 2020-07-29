<?php include "include/header.php" ?>

<div id="sections2">
    <h2>FACTURACIÓN</h2>
    <div class="conte2">
        <div id="sec3">
            <div class="contenedor_juego">
                <div id="imgx">
                    <img src="dota.jpg" width="60px" height="60px">
                </div>
                <div id="descripcion">
                    <h3>Juego</h3>
                </div>
                <div id="tot">
                    <h3>Total: <?php /*Total */ ?></h3>
                </div>
            </div>
        </div>
        <div id="sec4">
            <div class="formulario">
                <h3>Nombre:</h3>
                <input class="factura" type="text" id="nombre">
                <h3>DNI:</h3>
                <input  class="factura"type="number" id="dni">
            </div>
            <div class="formulario2">
                <h3>Correo:</h3>
                <input class="factura" type="email" id="correo">
                <h3>Celular:</h3>
                <input class="factura" type="number" id="celular">
                <input class="factura" id="boton2" type="submit" size="" value="PAGAR">
            </div>
        </div>
    </div>
</div>

<?php include "include/footer.php" ?>