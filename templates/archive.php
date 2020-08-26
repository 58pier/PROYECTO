<?php include "include/header.php" ?>



<div class="container-body">
    <h1> <?php echo htmlspecialchars($results['pageHeading']) ?> </h1>
    <div class="slider">
        <?php foreach ($results['juegos'] as $juego) { ?>
            <div class="slide">

                <div class="slide-title">
                    <a href="juego_<?php echo $juego->id ?>"><span> <?php echo ($juego->nombre) ?></span></a>
                </div>
                <div class="slide-img">
                    <a href="juego_<?php echo $juego->id ?>"><img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($juego->getImages(0)) ?>"> </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="body-archive">
    <div>
        <?php foreach ($results['juegos'] as $juego) { ?>
            <div class="slide-juegox">
                <a href="juego_<?php echo $juego->id ?>">
                    <div class="slide-img3">
                        <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($juego->getImages(0)) ?>">
                    </div>
                    <div class="slide-title archive-title" >
                        <span> <?php echo ($juego->nombre) ?></span>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php include "include/final-divs.php" ?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".slider").slick({
            lazyLoad: 'ondemand', // ondemand progressive anticipated
            infinite: true,
        });
    });
</script>

<?php include "include/footer.php" ?>