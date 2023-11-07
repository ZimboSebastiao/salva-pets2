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
// Utilitarios::dump($dados);

$petId = isset($_POST['pet_id']) ? $_POST['pet_id'] : null;


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
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $completo = $_POST['completo'];

    

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
                   <h1>DADOS DO PET SOLICITADO</h1> <br> <hr>
                   Id do Pet selecionado: {$petId}<br>
                   ";
    // $mail->SMTPDebug = 2;
    $mail->send();
    echo "<script>setTimeout(function() { window.location.href = '../te-conhecendo.php'; }, 1000);</script>";
} catch (Exception $e) {
    echo "<p style='color: red;'> E-mail Invalido, loga com um email valido para concluir o seu processo de adoção!
    </p>";
    echo "<script>setTimeout(function() { window.location.href = '../nossos-pets.php'; }, 6000);</script>";
}
