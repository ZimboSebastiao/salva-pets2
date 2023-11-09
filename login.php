<?php 
use Salvapets\Usuario;
use Salvapets\ControleDeAcesso;
require_once "vendor/autoload.php";



if( isset($_GET["campos_obrigatorios"]) ){
	$feedback = "Preencha e-mail e senha!";
} elseif( isset($_GET['dados_incorretos']) ){
	$feedback = "E-mail ou senha incorretas!";
} elseif( isset($_GET['logout']) ){
	$feedback = "Você saiu do sistema!";
} elseif( isset($_GET['acesso_proibido']) ){
	$feedback = "Você deve logar primeiro";
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvapets - entre ou cadastre-se</title>
    <!-- ======== CSS Bootstrap ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>
<main>
<div class="img-responsivo-cadastro">

        <!-- =========== Formulário  =========== -->
        <div class=" formatar-input-login">
            
            <div class="center-form">
                <img src="icones/pet1.png" alt="..." height="58">
                <div class="d-flex flex-column justify-content-center align-items-center"></div>
                <h1 style="padding-left: 10px; padding-top: 10px;">Seja bem <br> vindo de volta</h1>
                <p class="estilo-p">Coloque seus dados e venha ver os seus pets</p>

                <section class="estilo-form">
                    <form action="" method="post" id="form-login" name="form-login">

                    <?php 
                        if (isset($feedback)) { ?>

                            <p class="my-2 alert alert-warning text-center"><?=$feedback?></p>
                        <?php } ?>

                        <div class="form-floating mb-3">
                            <input class="form-control input-login" id="floatingInput" placeholder="name@example.com" type="email" name="email">
                            <label for="floatingInput">E-mail</label>
                        </div>
                        <br>
    
                        <div class="form-floating">
                            <input  class="form-control input-login" id="floatingPassword" placeholder="Password"  type="password" name="senha">
                            <label for="floatingPassword">Senha</label>
                        </div>
    
                        
                            <div class="estilo-cadeado">
                                <div class="esqueci-senha">
                                    <a  href="#" rel="" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                                    </svg>
                                    Esqueci a senha</a>
                                </div>
                            
                        
                        </div>
                
    
                        <br>
    
                        <div>
                            <button class="btn btn-primary btn-lg botao input-login input-cd" name="entrar">Entrar</button>
                            <p class="tag-style">Não tem uma conta? <a href="cadastro.php">Crie uma conta de graça</a></p>
                        </div>
                    </form>
                    <?php
                        if(isset($_POST['entrar'])){
                            
                            if( empty($_POST['email']) || empty($_POST['senha']) ){
                                header("location:login.php?campos_obrigatorios");
                            } else {
                                $usuario = new Usuario;
                                $usuario->setEmail($_POST['email']);
                                $dados = $usuario->buscar();

                                if(!$dados){ 
                                    header("location:login.php?dados_incorretos");
                                } else {
                                    if(password_verify($_POST['senha'], $dados['senha'])){	
                                        $sessao = new ControleDeAcesso;
                                        $sessao->login($dados['id'], $dados['nome']);
                                        header("location:home.php");
                                    } else {
                                        header("location:login.php?dados_incorretos");
                                    }
                                }
                            }
                        }
                    ?>

                </section> 

            </div>
            
        </div>
        
        <div id="destaque"></div>
        
    </div>
    

</main>

<!-- ======== JS Bootstrap ======== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>