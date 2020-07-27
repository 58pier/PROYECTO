<?php include "templates/admin/include/header.php" ?>

<h1><?php echo $results['pageTitle'] ?></h1>

<form action="admin.php?action=<?php echo $results['formAction'] ?>" method="post">

    <input type="hidden" name="juegoId" value="<?php echo $results['juego']->id ?>">

    <?php if (isset($results['errorMessage'])) { ?>
        <div class="errorMessage">
            <?php echo $results['errorMessage'] ?>
        </div>
    <?php } ?>

    <label for="nombre"> Nombre del Juego</label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre del juego" required autofocus maxlength="255" value="<?php echo htmlspecialchars($results['juego']->nombre) ?>">

    <label for="idiomas"> Idiomas del Juego</label>
    <input type="text" name="idiomas" id="idiomas" placeholder="Idiomas del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->idiomas) ?>">

    <label for="precio"> Precio del Juego</label>
    <input type="number" name="precio" id="precio" placeholder="Precio del juego" value="<?php echo htmlspecialchars($results['juego']->precio) ?>">

    <label for="desarrollador"> Desarrolador del Juego</label>
    <input type="text" name="desarrollador" id="desarrollador" placeholder="Desarrollador del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->desarrollador) ?>">

    <label for="plataforma"> Plataforma del Juego</label>
    <input type="text" name="plataforma" id="plataforma" placeholder="Plataforma del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->plataforma) ?>">

    <label for="clasificacion"> Clasificación del Juego</label>
    <input type="text" name="clasificacion" id="clasificacion" placeholder="Clasificacion del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->clasificacion) ?>">

    <label for="resumen"> Resumen del Juego</label>
    <textarea name="resumen" id="resumen" placeholder="Resumen del juego" required maxlength="100000"><?php echo htmlspecialchars($results['juego']->resumen) ?></textarea>

    <label for="requerimientos"> Requerimientos del Juego</label>
    <input type="text" name="requerimientos" id="requerimientos" placeholder="Requerimientos del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->requerimientos) ?>">

    <label for="pagina_web"> Pagina Web del Juego</label>
    <input type="text" name="pagina_web" id="pagina_web" placeholder="Pagina Web del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->pagina_web) ?>">

    <label for="derechos_autor"> Derechos del autor del Juego</label>
    <input type="text" name="derechos_autor" id="derechos_autor" placeholder="Derechos de autor del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->derechos_autor) ?>">

    <label for="trailer"> Trailer del Juego</label>
    <input type="text" name="trailer" id="trailer" placeholder="Trailer del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->trailer) ?>">

    <label for="descripcion"> Descripcion del Juego</label>
    <textarea name="descripcion" id="descripcion" placeholder="Descripcion del juego" required maxlength="100000"><?php echo htmlspecialchars($results['juego']->descripcion) ?></textarea>

    <label for="categoriaId"> Categoria del Juego</label>
    <select name="categoriaId">
        <option value="0" <?php echo !$results['juego']->categoriaId ? " selected" : "" ?>>(none)</option>
        <?php foreach ($results['categorias'] as $categoria) { ?>
            <option value="<?php echo $categoria->id ?>" <?php echo ($categoria->id == $results['juego']->categoriaId) ? " selected" : "" ?>><?php echo htmlspecialchars($categoria->nombre) ?></option>
        <?php } ?>
    </select>

    <label for="fecha"> Fecha del Juego</label>
    <input type="date" name="fecha" id="fecha" placeholder="YYYY-MM-DD" maxlength="10" value="<?php echo htmlspecialchars($results['juego']->fecha) ? date("Y-m-d", $results['juego']->fecha) : "" ?>">


    <div class="buttons">
        <input type="submit" name="saveChanges" value="Guardar Cambios">
        <input type="submit" formvalidate name="cancel" value="Cancelar">
    </div>
</form>

<?php if ($results['juego']->id) { ?>
    <p><a href="admin.php?action=deleteJuego&amp;juegoId=<?php echo $results['juego']->id ?>" onclick="return confirm('Eliminar este juego?)">Eliminar este Juego</a></p>
<?php } ?>

<?php include "templates/include/footer.php" ?>