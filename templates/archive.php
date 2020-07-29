<?php include "include/header.php" ?>



<div class="container-body">
    <h1> <?php echo htmlspecialchars( $results['pageHeading'])?> </h1>
    <div class="portada-categoria">
        <img src="">
    </div>
    <div class="container-categoria">

        <table>
            <?php //for para i<3 
            ?>
            <tr>
                <?php  /*FOR EACH -> articulo hasta 4 */ ?>

                <td>
                    <div class="juego-homepage">
                        <img src="">
                        <?php //titulo 
                        ?>
                    </div>
                </td>
                <?php /*Termina el for */ ?>
            </tr>
            <?php //termina el for de i 
            ?>
        </table>
    </div>
</div>



<?php include "include/footer.php" ?>