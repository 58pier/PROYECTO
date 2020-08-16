<?php include "include/header.php" ?>

<div id="sections">
    <div class="conte">
        <div id="sec1">
            <div class="izquierda">
                <img src="<?php echo JUEGO_IMAGE_PATH . "/" . htmlspecialchars($results['juego']->getImages(3)); ?>" width="340px" height="220px">
                <h3><?php echo htmlspecialchars($results['juego']->nombre) ?></h3>
            </div>
        </div>
        <div id="sec2">
            <div class="derecha">
                <h2>RESUMEN DE COMPRA</h2>
                <div id="caja">
                    <h3>Total: $ <?php echo $results['juego']->precio ?>.00</h3>
                    <h2>Pagar con:</h2>
                </div>
                <div id="paypal-button-container"></div>

            </div>
        </div>
    </div>
</div>
<?php include "include/final-divs.php" ?>
<script src="https://www.paypal.com/sdk/js?client-id=ARbdyOv7dYkYz9F2IftS8oaoHedkvs1Ri3uT4ReXMG3pI6Q55-soBuFJ7RgCEBYgv-yYYHtT4xkrta46&currency=USD&locale=es_PE"></script>
<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        // Set up the transaction
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '<?php echo $results['juego']->precio ?>'
                    },
                    description: "<?php echo $results['juego']->nombre; ?>",
                }]
            });
        },

        // Finalize the transaction
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                // Show a success message to the buyer
                console.log(data);
                window.location = '.?action=verification&paymentToken=' + data.facilitatorAccessToken + "&paymentID="+data.orderID;
            });
        }


    }).render('#paypal-button-container');
</script>
<?php include "include/footer.php" ?>