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
<div class="container">
    <div class="row">
        <!-- =========== Formulário  =========== -->
        <div class="col-6">
            
            <div>
                <div id="pata" class="d-flex flex-column justify-content-center align-items-center"></div>
                <h1>Seja bem <br> vindo de volta</h1>
                <p class="estilo-p">Coloque seus dados e venha ver os seus pets</p>
            </div>

            <section class="estilo-form">
                <form action="" >
                    <div class="form-floating mb-3">
                        <input class="form-control input" id="floatingInput" placeholder="name@example.com" required type="email">
                        <label for="floatingInput">E-mail</label>
                    </div>
                    <br>

                    <div class="form-floating">
                        <input  class="form-control input" id="floatingPassword" placeholder="Password" required type="password">
                        <label for="floatingPassword">Senha</label>
                    </div>

                    
                        <div class="estilo-cadeado">
                            <div class="esqueci-senha">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="" rel="" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                                </svg>
                                Esqueci a senha</a>
                            </div>
                        
                        <div class="hero">
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Recupere sua conta</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Insira seu email para recuperar a sua senha.

                                    <form action="" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control input" id="floatingInput" placeholder="name@example.com" required type="email">
                                            <label for="floatingInput">Email</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary enviar">Enviar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
            

                    <br>

                    <div>
                        <button class="btn btn-primary btn-lg botao">Entrar</button>
                        <p class="tag-style">Não tem uma conta? <a href="cadastro.php">Crie uma conta de graça</a></p>
                    </div>
                </form>
            </section> 

        </div>
   
        <!-- ========== Destaque ========== -->
        <div class="col-8" id="destaque"></div>

    </div>
</div>

</main>

<!-- ======== JS Bootstrap ======== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>