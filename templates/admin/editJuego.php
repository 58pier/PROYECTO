<?php include "templates/admin/include/header.php" ?>

<div class="tit">
    <h1><?php echo $results['pageTitle'] ?></h1>
</div>

<form action="admin.php?action=<?php echo $results['formAction'] ?>" method="post">

    <input type="hidden" name="juegoId" value="<?php echo $results['juego']->id ?>">

    <?php if (isset($results['errorMessage'])) { ?>
        <div class="errorMessage">
            <?php echo $results['errorMessage'] ?>
        </div>
    <?php } ?>
    <div class="editjuego">
        <label for="nombre"> Nombre.......</label>
        <input type="text" class="nombre_juego" name="nombre" placeholder="Nombre del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->nombre) ?>">

        <label for="fecha">Fecha............</label>
        <input type="date" name="fecha" id="fecha" placeholder="YYYY-MM-DD" maxlength="10" value="<?php echo htmlspecialchars($results['juego']->fecha) ? date("Y-m-d", $results['juego']->fecha) : "" ?>">
        <br>



        <label for="idiomas"> Idiomas......</label>
        <input type="hidden" name="idiomas" id="idiomas" placeholder="Idiomas del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->idiomas) ?>">

        <label for="español"> <input type="checkbox" name="español" id="español" value="español" <?php if($results['juego']->getIdiomas(0)=="español")echo "checked" ?>> Español</label>
        <label for="ingles"> <input type="checkbox" name="ingles" id="ingles" value="ingles" <?php if ($results['juego']->getIdiomas(1) == "ingles") echo htmlspecialchars("checked") ?>> Ingles</label>
        <label for="frances"> <input type="checkbox" name="frances" id="frances" value="frances" <?php if ($results['juego']->getIdiomas(2) == "frances") echo htmlspecialchars("checked") ?>> Frances</label>
        <label for="ruso"> <input type="checkbox" name="ruso" id="ruso" value="ruso" <?php if ($results['juego']->getIdiomas(3) == "ruso") echo htmlspecialchars("checked") ?>> Ruso </label>


        <label for="precio"> Precio...........</label>
        <input type="number" name="precio" id="precio" placeholder="Precio del juego" value="<?php echo htmlspecialchars($results['juego']->precio) ?>">
        <br>
        <label for="desarrollador"> Desarrolador.</label>
        <input type="text" name="desarrollador" id="desarrollador" placeholder="Desarrollador del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->desarrollador) ?>">

        <label for="plataforma"> Plataforma.......</label>
        <input type="text" name="plataforma" id="plataforma" placeholder="Plataforma del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->plataforma) ?>">
        <br>
        <label for="clasificacion"> Clasificación</label>
        <input type="text" name="clasificacion" id="clasificacion" placeholder="Clasificacion del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->clasificacion) ?>">

        <!-- separamos los requerimientos -->
        <label for="procesador"> Procesador</label>
        <input type="text" name="procesador" id="procesador" placeholder="Trailer del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->getRequerimientos(0)) ?>">

        <label for="so"> Sistema Operativo</label>
        <input type="text" name="so" id="so" placeholder="Trailer del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->getRequerimientos(1)) ?>">

        <label for="memoria"> Memoria Ram </label>
        <input type="text" name="memoria" id="memoria" placeholder="Trailer del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->getRequerimientos(2)) ?>">

        <label for="tarjeta"> Tarjeta Gráfica</label>
        <input type="text" name="tarjeta" id="tarjeta" placeholder="Trailer del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->getRequerimientos(3)) ?>">

        <label for="requerimientos"> Requerimientos...</label>
        <input type="hidden" name="requerimientos" id="requerimientos" placeholder="Requerimientos del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->requerimientos) ?>">
        <br>



        <label for="pagina_web"> Pagina Web...</label>
        <input type="text" name="pagina_web" id="pagina_web" placeholder="Pagina Web del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->pagina_web) ?>">

        <label for="derechos_autor"> Derechos de autor</label>
        <input type="text" name="derechos_autor" id="derechos_autor" placeholder="Derechos de autor del juego" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->derechos_autor) ?>">
        <br>

        <!-- separamos las imagenes -->

        <label for="trailer_1"> Trailer</label>
        <input type="text" name="trailer_1" id="trailer_1" placeholder="URL del trailer" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->getImages(4)) ?>">

        <label for="portada"> Portada</label>
        <input type="text" name="portada" id="portada" placeholder="Nombre de la portada" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->getImages(0)) ?>">

        <label for="gameplay_1"> Gameplay 1</label>
        <input type="text" name="gameplay_1" id="gameplay_1" placeholder="Nombre del 1° Gameplay" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->getImages(1)) ?>">

        <label for="gameplay_2"> Gameplay 2</label>
        <input type="text" name="gameplay_2" id="gameplay_2" placeholder="Nombre del 2° Gameplay" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->getImages(2)) ?>">

        <label for="logo"> Logo</label>
        <input type="text" name="logo" id="logo" placeholder="Nombre del logo" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->getImages(3)) ?>">

        <input type="hidden" name="trailer" id="trailer" maxlength="255" value="<?php echo htmlspecialchars($results['juego']->trailer) ?>">



        <label for="categoriaId"> Categoria........</label>
        <select name="categoriaId" id="categoriaId">
            <option value="0" <?php echo !$results['juego']->categoriaId ? " selected" : "" ?>>(none)</option>
            <?php foreach ($results['categorias'] as $categoria) { ?>
                <option value="<?php echo $categoria->id ?>" <?php echo ($categoria->id == $results['juego']->categoriaId) ? " selected" : "" ?>><?php echo htmlspecialchars($categoria->nombre) ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="resumen"> Resumen</label>
        <textarea name="resumen" id="resumen" placeholder="Resumen del juego" rows="10" cols="108" required maxlength="100000"><?php echo htmlspecialchars($results['juego']->resumen) ?></textarea>

        <label for="descripcion"> Descripcion del Juego</label>
        <textarea name="descripcion" id="descripcion" placeholder="Descripcion del juego" rows="10" cols="108" required maxlength="100000"><?php echo htmlspecialchars($results['juego']->descripcion) ?></textarea>
    </div>
    <div class="botones">
        <input id="btnjuego" type="submit" name="saveChanges" value="Guardar Cambios">
        <input id="btnjuego" type="submit" formvalidate name="cancel" value="Cancelar">
    </div>

</form>

<?php if ($results['juego']->id) { ?>
    <div class="del">
        <p><a href="admin.php?action=deleteJuego&amp;juegoId=<?php echo $results['juego']->id ?>" onclick="return confirm('Eliminar este juego?)">Eliminar este Juego</a></p>
    </div>
<?php } ?>
<br>
<?php include "templates/admin/include/footer.php" ?>