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

<!-- ======== CABEÇALHO ======== -->
<header>
  <div class="limitador">
    <a class="navbar-brand customize" href="#">
      <img src="icones/pet1.png" alt="..." height="46">
      SalvaPets
    </a>
    <nav>
      <h2><a href="" class="icone">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-nested" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </a></h2>
      <ul class="menu">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nossos Pets
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Cachorros</a></li>
            <li><a class="dropdown-item" href="#">Gatos</a></li>
          </ul>
        </li>
        <li><a  href="#">Quem Somos</a></li>
        <li ><a href="#">Ajuda</a></li>
        <li ><a href="#">Contato</a></li>
      </ul>
    </nav>
  </div>
</header>
<hr> <!-- FIM CABEÇALHO  -->



<!-- ======== CONTEÚDO ======== -->
<main>

  <!-- ====== BARRA DE PROGRESSO ====== -->
  <div class="container-2">
    <div class="progress-text decrease-letters">
      <span class="decrease">Dados Básicos</span>
      <span class="Beetle-letters">Te conhecendo</span>
      <span class="Beetle-letters">Adotou!</span>
    </div>
    <div class="progress tes" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
      <div class="progress-bar progress-bar-striped  progress-bar-animated cor-padrao" style="width: 28%">25%</div>
    </div>

    <div class="personalizar">
      <h1>Vamos Adotar seu <br> pet bem rápido</h1>
    </div>
    
  </div>
  
  <!-- ====== FORMULÁRIO ====== -->
  <div class="container">
    <div class="row">
      <section class="estilo-form">
        <form action=""  method="post">

            <!-- ====== Nome Completo ====== -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control input" id="floatingInputGroup2" placeholder="Username" required name="nome">
                <label for="floatingInputGroup2">Nome completo</label>
            </div>
            
            <!-- ====== E-mail ====== -->
            <div class="form-floating mb-3">
                <input class="form-control input" id="floatingInput" name="email" placeholder="name@example.com" required type="email">
                <label for="floatingInput">E-mail</label>
            </div>
            
            <!-- ====== Estado ====== -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control input" id="floatingInputGroup2" placeholder="Username" name="estado" required>
                <label for="floatingInputGroup2">Estado</label>
            </div>

            <!-- ====== Cidade ====== -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control input" id="floatingInputGroup2" placeholder="Username" name="cidade" required>
                <label for="floatingInputGroup2">Cidade</label>
            </div>

            <!-- ====== Endereço ====== -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control input" id="floatingInputGroup2" placeholder="Username" name="endereco" required>
                <label for="floatingInputGroup2">Endereço</label>
            </div>

            <div class="divide entry">

              <!-- ====== Número ====== -->
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInputGroup2" placeholder="Username" name="numero" required>
                  <label for="floatingInputGroup2">Número</label>
              </div>

              <!-- ====== Complemento ====== -->
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInputGroup2" placeholder="Username" name="completo" required>
                  <label for="floatingInputGroup2">Completo</label>
              </div>
            </div>


            <div>
                <button class="btn btn-primary btn-lg botao" name="inserir">Próxima etapa</button>
                
            </div>

        </form>

      </section> 
    </div>
  </div>


</main> <!-- FIM CONTEÚDO  -->


  <footer></footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="js/menu.js"></script>
</body>

</html>