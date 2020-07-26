<?php include "include/header.php" ?>
<div class="lista_juegos">
   <div class="titulo_lista">
    <h2>LISTA DE JUEGOS</h2>
   </div>
   <div class="buscar_lista">
      <div class="buscar_producto">
          <input id="buscar_texto" type="text"> 
      </div>
      <div>
          <input id="boton_buscar" type="submit" size="" value="Buscar">
      </div>
   </div>
   <div class="lista_lista">

       <table>
            <?php //for de i=0 para i<cantidad de productos i++
            ?>
            <tr>
                <?php  /*FOR EACH */ ?>

                <td>
                    <div class="tabla_juegos">
                        <img src="">
                        <?php //información 
                        ?>
                    </div>
                </td>
                <?php /*Termina el for */ ?>
            </tr>
            <?php //termina el for de i 
            ?>
        </table>

   </div>

   <input id="añadir_lista" type="submit" size="" value="AÑADIR">
</div>
<?php include "templates/include/footer.php" ?>