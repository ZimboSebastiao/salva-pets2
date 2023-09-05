<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SalvaPets - Home</title>
  <!-- ======== CSS Bootstrap ======== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <header>

    <!-- Menu Responsivo -->
    <nav class="navbar navbar-expand-lg  bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="icones/pet1.png" alt="..." height="46">
          Salva Pets
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nossos Pets
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Cachorros</a></li>
                <li><a class="dropdown-item" href="#">Gatos</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
            <a href="login.php" class="btn btn-primary botaoH" tabindex="-1" role="button" aria-disabled="true">Entrar</a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Destaque encontre e adote -->
    <div class="cabecalho">
      <h1>Encontre e adote <br>
        um pet para você.</h1>

      <p>
        Você não pode comprar amor,
        mas você pode adotar ele.
        Adote um pet para fazer companhia🐾
      </p>

      <!-- Input Cidade -->
      <div class="input-group mb-2  bg-dark">
        <img src="icones/pata (1).png" alt="" width="10%">
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Cidade">
      </div>

      <!-- Input Região -->
      <div class="input-group mb-2  bg-dark">
        <img src="icones/pet-house.png" alt="" width="10%">
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Região">
      </div>

      <!-- Input Animal-->
      <div class="input-group mb-2  bg-dark">
        <img src="icones/bola-de-cachorro (1).png" alt="" width="10%">
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Animal">
      </div>

      <!-- Input Raça -->
      <div class="input-group mb-2  bg-dark">
        <img src="icones/bicho-de-estimacao (1).png" alt="" width="10%">
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Raça">
      </div>

      <!-- Botão de busca -->
      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="button">Buscar Pet</button>
      </div>

    </div>
  </header>
  <main>
    <!-- Titulos pre cards pets -->
    <article class="pet-ideal text-center">
      <h2>Pets para você</h2>
      <h3>Descubra o pet que mais faz sentido para você</h3>
      <p class="text-primary">Encontre o pet ideal para o seu convívio</p>
    </article>

    <!-- Titulos pre cards como adotar  -->
    <section class="processo-adocao text-center">
      <h2>Como funciona o processo de adoção?</h2>
      <h3>Veja como é facil Adotar um Pet!</h3>
      <p class="text-primary">Siga o passo a passo para a chegada do seu pet.</p>
    </section>

    <!-- cards de processo de adoção -->
    <div>
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <img src="icones/pesquisa.png" alt="">
            <h5 class="card-title">Enconte o pet ideal</h5>
            <p class="card-text">Aqui é onde tudo começa,
              escolha um pet disponives e o favorite.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <img src="icones/cuidado-animal.png" alt="">
            <h5 class="card-title">Crie seu cadastro</h5>
            <p class="card-text">Crie seu cadastro para poder solicitar a adoção do seu pet.</p>
          </div>
        </div>
      </div>

      <div>
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <img src="icones/seguro-pet.png" alt="">
              <h5 class="card-title">Aguarde a Aprovação para ir buscá-lo</h5>
              <p class="card-text">Após solicitar a adoção, basta aguardar 24 horas para poder buscar o seu pet e levá-lo até sua nova casa. </p>
            </div>
          </div>
        </div>
      </div>

      <!-- card adotar pet -->
      <img src="/images/mulher-cacholo.PNG" alt="" class="">
  </main>
  <footer></footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>