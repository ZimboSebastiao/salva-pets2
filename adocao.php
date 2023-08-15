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
<a class="btn " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  <img src="icones/cardapio.png" alt="">
</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">SalvaPets</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<hr>

  <div class="offcanvas-body">
    <div>

    <div class="dropdown mt-3">
      <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown">
        <img src="icones/pet-house1.png" alt="Home">
      </button>
    </div>

    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        <img src="icones/gato1.png" alt="Nossos pets">
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Cachorros</a></li>
        <li><a class="dropdown-item" href="#">Gatos</a></li>
      </ul>
    </div>
    
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        <img src="icones/pessoas-juntas1.png" alt="Quem somos">
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Processo de adoção</a></li>
        <li><a class="dropdown-item" href="#">Nosso time</a></li>
        <li><a class="dropdown-item" href="#">Contato</a></li>
      </ul>
    </div>

    <div class="dropdown mt-3">
      <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown">
        <img src="icones/ajuda1.png" alt="Ajuda">
      </button>
    </div>

    <div class="dropdown mt-3">
      <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown">
        <img src="icones/atendimento-ao-cliente1.png" alt="Contato">
      </button>
    </div>
   
    
</div>

<hr>

    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button
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
</body>
</html>