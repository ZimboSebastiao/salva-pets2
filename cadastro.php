
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
<div class="container-sm img-responsivo-cadastro">

    <!-- =========== Formulário  =========== -->
    <div>
        
        <div class="center-form-cadastro">
            <img src="icones/pet1.png" alt="..." height="58">
            <div class="d-flex flex-column justify-content-center align-items-center"></div>
            <h1>A sua adoção <br> começa aqui</h1>

            <p class="estilo-p-cadastro">Faça parte de um mundo mais amigável</p>

            <section class="estilo-form">
                <form action=""  method="post">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control input-cadastro" id="floatingInputGroup2" placeholder="Username" required name="nome" >
                        <label for="floatingInputGroup2">Nome completo</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input class="form-control input-cadastro" id="floatingInput" name="email" placeholder="name@example.com" required type="email">
                        <label for="floatingInput">E-mail</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control input-cadastro" id="floatingInputGroup2" placeholder="Username" name="cep" required>
                        <label for="floatingInputGroup2">CEP</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input  class="form-control input-cadastro" id="floatingPassword" placeholder="Password" required type="password" name="senha">
                        <label for="floatingPassword">Senha</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input  class="form-control input-cadastro" id="floatingPassword" placeholder="Password" required type="password">
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
                        <button class="btn btn-primary btn-lg botao input-cadastro" name="inserir">Criar Conta</button>
                        <p class="tag-style-c">Já tem uma conta? <a href="login.php">Login</a></p>
                    </div>


                </form>
            </section> 
        </div>



    </div>
    <!-- ========== Destaque ========== -->
    <div id="destaque-cadastro" ></div>

    </div>

</div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>