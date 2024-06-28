<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './PHPMailer/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();




$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();
    $mail->Host = 'smtp.mail.yahoo.com';
    //$mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'madphp@yahoo.com';
    $mail->Password = 'peixefrito2'; // Use a senha de aplicativo aqui
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPDebug = 1;
    $mail->Port = 587;

    // Destinatários
    $mail->setFrom('madphp@yahoo.com', 'Seu Nome');
    $mail->addAddress('destinatario@example.com', 'Nome Destinatário');

    // Conteúdo do email
    $mail->isHTML(true);
    $mail->Subject = 'Assunto do Email';
    $mail->Body    = 'Conteúdo do email em HTML';
    $mail->AltBody = 'Conteúdo do email em texto simples';

    $mail->send();
    echo 'Email enviado com sucesso';
} catch (Exception $e) {
    echo "Erro ao enviar email: {$mail->ErrorInfo}";
}
