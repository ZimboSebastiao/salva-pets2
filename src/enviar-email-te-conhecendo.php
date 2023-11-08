<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Salvapets\Utilitarios;
use Salvapets\Usuario;
use Salvapets\ControleDeAcesso;
require_once "../vendor/autoload.php";

$sessao = new ControleDeAcesso;

$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$dados = $usuario->listarUm();
// Utilitarios::dump($dados);
$sessao->verificaAcesso();


$mail = new PHPMailer(true);

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'suporte.salvapets@gmail.com';
    $mail->Password = 'vnwc sesk kvyn lumg';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // desabilitar a verificação de certificado SSL
    $mail->SMTPAutoTLS = false;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );


    // Configurações de envio
    $mail->setFrom($dados['email'], $dados['nome']);
    $mail->addAddress('suporte.salvapets@gmail.com', 'Suporte Salvapets');
    $mail->isHTML(true);

    // Preenche o corpo do e-mail com os dados do formulário
    $first = $_POST['first'];
    $segundo = $_POST['segundo'];
    $terceiro = $_POST['terceiro'];
    $quarto = $_POST['quarto'];
    $mensagem = $_POST['mensagem'];
    

    $mail->Subject = 'Formulario de Adocao - Segunda Parte';
    $mail->Body = "<h1>DADOS DO SITE SALVA PETS</h1> <br> <hr>
                   E-mail Cadastrado: {$dados['email']}<br>
                   Nome do Usuário Cadastrado: {$dados['nome']}<br>
                   Id do Usuário Cadastrado: {$dados['id']}<br>
                   <h1>DADOS DO FORMULARIO</h1> <br> <hr>
                   Tem criancas em casa?: $first<br>
                   Tem algum pet?: $segundo<br>
                   Todos em casa estao cientes?: $terceiro<br>
                   Alguem tem alergia a animais?: $quarto<br>
                   Mensagem: $mensagem <br> <hr>";
    // $mail->SMTPDebug = 2;
    $mail->send();

    echo "<script>setTimeout(function() { window.location.href = '../adotou.php'; }, 1000);</script>";

} catch (Exception $e) {
    echo "<p style='margin-top: 0.5rem ; margin-bottom: 0.5rem;position: relative; padding: 1rem 1rem; margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem; color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba; text-align: center;'> E-mail Invalido, loga com um email valido para concluir o seu processo de adoção!
    </p>";
    echo "<script>setTimeout(function() { window.location.href = '../nossos-pets.php'; }, 6000);</script>";
}
