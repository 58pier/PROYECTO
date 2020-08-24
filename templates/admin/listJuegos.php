<?php include "include/header.php" ?>
<div class="lista_juegos">
    <div class="titulo_lista">
        <h2>LISTA DE JUEGOS</h2>
    </div>
    <?php if (isset($results['errorMessage'])) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
    <?php } ?>

    <?php if (isset($results['statusMessage'])) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
    <?php } ?>

    <div class="lista_lista">

        <table class="table_lista" border="1px" id="tabla">

            <thead>
                <tr>
                    <th>Fecha de Publicación</th>
                    <th>Juego</th>
                    <th>Categoría</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($results['juegos'] as $juego) { ?>
    
                    <tr onclick="location='admin.php?action=editJuego&amp;juegoId=<?php echo $juego->id ?>'">
                        <td> <?php echo date('j M Y', $juego->fecha) ?></td>
                        <td> <?php echo $juego->nombre ?></td>
                        <td> <?php echo $results['categorias'][$juego->categoriaId]->nombre ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <p><a href="admin.php?action=newJuego"> Añadir un nuevo Juego</a></p>
</div>
<?php include "templates/admin/include/footer.php" ?>