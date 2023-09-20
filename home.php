<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SalvaPets - Adote o seu pet</title>
  <!-- ======== CSS Bootstrap ======== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>


<!-- ======== CABEÇALHO ======== -->
<header class="menu-color">
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

          <ul class="menu menu-color">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nossos Pets
              </a>
              <ul class="dropdown-menu dropdown-menu-end menu-color" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Cachorros</a></li>
                <li><a class="dropdown-item" href="#">Gatos</a></li>
              </ul>
            </li>
            <li><a href="#">Quem Somos</a></li>
            <li><a href="#">Ajuda</a></li>
            <li><a href="#">Contato</a></li>
            <li><a  href="login.php" class="btn btn-primary"  tabindex="-1" role="button" aria-disabled="true">Entrar</a></li>
          </ul>
  
    </nav>
  </div>

</header>




<main>

    <div class="cabecalho">
        <h1 class="me-5 ">Encontre e adote <br>
          um pet para você.</h1>
    
        <p>
          Você não pode comprar amor,
          mas você pode adotar ele.
          Adote um pet para fazer companhia🐾
        </p>
    
        <!-- INPUT CIDADE -->
        <div class="input-group mb-2  bg-dark">
          <!-- <img src="icones/pata (1).png" alt="" width="10%"> -->
          <input type="text" class="form-control cont icon-city" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Cidade">
        </div>
    
    
        <!-- INPUT REGIÃO -->
        <div class="input-group mb-2  bg-dark">
          <input type="text" class="form-control cont icon-house" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Região">
        </div>
    
        <!-- INPUT ANIMAL -->
        <div class="input-group mb-2  bg-dark">
          <!-- <img src="icones/bola-de-cachorro (1).png" alt="" width="10%"> -->
          <input type="text" class="form-control cont icon-animal" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Animal">
        </div>
    
        <!-- INPUT RAÇA -->
        <div class="input-group mb-2  bg-dark">
          <!-- <img src="icones/bicho-de-estimacao (1).png" alt="" width="10%"> -->
          <input type="text" class="form-control cont icon-race" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Raça">
        </div>
    
        <!-- BOTÃO BUSCAR PET -->
        <div class="d-grid gap-2 p-5">
          <button class="btn btn-primary" type="button">Buscar Pet</button>
        </div>
    
    </div>

    <!-- Titulos pre cards pets -->
    <article class="pet-ideal text-center p-5">
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

<!-- ====== FOOTER ====== -->
<footer class=" text-lg-start footer-color text-muted">

  <!-- ====== Links ====== -->
  <section class="">
    <div class="container text-center text-md-start mt-5">

      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
          <a class="navbar-brand customize" href="#">
            <img src="icones/pet1.png" alt="..." height="24">
            SalvaPets
          </a>
          </h6>
          <p class="Beetle-letters negrito">Não compre, adote!</p>
          <p class="negrito">contato.salvapets@gmail.com</p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Nossos pets
          </h6>
          <p><a href="#!" class="text-reset">Cachorros</a></p>
          <p><a href="#!" class="text-reset">Gatos</a></p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Institucional
          </h6>
          <p><a href="#!" class="text-reset">Sobre nós</a></p>
          <p><a href="#!" class="text-reset">Contato</a></p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Centro de ajuda</h6>
          <p><a href="#!" class="text-reset">Política de privacidade</a></p>
          <p><a href="#!" class="text-reset">Ajuda</a></p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>

  </section>
  <!-- Section: Links  -->

  <!-- ======= REDES SOCIAS ======== -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>© 2023 Copyright SalvaPets. Todos os direitos reservados.</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a target="_blank" href="https://linktr.ee/salvapets" class="me-4 text-reset">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </svg>
      </a>

      <a target="_blank" href="https://linktr.ee/salvapets" class="me-4 text-reset">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
      </svg>
      </a>

      <a target="_blank" href="https://linktr.ee/salvapets" class="me-4 text-reset">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg>
      </a>

      <atarget="_blank" href="https://linktr.ee/salvapets" class="me-4 text-reset">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
        </svg>
      </a>

      <a target="_blank" href="https://linktr.ee/salvapets" class="me-4 text-reset">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </svg>
      </a>
    </div>
    <!-- Right -->

  </section>
  <!-- REDES SOCIAS -->

  
</footer> <!-- FIM FOOTER  -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="js/menu.js"></script>

</body>

</html>