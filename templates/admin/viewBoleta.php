<?php include "templates/admin/include/header.php" ?>

<div id="sections3">
    <h2><?php echo $results['pageTitle'] ?></h2>
    <form action="admin.php?action=<?php echo $results['formAction'] ?>" method="post">

        <div class="nombrecat">
            <h3>Nombres:
                <input type="text"  id="nombre" name="nombre" value="<?php echo htmlspecialchars($results['boleta']->nombres) ?>"> </h3>
            <h3> Apellidos</h3>
                <input type="text"  id="apellidos" name="nombre" value="<?php echo htmlspecialchars($results['boleta']->apellidos) ?>"> </h3>
            <h3>Direccion</h3> 
                <input type="text"  id="direccion" name="nombre" value="<?php echo htmlspecialchars($results['boleta']->direccion) ?>"> </h3>
            <h3>DNI</h3>    
                <input type="text"  id="nombre" name="nombre" value="<?php echo htmlspecialchars($results['boleta']->dni) ?>"> </h3>
            <h3>Correo</h3>    
                <input type="text"  id="nombre" name="nombre" value="<?php echo htmlspecialchars($results['boleta']->correo) ?>"> </h3>
            <h3>Juego</h3>    
                <input type="text"  id="nombre" name="nombre" value="<?php echo htmlspecialchars($results['boleta']->juego) ?>"> </h3>
            <h3>Importe</h3>
                <input type="text"  id="nombre" name="nombre" value="<?php echo htmlspecialchars($results['boleta']->importe) ?>"> </h3>
            <h3>Fecha:</h3>
                <input type="text"  id="nombre" name="nombre" value="<?php echo htmlspecialchars($results['boleta']->fecha) ?>"> </h3>
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