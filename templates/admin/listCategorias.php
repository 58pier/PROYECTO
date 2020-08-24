<?php include "include/header.php" ?>
<div class="lista_juegos">
    <div class="titulo_lista">
        <h2>LISTA DE CATEGORÍAS</h2>
    </div>


    <div class="lista_lista">

        <table id="tabla">

            <thead>
                <tr>
                    <th>Categoría</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($results['categorias'] as $categoria) { ?>

                    <tr onclick="location='admin.php?action=editCategoria&amp;categoriaId=<?php echo $categoria->id ?>'">
                        <td> <?php echo $categoria->nombre ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <?php if (isset($results['errorMessage'])) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
    <?php } ?>

    <?php if (isset($results['statusMessage'])) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
    <?php } ?>

    <p class="special-buttons"> <a href="admin.php?action=newCategoria"> Añadir una nueva categoria</a></p>
</div>
<?php include "templates/admin/include/footer.php" ?>