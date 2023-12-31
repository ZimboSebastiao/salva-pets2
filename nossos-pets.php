<?php 
  use Salvapets\Utilitarios;
  use Salvapets\Usuario;
  use Salvapets\ControleDeAcesso;
  require_once "vendor/autoload.php";


  $sessao = new ControleDeAcesso;
  $usuario = new Usuario;
 




  if (isset($_GET['sair'])) $sessao->logout();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SalvaPets - Adote o seu pet</title>
  <!-- ======== CSS Bootstrap ======== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
<!-- ======== CABEÇALHO ======== -->
<header>
    <nav class="navbar navbar-expand-lg w-100">
      <div class="container-fluid m-none">
        <a class="navbar-brand px-lg-5 px-xl-5 fw-bold" href="home.php"><img src="icones/pet1.png" alt="..." height="46">
          SalvaPets</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarScroll">
          <ul class="link-menu navbar-nav me-auto my-3 my-lg-0 navbar-nav-scroll d-flex justify-content-around w-75 text-center m-auto" style="--bs-scroll-height: 250px; ">

          <li class="nav-item dropdown fs-5 fw-bold">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nossos pets
          </a>
          <ul class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-end" href="nossos-pets.php">Todos pets</a></li>
            <li><a class="dropdown-item text-end" href="nossos-pets.php?dogs">Cachorros</a></li>
            <li><a class="dropdown-item text-end" href="nossos-pets.php?cats">Gatos</a></li>
          </ul>
        </li>
            <li class="nav-item">
              <a class="nav-link fs-5 fw-bold" href="ajuda.php">Ajuda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 fw-bold px-0 z-1 position-relative" href="contato.php">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 fw-bold z-1 position-relative" href="quem-somos.php">Quem somos</a>
            </li>
          </ul><hr>
          <?php if (!isset($_SESSION['id'])){ ?>
          <form class="d-flex justify-content-center me-lg-5" role="search">
            <a href="login.php" class="btn btn-primary border px-5 z-1 position-relative" tabindex="-1" role="button" aria-disabled="true">Entrar</a>
          </form><hr class="">
          <?php }?>
          
          <?php if (isset($_SESSION['id'])){ ?>
              <li class="nav-item menu-perfil dropdown list-unstyled me-lg-5 z-1 position-relative text-center pt-3">
              <a class="nav-link dropdown-toggle d-flex justify-content-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                <p class="text-center">Olá, <?= $_SESSION["nome"]?></p>

                <span class="espacamento-user">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
                </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="perfil.php">
                  <span class="espacamento-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                        <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
                      
                      
                    </svg>
                  </span>
                  Perfil</a>
                </li>

                <li><a class="dropdown-item" href="#">
                  <span class="espacamento-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                  </svg>
                  </span>
                  Favorito</a>
                </li>

                <li><a class="dropdown-item" href="?sair" > 
                <span class="espacamento-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                  </svg>
                </span>
                Sair</a></li>
              </ul>
            </li>
            <?php } ?>
        </div>
      </div>
    </nav>
</header>
<!-- FIM CABEÇALHO  -->


<main>

  <!-- FILTROS DE BUSCA -->


    <div class="top-pets pb-3 limitar-tela">
      <div class="container-fluid d-flex gap-2 gap-xl-5 flex-wrap m-auto flex-xl-nowrap">
  
        <!-- INPUT CIDADE -->
        <div class="input-group border rounded border-dark d-flex align-items-center">
          <input  type="text" id="cidade" class="form-control cont icon-city" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Cidade">
        </div>
  
        <!-- INPUT REGIÃO -->
        <div class="input-group border rounded border-dark">
          <input id="regiao" type="text" class="form-control cont icon-house " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Região" >
        </div>
  
        <!-- INPUT ANIMAL -->
        <div class="input-group border rounded border-dark">
          <input id="animal" type="text" class="form-control cont icon-animal" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Animal">
        </div>
  
        <!-- INPUT IDADE -->
        <div class="input-group border rounded border-dark">
          <input id="idade" type="text" class="form-control cont icon-animal" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Idade">
        </div>
  
        <!-- INPUT RAÇA -->
        <div class="input-group border rounded border-dark">
          <input id="raca" type="text" class="form-control cont icon-race" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Raça">
        </div>
  
        <!-- BOTÃO BUSCAR PET -->
        <div class="w-75 m-auto border-none">
          <button class="btn btn-primary border-0 w-100" type="button" id="buscar">Buscar Pet</button>
        </div>
   
      </div>
    </div>

  
  <div class="limitar-tela">

    <h1 class="pets-h1 text-center">
      <?php

          if (isset($_GET['dogs'])) {
            $apiUrl = "https://salvapets.onrender.com/cachorros/";  
            $apiData = file_get_contents($apiUrl);
            $data = json_decode($apiData, true);
            
          } elseif (isset($_GET['cats'])) {
            $apiUrl = "https://salvapets.onrender.com/gatos/";  
            $apiData = file_get_contents($apiUrl);
            $data = json_decode($apiData, true);
          } else {

            $apiUrl = "https://salvapets.onrender.com/pets/";  
            $apiData = file_get_contents($apiUrl);
            $data = json_decode($apiData, true);
          }
          

          if (isset($_GET['regiao'])) {
            $regiao = $_GET['regiao'];
            $apiUrl = "https://salvapets.onrender.com/regiao/{$regiao}";
            $apiData = file_get_contents($apiUrl);
            $data = json_decode($apiData, true);
        }
          
      ?> <?=count($data);?> Pets disponíveis para você
    </h1>

    <div class="d-flex flex-wrap justify-content-center gap-5 mt-5 mt-md-5 data-pets='<?= json_encode($data); ?>">
    <?php
       
      // Faz a solicitação à API e obtém os dados
      $apiData = file_get_contents($apiUrl);
    
      if ($apiData) {
          // Converte a resposta JSON em um array PHP
          $data = json_decode($apiData, true);
    
          if ($data) {
              foreach ($data as $pet) {
                  $id = $pet['id'];
                  $nome = $pet['nome'];
                  $idade = $pet['idade'];
                  $sobre = $pet['sobre'];
                  $localizacao = $pet['localizacao'];
                  $cidade = $pet['cidade'];
                  $regiao = $pet['regiao'];
                  $sexo = $pet['sexo'];
                  $imagem = $pet['imagem'];
    
                  
                  $imagemUrl = "https://salvapets.onrender.com/" . $imagem; ?>
    
        <div class="card border card-item shadow mt-5 rounded-4">
        
          <a href="detalhe.php?id=<?=$pet['id']?>"><img class=" rounded-4 shadow" src='<?=$imagemUrl?>' class="card-img-top" alt='<?=$nome?>' height="290"></a>
          <div class="card-body">
            <div class="favoritar-nome">
              <h5 class="card-title nome-pets"><?=$nome?></h5>
              
            </div>
            
            <i class="bi bi-geo-alt loc-pets"><?=$localizacao?></i>
            <div class="idade-sexo">
              <p class="card-text sexo-pets">
              <?php 
                if ($sexo === "Fêmea") { ?>
                
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
                </svg>
                <?php 
                } else {?>
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
              </svg>
              <?php
                } 
              ?>
              <?=$sexo?></p>
              <?php 
                $dataNascimento = strtotime($idade);
                $dataAtual = time();
      
                if ($dataNascimento !== false) {
                  $diferencaSegundos = $dataAtual - $dataNascimento;
          
                  $anos = floor($diferencaSegundos / (365 * 24 * 60 * 60)); }
                  $meses = floor(($diferencaSegundos % (365 * 24 * 60 * 60)) / (30 * 24 * 60 * 60));
                ?>
            
              <i class="bi bi-cake"> <?=$anos?> anos e <?=$meses?> meses</i>
            </div>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            <div class="mt-3 text-start">
              <a href="detalhe.php?id=<?=$pet['id']?>"><button class="btn btn-primary border-0">Adotar</button></a>
            <!-- <button class="btn btn-primary border-0" name="atualizar"><i class="bi bi-arrow-clockwise"></i> Adotar</button> -->
          </div>
          </div>
        </div>
    
    <?php 
            }
        } else {
            echo "<p>Ocorreu um erro ao analisar os dados da API.</p>";
        }
    } else {
        echo "<p>Ocorreu um erro ao buscar os dados da API.</p>";
    }
    ?>
    </div>
  </div>


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
            <p class="negrito">suporte.salvapets@gmail.com</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Nossos pets
            </h6>
            <p><a href="nossos-pets.php?dogs" class="text-reset">Cachorros</a></p>
            <p><a href="nossos-pets.php?cats" class="text-reset">Gatos</a></p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Institucional
            </h6>
            <p><a href="quem-somos.php" class="text-reset">Sobre nós</a></p>
            <p><a href="contato.php" class="text-reset">Contato</a></p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Centro de ajuda</h6>
            <p><a href="#!" class="text-reset">Política de privacidade</a></p>
            <p><a href="ajuda.php" class="text-reset">Ajuda</a></p>
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
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg>
        </a>

        <a target="_blank" href="https://linktr.ee/salvapets" class="me-4 text-reset">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
          </svg>
        </a>

        <a target="_blank" href="https://linktr.ee/salvapets" class="me-4 text-reset">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg>
        </a>

      <a target="_blank" href="https://linktr.ee/salvapets" class="me-4 text-reset">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
        </svg>
      </a>

          <a target="_blank" href="https://linktr.ee/salvapets" class="me-4 text-reset">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
              <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
            </svg>
          </a>
      </div>
      <!-- Right -->

    </section>
    <!-- REDES SOCIAS -->


</footer> <!-- FIM FOOTER  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="js/menu.js"></script>
  <!-- <script src="js/filtros.js"></script> -->


</body>

</html>