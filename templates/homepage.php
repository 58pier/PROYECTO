<?php include "include/header.php" ?>

<div class="slider">
    <?php foreach ($results['juegos'] as $juego) { ?>
        <div class="slide">
            <a href=".?action=viewJuego&amp;juegoId=<?php echo $juego->id ?>">
                <div class="slide-img">
                    <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($juego->trailer) ?>">
                </div>
                <div class="slide-title">
                    <span> <?php echo ($juego->nombre) ?></span>
                </div>
        </div>
        </a>
    <?php } ?>
</div>

<?php foreach ($results['categorias'] as $categoria) { ?>
    <div class="container-categoria">
        <h3 class="category"> <a href=".?action=archive&amp;categoriaId=<?php echo $categoria->id ?>"><?php echo htmlspecialchars($categoria->nombre) ?></a> </h3>
        <div class="container-juego">
            <?php foreach ($results['juegos'] as $juego) { ?>
                <?php if ($juego->categoriaId == $categoria->id) { ?>
                    <div class="slide-juego">
                        <a href=".?action=viewJuego&amp;juegoId=<?php echo $juego->id ?>">
                            <div class="slide-img">
                                <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($juego->trailer) ?>">
                            </div>
                            <div class="slide-title">
                                <span> <?php echo ($juego->nombre) ?></span>
                            </div>
                    </div>
                <?php } ?>
            <?php } ?>
            <h3><a href=".?action=archive&amp;categoriaId=<?php echo $categoria->id ?>">VER MAS</a></h3>
        </div>
    </div>
<?php } ?>
<?php include "include/final-divs.php" ?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".slider").slick({
            lazyLoad: 'ondemand', // ondemand progressive anticipated
            infinite: true
        });
        $(".container-juego").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>

<?php include "include/footer.php" ?>