<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

class Correo{

    public $id = null;

    public $nombres = null;

    public $apellidos = null;

    public $correo = null;

    public $juego = null;

    public $importe = null;

    public $key= null;

    public $mensaje = null;
    


    public function __construct($data = array())
    {
        if (isset($data['id'])) $this->id = (int) $data['id'];
        if (isset($data['nombres'])) $this->nombres =  $data['nombres'];
        if (isset($data['apellidos'])) $this->apellidos = $data['apellidos'];
        if (isset($data['correo'])) $this->correo =  $data['correo'];
        if (isset($data['juego'])) $this->juego =  $data['juego'];
        if (isset($data['importe'])) $this->importe = (int) $data['importe'];
        if (isset($data['digitalkey'])) $this->key =  $data['digitalkey'];
        $this->mensaje =
        '<div class="contenedor_email"> 
                <table class="contenedor_email_tabla" border="red">
                    <tr>
                        <td  colspan="2">
                            <div class="email_titulo"><a href="https://imgbb.com/"><img src="https://i.ibb.co/tmMB4R6/logo.png" alt="logo" border="0"></a></div>
                        </td>
                    </tr>
                    <tr class="mensaje_email">
                        <td colspan="2">
                            <h3>¡Compra exitosa!</p>
                            </h3>
                    </tr>
                    <tr class="mensaje_email2">
                        <td colspan="2">
                            <p>Te confirmamos la compra realizada para este juego</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Para</p>
                        </td>
                        <td>
                            <p>' . $this->nombres . ' ' . $this->apellidos . '</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Juego</p>
                        </td>
                        <td>
                            <p>' . $this->juego . '</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Monto </p>
                        </td>
                        <td>
                            <p>' . $this->importe . ' </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Key </p>
                        </td>
                        <td>
                            <p>' . $this->key . ' </p>
                        </td>
                    </tr>
                    <tr class="mensaje_email3">
                        <td colspan="2">
                            <p>Muchas gracias por su compra, esperemos que tenga un buen día </p>
                        </td>
                    </tr>

                </table>
            </div>
<style>
body{
    color: white;
    text-align: center;
}
.contenedor_email_tabla tr {
    margin: 15px;
}

.contenedor_email {
    margin-top: 20px;
    width: 35%;
    height: 100%;
    background-color: #050505d5;
    background-position: center;
    margin: auto;
    margin-top: 20px;
    color: white;
}

tr {
    margin-bottom: 30px;
}

.contenedor_email_tabla {
    width: 100%;
}

.email_titulo {
    width: 250px;
    padding-left: 35px;
    background-position: center;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
}

#email_logo {
    width: 80%;
    background-color: black;

}

.mensaje_email {
    text-align: center;
    color: red;
    font-family: cursive;
}

.mensaje_email2 {
    text-align: center;
}

.mensaje_email3 {
    text-align: center;
}
</style>';

    }
    function enviarCorreo(){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'pieropozo58@gmail.com';                     // SMTP username
            $mail->Password   = "EPm}&iF6H/''";                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('pieropozo58@gmail.com');
            $mail->addAddress($this->correo);     // Add a recipient


            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Prueba correo';
            $mail->Body    = $this->mensaje;

            $mail->send();
        } catch (Exception $e) {
        }
    }
}
?>