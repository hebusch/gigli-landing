<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['name'])){
  require '../vendor/autoload.php';
  $config = parse_ini_file('../credentials.ini', true);
  $mail = new PHPMailer(true);
  $nombre = strip_tags(trim($_POST["name"]));
  $nombre = strip_tags(str_replace(array("\r","\n"),array(" "," "), $nombre));
  $correo = strip_tags(filter_var(trim($_POST["mail"]), FILTER_SANITIZE_EMAIL));
  $telefono = strip_tags(trim($_POST["phone"]));
  $local = strip_tags($_POST['restaurant']);
  $mensaje = strip_tags($_POST["msg"]);

  //Server settings
  $mail->SMTPDebug = 1;
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = $config['email']['username'];
  $mail->Password   = $config['email']['password'];
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = 587;

  //Recipients
  $mail->setFrom($config['email']['username'], 'SKIP EAT RESERVAS');
  $mail->addAddress('matias.chomali1@gmail.com');


  //Content
  $mail->isHTML(true);
  $mail->Subject = 'Solicitud de Reserva #'.strval(rand(1,1000000));
  $mail->Body    = '<h1> Nueva Reserva! </h1><br>
                    Nombre: '.$nombre.'<br>
                    Correo: '.$correo.'<br>
                    Telefono: '.$telefono.'<br>
                    Local de Reserva: '.$local.'<br><br>
                    Mensaje:<br>'.$mensaje;

  if(!$mail -> Send()) {
    echo "ERROR";
  }
  else {
    echo "Message succesfully sent!";
  }
}