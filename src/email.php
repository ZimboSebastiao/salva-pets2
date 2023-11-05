<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "../vendor/autoload.php";

// Configuração do PHPMailer
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'suporte.salvapets@gmail.com'; // Seu endereço de e-mail
$mail->Password = 'Salvapets123@'; 
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Configuração de e-mail
$mail->setFrom('seuemail@gmail.com', 'Seu Nome');
$mail->addAddress('destinatario@dominio.com', 'Nome do Destinatário');
$mail->isHTML(true);
$mail->Subject = 'Assunto do E-mail';
$mail->Body = 'Conteúdo do E-mail';

try {
    $mail->send();
    echo 'E-mail enviado com sucesso.';
} catch (Exception $e) {
    echo 'O envio de e-mail falhou. Erro: ' . $mail->ErrorInfo;
}
