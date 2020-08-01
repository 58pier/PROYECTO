<?php include "include/header.php" ?>



<div class="container-body">
    <h1> <?php echo htmlspecialchars($results['pageHeading']) ?> </h1>
    <div class="slider">
        <?php foreach ($results['juegos'] as $juego) { ?>
            <div class="slide">
                <a href=".?action=viewJuego&amp;juegoId=<?php echo $juego->id ?>">
                    <div class="slide-img">
                        <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($juego->getImages(0)) ?>">
                    </div>
                    <div class="slide-title">
                        <span> <?php echo ($juego->nombre) ?></span>
                    </div>
            </div>
            </a>
        <?php } ?>
    </div>
</div>
<div>
    <div>
        <?php foreach ($results['juegos'] as $juego) { ?>
                <div class="slide-juegox">
                    <a href=".?action=viewJuego&amp;juegoId=<?php echo $juego->id ?>">
                        <div class="slide-img3">
                            <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($juego->getImages(0)) ?>">
                        </div>
                        <div class="slide-title">
                            <span> <?php echo ($juego->nombre) ?></span>
                        </div>
                </div>
        <?php } ?>
    </div>
</div>
<?php include "include/final-divs.php" ?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".slider").slick({
            lazyLoad: 'ondemand', // ondemand progressive anticipated
            infinite: true
        });
    });
</script>

<?php include "include/footer.php" ?>