<?php include "include/header.php" ?>
<div class="lista_juegos">
    <div class="titulo_lista">
        <h2>LISTA DE CATEGORIAS</h2>
    </div>
    <?php if (isset($results['errorMessage'])) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
    <?php } ?>

    <?php if (isset($results['statusMessage'])) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
    <?php } ?>

    <div class="lista_lista">

        <table>

            <tr>
                <th>Categoria</th>
            </tr>

            <?php foreach ($results['categorias'] as $categoria) { ?>

                <tr onclick="location='admin.php?action=editCategoria&amp;categoriaId=<?php echo $categoria->id ?>'">
                    <td> <?php echo $categoria->nombre ?></td>
                </tr>
            <?php } ?>
        </table>

    </div>
    <p> <?php echo $results['totalRows'] ?> categoria<?php echo ($results['totalRows'] != 1) ? 's' : '' ?> en total</p>

    <p><a href="admin.php?action=newCategoria"> Añadir una nueva categoria</a></p>
</div>
<?php include "templates/include/footer.php" ?>