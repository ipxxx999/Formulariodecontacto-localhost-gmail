<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $Browser = $_SERVER['HTTP_USER_AGENT'];
    $fullhost = gethostbyaddr($ip);
    $host = preg_replace("/^[^.]+./", "*.", $fullhost);
?>
<?php
$result="";

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$mail=new PHPMailer();


    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'TU-CORREO@gmail.com';              // SMTP username --------------------TU CORREO
    $mail->Password   = 'TU-PASSWORD';                           // SMTP password -------------- TU-PASSWORD
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->SMTPSecure="tls";

    //Recipients
    $mail->setFrom($_POST['email'],$_POST['nombre']);
    $mail->addAddress('TU-CORREO@gmail.com', 'Tutovideo');   // Add a recipient ---------- TU CORREO
    $mail->addReplyTo($_POST['email'],$_POST['nombre']);
    $mail->addBCC($_POST['miamigo'],$_POST['nombre']);

## CHECK TO GET THE SENDERS DETAILS
## COMPRUEBE PARA OBTENER LOS DETALLES DE LOS REMITENTES
	// Zona horaria del servidor
	date_default_timezone_set("America/New_York");
    $date       = (date ("F j, Y"));
	// Zona horaria del servidor
	date_default_timezone_set("America/New_York");
    $time		= (date ("H:i:s"));
    $IPnumber	= getenv("REMOTE_ADDR");
    $Browser	= $_SERVER["HTTP_USER_AGENT"];
    $ReferURL	= $_SERVER["HTTP_REFERER"];

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject ='Enviado por '.$_POST['nombre'];
    $mail->Body ='<h3 align=center> '.$_POST['nombre'].'<br> Responde A: '.$_POST['email'].'<br><br> Mensaje: '.$_POST['mensaje']. '<br><br> Fecha: ' .$_POST['date'].'<br> Hora: ' .$_POST['time'].'<br> IP-Numero: ' .$_POST['IPnumber'].'<br><br> Navegador: ' .$_POST['Browser'].'<br> URL de Referencia: ' .$_POST['ReferURL'] ; '</h3>';
    $mail->AltBody ='Este es el cuerpo en texto sin formato para clientes de correo electrónico que no son HTML';

if(!$mail->send()) {
        echo 'El mensaje No ha sido enviado. ';
        echo ' Error de envío: ' . $mail->ErrorInfo;
} else {
        echo 'El mensaje ha sido enviado';
}


?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="./css_js/css/bootstrap.min.css">
<link rel="stylesheet" href="./css_js/css/estilos.css">
<link rel="stylesheet" href="./css_js/css/pro.min.css" >
        <title>Formulario de Contacto <?=$date?></title>
        <link rel="shortcut icon" href="./css_js/ico/favicon.ico" />
    </head>
    <body>
    <div class="container" style="width:80%;margin:auto;">
    <div class="row justify-content-center" style="margin:50px 0px 20px 0px">
        <form method="POST">

        <div class="form-group">
                          <i class="fas fa-user icon2"></i> <i class="estrella"> * </a></i>

            <p>Tu Nombre: <input type="text" name="name" placeholder="Tu Nombre" size="30" required autofocus></p>
            <i class="fas fa-key icon"></i> <i class="estrella"> * </a></i>
            <p>Tu Correo : <input type="email" placeholder="Tu Correo" name="email" size="30" required></p>
            <p>Mi copia A: <input type="email" placeholder="Env&#237;ame Una Copia a Mi Correo" name="miamigo" size="30" ></p>
            
            <textarea rows="4" cols="44" name="mensaje" placeholder="Introducir Mensaje aquí..." required>
</textarea></p>
            <input type="hidden" name="date" value="<?=$date?>"></p>
            <input type="hidden" name="time" value="<?=$time?>"></p>
            <input type="hidden" name="IPnumber" value="<?=$ip?>"></p>
            <input type="hidden" name="Browser" value="<?=$Browser?>"></p>
            <div class="form-group">
                <button class="btn btn-primary" name="reg" type="submit"> ENVIAR</button>
                <input type="reset" class="btn btn-default" value="Borrar">
            </div>
            <p><a href="mi-formulario.php"> &#191;Ya tienes cuenta? </a><i class="fas fa-shield-check icon"></i></p>.</p>

        </form>
    </body>
    </html>