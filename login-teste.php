<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        form {
            width: 50%;
            margin: auto;
        }

        .botao {

            width: 100%;
        }

        .cadeado {
            margin: 9px;
            background-size: cover;
            height: 20px;
        }

        .esqueci-senha {
            text-align: right;
        }
    </style>
</head>

<body>
    <h1>teste</h1>
    <form action="" method="post">
        <div class="form-floating mb-3">
            <input class="form-control input" id="floatingInput" placeholder="name@example.com" required type="email">
            <label for="floatingInput">E-mail</label>
        </div>
        <br>

        <div class="form-floating">
            <input class="form-control input" id="floatingPassword" placeholder="Password" required type="password">
            <label for="floatingPassword">Senha</label>
        </div>

        <div class="esqueci-senha">
            <img class="cadeado" src="icones/lock1.svg" alt="">
            <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="" rel="">Esqueci a senha</a>
        </div>

        <div>
            <button class="btn btn-primary btn-lg botao mt-3">Entrar</button>
            <p class="tag-style">Não tem uma conta? <a href="cadastro.php">Crie uma conta de graça</a></p>
        </div>
    </form>
</body>

</html>