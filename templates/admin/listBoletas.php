<?php include "include/header.php" ?>
<div class="lista_juegos">
    <div class="titulo_lista">
        <h2>LISTA DE BOLETAS</h2>
    </div>
    <div class="lista_lista">

        <table class="table_lista">

            <tr>
                <th>Fecha de Publicacion</th>
                <th>Juego</th>
                <th>Importe</th>
            </tr>

            <?php foreach ($results['boletas'] as $boleta) { ?>

                <tr onclick="location='admin.php?action=viewBoleta&amp;boletaId=<?php echo $boleta->id ?>'">
                    <td> <?php echo $boleta->fecha ?></td>
                    <td> <?php echo $boleta->juego ?></td>
                    <td> <?php echo $boleta->importe ?></td>
                </tr>
            <?php } ?>
        </table>

    </div>
    <p> <?php echo $results['totalRows'] ?> juego<?php echo ($results['totalRows'] != 1) ? 's' : '' ?> en total</p>

</div>
<?php include "templates/admin/include/footer.php" ?>