<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/Css.css">
</head>

<body>
  <!-- ======== CABEÇALHO ======== -->
  <!-- <header class="menu-color">
    <div class="limitador">
      <a class="navbar-brand customize" href="#">
        <img src="icones/pet1.png" alt="..." height="46">
        SalvaPets
      </a>
      <nav>
        <h2><a href="" class="icone">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-nested" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z" />
            </svg>
          </a></h2>
        <ul class="menu menu-color">
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nossos Pets
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="nossos-pets.php">Todos pets</a></li>
              <li><a class="dropdown-item" href="#">Cachorros</a></li>
              <li><a class="dropdown-item" href="#">Gatos</a></li>
            </ul>
          </li>
          <li><a href="quem-somos.php">Quem Somos</a></li>
          <li><a href="#">Ajuda</a></li>
          <li><a href="#">Contato</a></li>
          <?php if (!isset($_SESSION['id'])) { ?>
            <li><a href="login.php" class="btn btn-primary w-50 m-auto" tabindex="-1" role="button" aria-disabled="true">Entrar</a></li>
          <?php } ?>

          </li>
          <?php if (isset($_SESSION['id'])) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $_SESSION["nome"] ?>

                <span class="espacamento-user">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Perfil
                    <span class="espacamento-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                        <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z" />


                      </svg>
                    </span>
                  </a>
                </li>

                <li><a class="dropdown-item" href="#">Favorito
                    <span class="espacamento-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                      </svg>
                    </span>
                  </a>
                </li>

                <li><a class="dropdown-item" href="?sair">Sair
                    <span class="espacamento-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                      </svg>
                    </span>
                  </a></li>
              </ul>
            </li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </header> -->
  <main class="main-contact d-flex align-items-center m-auto">

    <div class="container-sm img-responsivo-cadastro">

      <h1 class="fs-1 text-center">Entre em <b>contato</b> com a gente!!</h1>
      <!-- =========== Formulário  =========== -->

      <div>

        <div class="center-form-cadastro m-auto">
          <div class="d-flex flex-column justify-content-center align-items-center"></div>

          <section class="estilo-form  m-auto d-flex align-items-center w-75 gap-5">
            <img src="../images/cat-dog-removebg-preview.png" alt="pets-paginaContato">

            <form action="https://formspree.io/f/xbjvbldj" method="post" class="b-2">

              <div class="form-floating mb-3">
                <input type="text" class="form-control input-cadastro" id="floatingInputGroup2" placeholder="Username" required name="nome">
                <label for="floatingInputGroup2">Nome completo</label>
              </div>

              <div class="form-floating mb-3">
                <input class="form-control input-cadastro" id="email" name="Email" placeholder="name@example.com" required type="email">
                <label for="email">E-mail</label>
              </div>

              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Digite sua mensagem!</label>
              </div>


              <div class="form-check estilo-l">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="">
                  Aceita receber as novidades do site
                </label>
              </div>

              <div>
                <button class="btn btn-primary btn-lg botao input-cadastro" type="submit">Enviar</button>
              </div>
            </form>
          </section>
        </div>

      </div>

      <!-- ========== Destaque ========== -->
      <div id="destaque-cadastro"></div>

    </div>

    </div>
  </main>
  <!-- ====== FOOTER ====== -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>