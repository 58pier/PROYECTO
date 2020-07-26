<?php include "include/header.php" ?>

<div class="slider">
<?php foreach ( $results['juegos'] as $juego) { ?>
    <div class="slide">
        <a href=".?action=viewJuego&amp;juegoId=<?php echo $juego->id?>">
            <div class="slide-img">
                <img src="<?php echo JUEGO_IMAGE_PATH .($article->trailer)?>">
            </div>
            <div class="slide-title">
                <span> <?php echo ($juego->nombre) ?></span>
            </div>
            </div>
        </a>  
<?php } ?> 
</div>

<?php foreach( $results['categorias'] as $categoria) { ?>
<div class="container-categoria">
    <h3 class="category"> <a href=".?action=archive&amp;categoriaId=<?php echo $categoria->nombre?>"><?php echo htmlspecialchars($categoria->nombre) ?></a> </h3>
    <div class="container-juego">
        <table> 
            <tr> 
                  <?php  /*FOR EACH -> articulo hasta 4 */ ?>

                <td> 
                <div class="juego-homepage">
                    <img src="">
                </div>
                </td>
                <?php /*Termina el for */?>
            </tr>
        </table>
        <h3><a>VER MAS</a></h3>
    </div>
</div>
<?php } ?>

<?php include "include/footer.php"?>