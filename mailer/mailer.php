<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['nombre'])){
  require '../vendor/autoload.php';

  $mail = new PHPMailer(true);

  $nombre = strip_tags(trim($_POST["nombre"]));
  $nombre = strip_tags(str_replace(array("\r","\n"),array(" "," "), $nombre));
  $correo = strip_tags(filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL));
  $telefono = strip_tags(trim($_POST["telefono"]));
  $asunto = strip_tags(trim($_POST["asunto"]));
  $mensaje = strip_tags($_POST["mensaje"]);

  //Server settings
  $mail->SMTPDebug = 1;
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = '';
  $mail->Password   = '';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = 587;

  //Recipients
  $mail->setFrom('', '');
  $mail->addAddress('matias.chomali1@gmail.com');


  //Content
  $mail->isHTML(true);
  $mail->Subject = 'Nueva consulta #'.strval(rand(1,1000000));
  $mail->Body    = '<h3>'.$asunto.'</h3>
                    ------------------------------<br>
                    Nombre: '.$nombre.'<br>
                    Correo: '.$correo.'<br>
                    Telefono: '.$telefono.'<br>
                    ------------------------------<br><br>
                    '.$mensaje;

  $mail->AltBody = '<h2>Nueva Consulta recibida!</h2><br>
                    Nombre: '.$nombre.'<br>
                    Correo: '.$correo.'<br>
                    Telefono: '.$telefono.'<br>
                    Mensaje:<br>'.$mensaje;

  if(!$mail -> Send()) {
    echo "ERROR";
  }
  else {
    echo "Message succesfully sent!";
  }
}