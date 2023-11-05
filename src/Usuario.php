<?php 
namespace Salvapets;
use PDO, Exception;
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require_once "../vendor/autoload.php";
require_once __DIR__ . '/../vendor/autoload.php';

class Usuario {
    private int $id;
    private string $nome;
    private string $cep;
    private string $senha;
    private string $email;
    private PDO $conexao;

    public function __construct(){
       $this->conexao = Banco::conecta(); 
    }
    

    // INSERT de usuarios
    public function inserir():void {
        $sql = "INSERT usuario(nome, cep, email, senha)
                VALUES(:nome, :cep, :email, :senha)";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindValue(":cep", $this->cep, PDO::PARAM_STR);
            $consulta->bindValue(":email", $this->email, PDO::PARAM_STR);
            $consulta->bindValue(":senha", $this->senha, PDO::PARAM_STR);
            $consulta->execute();
           
        } catch (Exception $erro) {
           die("Erro ao inserir usuário: ".$erro->getMessage());
        }
    }

    public function listar():array {
        $sql = "SELECT * FROM usuario ORDER BY nome";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: ".$erro->getMessage());
        }    
    
        return $resultado;
    } 


       // SELECT de Usuário
    public function listarUm():array {
        $sql = "SELECT * FROM usuario WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro ao carregar dados: ".$erro->getMessage());
        }

        return $resultado;
    }

    // Update de Usuariao
    public function atualizar():void {
        $sql = "UPDATE usuario SET nome = :nome, cep = :cep, email = :email, senha = :senha WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare(($sql));
            $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);
            $consulta->bindValue(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindValue(":cep", $this->cep, PDO::PARAM_STR);
            $consulta->bindValue(":email", $this->email, PDO::PARAM_STR);
            $consulta->bindValue(":senha", $this->senha, PDO::PARAM_STR);
            $consulta->execute();
     
        } catch (Exception $erro) {
            die("Erro ao atualizar usuário: ".$erro->getMessage());
        }
    }


    public function excluir():void {
        $sql = "DELETE FROM usuario WHERE id = :id";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro ao excluir usuário ".$erro->getMessage());
        }
    }

    // Métodos para codificação e comparação de senha
    public function codificaSenha(string $senha):string{
       return password_hash($senha, PASSWORD_DEFAULT);
    }


    // Usamos a função password_verify() para comparar as duas senhas: a digitada no formulário e a existente no banco de dados.

    public function verificaSenha(string $senhaFormulario, string $senhaBanco):string{
        if (password_verify($senhaFormulario, $senhaBanco)){
            // se forem IGUAIS, mantemos a senha já existente, sem qualquer modificação
            return $senhaBanco;
        } else {
            return $this->codificaSenha($senhaFormulario);
        }
    }

    // Buscar no banco
    public function buscar():array | bool{ // tipos de saidas só no php 7.4 par cima
        $sql = "SELECT * FROM usuario WHERE email = :email";
 
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue("email", $this->email, PDO::PARAM_STR);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
            
        } catch (Exception $erro) {
            die("Erro ao buscar no banco ".$erro->getMessage());
        }
        return $resultado;
    }
    

    // Função verifica email

    public function verificarEmail() {
        $sql = "SELECT id FROM usuario WHERE email = :email LIMIT 1";

        try {
          $consulta = $this->conexao->prepare($sql);
          $consulta->bindValue(":email", $this->email, PDO::PARAM_STR);
          $consulta->execute();
          $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
      
      
        if ($resultado) {
            $codigoRedefinicao = bin2hex(random_bytes(16));
      
            $dataExpiracao = date('Y-m-d H:i:s', strtotime('+1 hour'));
      
            $sql = "UPDATE usuario SET codigo_redefinicao = :codigo, data_expiracao_redefinicao = :data WHERE email = :email";
      
            try {
                $consulta = $this->conexao->prepare($sql);
                $consulta->bindValue(":codigo", $codigoRedefinicao, PDO::PARAM_STR);
                $consulta->bindValue(":data", $dataExpiracao, PDO::PARAM_STR);
                $consulta->bindValue(":email", $this->email, PDO::PARAM_STR);
                $consulta->execute();
            
            } catch (Exception $erro) {
                die("Erro ao atualizar o banco de dados: ".$erro->getMessage());
            }
      
        
            // Configuração do PHPMailer
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Servidor SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'suporte.salvapets@gmail.com'; // Seu endereço de e-mail
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

            // Configuração de e-mail
            $mail->setFrom('suporte.salvapets@gmail.com', 'Salva Pets');
            $mail->addAddress($this->email); // Destinatário a partir do email do usuário
            $mail->isHTML(true);
            $mail->Subject = 'Recuperação de Senha';
            $mail->Body = 'Você solicitou a recuperação de senha. Clique no link a seguir para redefinir sua senha: ' .
                '<a href="https://salva-pets.com/redefinir_senha.php?codigo=' . $codigoRedefinicao . '">Clique aqui</a>';

                $mail->SMTPDebug = 2;
            if ($mail->send()) {
                header('location:login.php');
                exit;
            } else {
                echo 'O envio de e-mail falhou. Por favor, entre em contato com o suporte.';
            }
                
        }
      
        } catch (Exception $erro) {
            // Converta o array retornado por getTrace() em uma string para exibi-lo
            $stackTrace = print_r($erro->getTrace(), true);
            die("Erro ao verificar o e-mail: " . $stackTrace);
        }
            header('location:login.php');
            exit;
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): self
    {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        return $this;
    }


    public function getNome(): string
    {
        return $this->nome;
    }


    public function setNome(string $nome): self
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }


    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email): self
    {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);

        return $this;
    }


    public function getSenha(): string
    {
        return $this->senha;
    }


    public function setSenha(string $senha): self
    {
        $this->senha = filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }


    public function getCep(): string
    {
        return $this->cep;
    }


    public function setCep(string $cep): self
    {
        $this->cep = filter_var($cep, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }



}





?>