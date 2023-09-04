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
        <input type="text" class="form-control" aria-label="Sizing example input"  aria-describedby="inputGroup-sizing-default"placeholder="Cidade">
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
    </div>
  </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>