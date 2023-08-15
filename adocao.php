<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo de Adoção - Salvapets</title>
    <!-- ======== CSS Bootstrap ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>

<!-- ======== SideBar ======== -->
<section>
<a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  <img src="icones/cardapio.png" alt="Menu Hamburguer">
</a>

<!-- ======== CABEÇALHO ======== -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <img src="icones/pet3.png" alt="">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">SalvaPets</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <hr>

  <div class="offcanvas-body">
    <div>

    <!-- ======== LINK INICIAL ======== -->
    <div class="dropdown mt-3">
      <a class="btn btn-secondary" href="cadastro.php" role="button" aria-controls="offcanvasExample" data-bs-toggle="tooltip" data-bs-placement="auto" title="Inicial">
        <img src="icones/pet-house1.png" alt="Home">
      </a>
    </div>

    <!-- ======== BOTÃO NOSSOS PETS ======== -->
    <div class="dropdown mt-3">
      <button class="btn btn-secondary lgend" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="icones/gato1.png" alt="Nossos pets">
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Cachorros</a></li>
        <li><a class="dropdown-item" href="#">Gatos</a></li>
      </ul>
    </div>
    
    <!-- ======== BOTÃO QUEM SOMOS ======== -->
    <div class="dropdown mt-3">
      <button class="btn btn-secondary legenda" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="icones/pessoas-juntas1.png" alt="Quem somos">
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Processo de adoção</a></li>
        <li><a class="dropdown-item" href="#">Nosso time</a></li>
        <li><a class="dropdown-item" href="#">Contato</a></li>
      </ul>
    </div>

    <!-- ======== LINK AJUDA ======== -->
    <div class="dropdown mt-3">
      <a class="btn btn-secondary" href="cadastro.php" role="button" aria-controls="offcanvasExample" data-bs-toggle="tooltip" data-bs-placement="left" title="Ajuda">
        <img src="icones/ajuda1.png" alt="Ajuda">
      </a>
    </div>

    <!-- ======== LINK CONTATO ======== -->
    <div class="dropdown mt-3">
      <a class="btn btn-secondary" href="cadastro.php" role="button" aria-controls="offcanvasExample" data-bs-toggle="tooltip" data-bs-placement="left" title="Contato">
        <img src="icones/atendimento-ao-cliente1.png" alt="Contato">
      </a>
    </div>
   
    
</div>

    <hr>
    <!-- ======== BOTÃO USÚARIO ======== -->
    <div class="dropdown mt-3">
      <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
        
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>

  </div>
</div>
</section>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))

  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl, {
      placement: 'left'
    });
  });

  var legendaTooltipList = [].slice.call(document.querySelectorAll('.legenda'))

  legendaTooltipList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl, {
      placement: 'left',
      title: 'Quem somos'
    });
  });

  var lgendTooltipList = [].slice.call(document.querySelectorAll('.lgend'))

  lgendTooltipList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl, {
      placement: 'left',
      title: 'Nossos Pets'
    });
  });
</script>

</body>
</html>