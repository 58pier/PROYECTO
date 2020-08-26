<?php include "templates/admin/include/header.php" ?>

<div id="sections4x">
    <h2><?php echo $results['pageTitle'] ?></h2>
    <form action="admin.php?action=<?php echo $results['formAction'] ?>" method="post">

        <div class="nombrecat">
            <div class="elemento-boleta">
                <h3>Nombre: </h3>
                    <p>
                        <?php echo htmlspecialchars($results['boleta']->nombres) ?>
                    </p>
            </div>
            <div class="elemento-boleta">
                <h3> Apellidos: </h3>
                    <p>
                        <?php echo htmlspecialchars($results['boleta']->apellidos) ?>
                    </p>
            </div>
            <div class="elemento-boleta">
                <h3>Dirección:</h3> <p>
                    <?php echo htmlspecialchars($results['boleta']->direccion) ?>
                </p>
            </div>
            <div class="elemento-boleta">
                <h3>Id-Payer: </h3> <p>
                    <?php echo htmlspecialchars($results['boleta']->dni) ?>
                </p>
            </div>
            <div class="elemento-boleta">
                <h3>Correo:  </h3><p>
                    <?php echo htmlspecialchars($results['boleta']->correo) ?>
                </p>
            </div>
            <div class="elemento-boleta">
                <h3>Juego:  </h3><p>
                    <?php echo htmlspecialchars($results['boleta']->juego) ?>
                </p>
            </div>
            <div class="elemento-boleta">
                <h3>Importe:  </h3> <p>
                    $<?php echo htmlspecialchars($results['boleta']->importe) ?>.00
                </p>
            </div>
            <div class="elemento-boleta">
                <h3>Fecha: </h3> <p>
                    <?php echo htmlspecialchars($results['boleta']->fecha) ?>
                </p>
            </div>
        </div>
        <div class="buttons">
            <input type="submit" name="regresar" value="Regresar" id="b1">
        </div>
    </form>
</div>

<?php if ($results['categoria']->id) { ?>
    <p> <a href="admin.php?action=deleteCategoria&amp;categoriaId=<?php echo $results['categoria']->id ?>" onclick="return confirm('Eliminar esta categoria? )">Eliminar esta categoria</a></p>
<?php } ?>
<?php include "templates/admin/include/footer.php" ?>