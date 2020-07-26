<?php include "include/header.php" ?>

<div class="slider">
<?php 
$src;
foreach ( $results['articles'] as $article ) {
$trailer = $article->trailer;

$src="../juegos/img/".    
    ?>
    <div class="slide">
        <div class="slide-img">
            <img src="../juegos/img/"
        </div>
        <div class="slide-title">

        </div>
    </div>   
</div>

<div class="container-categoria">
    <h3> ACCION </h3>
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
<div class="container-categoria">
    <h3> AVENTURA </h3>
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
<div class="container-categoria">
    <h3> HORROR </h3>
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


<?php include "include/footer.php"?>
