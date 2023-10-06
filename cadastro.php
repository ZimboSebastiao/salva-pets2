<?php
require_once "conecta.php";
if(isset($_POST["inserir"])){
    require_once "funcoes.php";
    $nome = trim(filter_input(INPUT_POST,"nome",FILTER_SANITIZE_SPECIAL_CHARS));
    $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
    $cep = filter_input(INPUT_POST,"cep",FILTER_SANITIZE_NUMBER_INT);
    $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_SPECIAL_CHARS);
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    InserirUsuario($conexao, $nome, $email, $cep, $senhaHash);

    header("location:home.php");

}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Salvapets</title>
    <!-- ======== CSS Bootstrap ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>

    <main>
        <div class="container">
            <div class="row">

              <!-- =========== Formulário  =========== -->
              <div class="col-6">
                  
                <div>
                    <img src="icones/pet1.png" alt="..." height="42">
                    <div class="d-flex flex-column justify-content-center align-items-center"></div>
                    <h1>A sua adoção <br> começa aqui</h1>

                    <p class="estilo-p">Faça parte de um mundo mais amigável</p>
                </div>

                <section class="estilo-form">
                    <form action=""  method="post">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control input" id="floatingInputGroup2" placeholder="Username" name="nome" >
                            <label for="floatingInputGroup2">Nome completo</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input class="form-control input" id="floatingInput" name="email" placeholder="name@example.com" required type="email">
                            <label for="floatingInput">E-mail</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control input" id="floatingInputGroup2" placeholder="Username" name="cep" required>
                            <label for="floatingInputGroup2">CEP</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input  class="form-control input" id="floatingPassword" placeholder="Password" required type="password" name="senha">
                            <label for="floatingPassword">Senha</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input  class="form-control input" id="floatingPassword" placeholder="Password" required type="password">
                            <label for="floatingPassword">Confirma senha</label>
                        </div>
        
                        <div class="form-check estilo-l">
                            <input class="form-check-input" type="checkbox" value="" id="" >
                            <label class="form-check-label" for="" >
                                Ao clicar no botão "Criar conta", você aceita <br>
                                nossos termos de uso e politíca de privacidade
                            </label>
                        </div>

                        <div>
                            <button class="btn btn-primary btn-lg botao" name="inserir">Criar Conta</button>
                            <p class="tag-style-c">Já tem uma conta? <a href="login.php">Login</a></p>
                        </div>


                    </form>
                </section> 
              </div>

              <!-- ========== Destaque ========== -->
              <div class="col-8" id="teste" ></div>
          </div>
        </div>

    </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>