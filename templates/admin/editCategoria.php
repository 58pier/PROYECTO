<?php include "templates/admin/include/header.php" ?>

<div id="sections3">
    <h2><?php echo $results['pageTitle'] ?></h2>
    <form action="admin.php?action=<?php echo $results['formAction'] ?>" method="post">

        <input type="hidden" name="categoriaId" value="<?php echo $results['categoria']->id ?>">
        <?php if (isset($results['errorMessage'])) { ?>
            <div class="errorMessage">
                <?php echo $results['errorMessage'] ?>
            </div>
        <?php } ?>
        <div class="nombrecat">
            <h3>Nombre de la categoría:
                <input type="text" placeholder="Nombre de la categoría" id="nombre" name="nombre" value="<?php echo htmlspecialchars($results['categoria']->nombre) ?>"> </h3>
        </div>
        <div class="descr_cat">
            <h3>Descripción:</h3>
            <textarea id="descripcion" name="descripcion" rows="10" cols="121" required maxlength="1000" placeholder="Escriba algo"> <?php echo htmlspecialchars($results['categoria']->descripcion) ?></textarea>
        </div>
        <div class="buttons">
            <input type="submit" name="saveChanges" value="Guardar Cambios" id="b1">
            <input type="submit" formnovalidate name="cancel" value="Cancelar" id="b2">
        </div>
    </form>
    <?php if ($results['categoria']->id) { ?>
            <p class="special-buttons"> <a href="admin.php?action=deleteCategoria&amp;categoriaId=<?php echo $results['categoria']->id ?>" onclick="return confirm('Eliminar esta categoria? )">Eliminar esta categoria</a></p>
    <?php } ?>
</div>


<?php include "templates/admin/include/footer.php" ?>