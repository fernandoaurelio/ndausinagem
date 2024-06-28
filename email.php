<?php
$to_email = "madphp@yahoo.com";
$subject = "Teste de envio de email por Sendmail/Xampp";
$body = "Olá, este é um email de teste enviado por Sendmail/Xampp";
$headers = "From: sender\'s email";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email enviado com sucesso para $to_email.";
} else {
    echo "Falha no envio do email.";
}
?>