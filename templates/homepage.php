<?php include "include/header.php" ?>

<div class="slider">
    <?php foreach ($results['juegos'] as $juego) { ?>
        <div class="slide">
            <a href="juego_<?php echo $juego->id ?>">
                <div class="slide-title">
                    <span> <?php echo ($juego->nombre) ?></span>
                </div>
                <div class="slide-img">
                    <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($juego->getImages(0)) ?>">
                </div>
            </a>
        </div>

    <?php } ?>
</div>

<div class="body-homepage">
    <?php foreach ($results['categorias'] as $categoria) { ?>
        <div class="container-categoria">
            <h2 class="category"> <a href="categoria_<?php echo $categoria->id ?>"><?php echo htmlspecialchars($categoria->nombre) ?></a> </h2>
            <div class="container-juego">
                <?php foreach ($results['juegos'] as $juego) { ?>
                    <?php if ($juego->categoriaId == $categoria->id) { ?>
                        <div class="slide-juego">

                            <div class="slide-img2">
                                <a href="juego_<?php echo $juego->id ?>"><img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($juego->getImages(0)) ?>"></a>
                            </div>
                            <div class="slide-title-juego">
                                <a href="juego_<?php echo $juego->id ?>"><span> <?php echo ($juego->nombre) ?></span></a>
                            </div>

                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <h3><a href="categoria_<?php echo $categoria->id ?>">VER MAS</a></h3>
        </div>
    <?php } ?>
</div>
<?php include "include/final-divs.php" ?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".slider").slick({
            lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 1200,
            infinite: true,
        });
        $(".container-juego").slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>

<?php include "include/footer.php" ?>