<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Salvapets\Utilitarios;
use Salvapets\Usuario;
use Salvapets\ControleDeAcesso;
require_once "../vendor/autoload.php";

$sessao = new ControleDeAcesso;

$usuario = new Usuario;
// Atribuimos ao objeto o ID  do usuario logado na sessão
$usuario->setId($_SESSION['id']);
$dados = $usuario->listarUm();
Utilitarios::dump($dados);
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
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';
    $numero = isset($_POST['numero']) ? $_POST['numero'] : '';
    $completo = isset($_POST['completo']) ? $_POST['completo'] : '';
    $first = isset($_POST['first']) ? $_POST['first'] : '';
    $segundo = isset($_POST['segundo']) ? $_POST['segundo'] : '';
    $terceiro = isset($_POST['terceiro']) ? $_POST['terceiro'] : '';
    $quarto = isset($_POST['quarto']) ? $_POST['quarto'] : '';
    $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';
    

    $mail->Subject = 'Formulario de Adocao';
    $mail->Body = "<h1>DADOS DO SITE SALVA PETS</h1> <br> <hr>
                   E-mail Cadastrado: {$dados['email']}<br>
                   Nome do Usuário Cadastrado: {$dados['nome']}<br>
                   Id do Usuário Cadastrado: {$dados['id']}<br>
                   <h1>DADOS DO FORMULARIO</h1> <br> <hr>
                   Nome: $nome<br>
                   E-mail: $email<br>
                   Estado: $estado<br>
                   Cidade: $cidade<br>
                   Endereco: $endereco<br>
                   Numero: $numero<br>
                   Complemento: $completo<br>
                   Tem criancas em casa?: $first<br>
                   Tem algum pet?: $segundo<br>
                   Todos em casa estao cientes?: $terceiro<br>
                   Alguem tem alergia a animais?: $quarto<br>
                   Mensagem: $mensagem <br> <hr>
                   <h1>DADOS DO PET SOLICITADO</h1> <br> <hr>
                   
                   ";

    $mail->send();
    header("location:../adotou.php");
} catch (Exception $e) {
    echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
}
