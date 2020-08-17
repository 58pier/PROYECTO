<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

class Correo{

    public $id = null;

    public $nombres = null;

    public $apellidos = null;

    public $correo = null;

    public $juego = null;

    public $importe = null;

    public $key= null;

    public function __construct($data = array())
    {
        if (isset($data['id'])) $this->id = (int) $data['id'];
        if (isset($data['nombres'])) $this->nombres =  $data['nombres'];
        if (isset($data['apellidos'])) $this->apellidos = $data['apellidos'];
        if (isset($data['correo'])) $this->correo =  $data['correo'];
        if (isset($data['juego'])) $this->juego =  $data['juego'];
        if (isset($data['importe'])) $this->importe = (int) $data['importe'];
        if (isset($data['digitalkey'])) $this->key =  $data['digitalkey'];

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
            $mail->Body    = 'Ojala funcione';

            $mail->send();
        } catch (Exception $e) {
        }
    }
}
?>