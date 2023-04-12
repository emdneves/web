<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.sapo.pt';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'turmafixedocesae2023@sapo.pt';
    $mail->Password   = '#A*,VqJ9+FWVeW2';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('turmafixedocesae2023@sapo.pt', 'REMETENTE');
    $mail->addAddress('turmafixedocesae2023@sapo.pt', 'FORMULÁRIO');     //Add a recipient
    
    $remetente = $_GET['email'];
    $mensagem = $_GET['mensagem'];

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Enviado por $remetente";
    $mail->Body    = $mensagem;
    $mail->AltBody = $mensagem;

    $mail->send();
    header('Location: index.php?p=contacto&r=ok');
} catch (Exception $e) {
    header('Location: index.php?p=contacto&r=erro');
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
