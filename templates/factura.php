<?php include "include/header.php" ?>
<div class="aprobacion">
<?php
$ClientId = "ARbdyOv7dYkYz9F2IftS8oaoHedkvs1Ri3uT4ReXMG3pI6Q55-soBuFJ7RgCEBYgv-yYYHtT4xkrta46";
$Secret = "EChXLp8adLwCgaWVzx6rs4fwjSVvS2UDZmugpEBFwZ6Wy5fs6Yb5p8gAB_sDzk6jP_kcVExvYzUszH1W";

$Login = curl_init("https://api.sandbox.paypal.com/v1/oauth2/token");

curl_setopt($Login, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($Login, CURLOPT_USERPWD, $ClientId . ":" . $Secret);
curl_setopt($Login, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
$Respuesta = curl_exec($Login);


$objRespuesta = json_decode($Respuesta);

$AccessToken = $objRespuesta->access_token;
//print_r("asdasd" . $AccessToken);

$venta = curl_init("https://api.sandbox.paypal.com/v2/checkout/orders/" . $_GET['paymentID']);

curl_setopt($venta, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer " . $AccessToken));

curl_setopt($venta, CURLOPT_RETURNTRANSFER, TRUE);

$RespuestaVenta = curl_exec($venta);

//print_r($RespuestaVenta);

$objetoDatosTransaccion = json_decode($RespuestaVenta);



$state = $objetoDatosTransaccion->status;
$name = $objetoDatosTransaccion->payer->name->given_name;
$lastName = $objetoDatosTransaccion->payer->name->surname;
$address = $objetoDatosTransaccion->purchase_units[0]->shipping->address->address_line_1 . ", " . $objetoDatosTransaccion->purchase_units[0]->shipping->address->admin_area_2 . ", " . $objetoDatosTransaccion->purchase_units[0]->shipping->address->admin_area_1;
$dni = $objetoDatosTransaccion->payer->payer_id;
$email = $objetoDatosTransaccion->payer->email_address;
$juego = $objetoDatosTransaccion->purchase_units[0]->description;
$importe = (int) $objetoDatosTransaccion->purchase_units[0]->amount->value;
$fecha = $objetoDatosTransaccion->update_time;
$fecha[10] = " ";
$fecha[19] = " ";
$fecha[12] = (int) $fecha[12];
if ($state == "COMPLETED") {
    $mensajePaypal = "<h3> Gracias por su compra </h3>
                    <p>Su pago ha sido aprobado, en breve se enviara una boleta de venta a la dirección electronica consignada junto con el codigo para la activación</p>";
    $boleta = [
        "nombres" => $name,
        "apellidos" => $lastName,
        "direccion" => $address,
        "dni" => $dni,
        "correo" => $email,
        "juego" => $juego,
        "importe" => $importe,
        "fecha" => $fecha,
        "digitalkey" => $results['juego']->getKey(),
    ];

    $factura = new Boleta($boleta);
    $factura->insert();

    $newMail = new Correo($boleta);
    $newMail->enviarCorreo();

    $results['juego']->deleteKey();

} else {
    $mensajePaypal = "<h3> PAGO NO APROBADO </h3>";
}
echo $mensajePaypal;
?>
</div>
<?php include "include/final-divs.php" ?>
<?php include "include/footer.php" ?>
