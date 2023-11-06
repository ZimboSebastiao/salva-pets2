<!DOCTYPE html>
<html lang="en">

<head>
  <title>Information Card Slider Concept</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700,900" rel="stylesheet">
  <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/614007/f2-common.css'>
  <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/614007/swiper.min.css'>
  <link rel="stylesheet" href="assets/css/estilo.css" />
</head>

<body>
  <div class="main-wrapper">
    <div class="sl-main-container">
      <div class="sl-header-wrapper">

        <h3>Novos pets</h3>

        <p>Confira os principais dados dos pets para ver qual o nível de compátibilidade entre vocês !</p>

        <!-- Botões de navegação -->
        <div class="sl-nav">
          <div class="swiper-button-next">
            <svg id="nextBtn" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65">
              <style>
                #nextBtn {
                  fill: #ffa500;
                }
              </style>
              <path d="M32.5 0A32.5 32.5 0 1 0 65 32.5 32.5 32.5 0 0 0 32.5 0zm0 62A29.5 29.5 0 1 1 62 32.5 29.53 29.53 0 0 1 32.5 62zm-5.22-40.28L38.06 32.5 27.28 43.28l2.12 2.12 12.9-12.9-12.9-12.9z" />
            </svg>
          </div>
          <div class="swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" id="prevBtn" data-name="Layer 1" viewBox="0 0 65 65">
              <style>
                #prevBtn {
                  fill: #ffa500;
                }
              </style>
              <path d="M0 32.5A32.5 32.5 0 1 0 32.5 0 32.5 32.5 0 0 0 0 32.5zm3 0A29.5 29.5 0 1 1 32.5 62 29.53 29.53 0 0 1 3 32.5zm32.6-12.9L22.7 32.5l12.9 12.9 2.12-2.12L26.94 32.5l10.78-10.78z" />
            </svg>
          </div>
        </div>
      </div>

      <div class="sl-wrapper">
        <!-- Slider main container -->
        <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">



            <!-- SLIDE 01 -->
            <div class="swiper-slide sl--slide">
              <div class="slide-cover"></div>

              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-1 sl-bkg-img"></div>
                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">
                    <p class="sl--sub-text">

                      <!-- Gênero do pet -->
                      <img src="icones/001-sexo-masculino.png" alt="icone genero" width="20px"> Macho
                    </p>

                    <!-- Nome do pet -->
                    <h2>Bolinha</h2>

                    <!-- Descrição do bicho -->
                    <p class="sl--card-content">Bolinha é um adorável cão macho, com um pelo macio e um olhar cheio de alegria. Ele é um vira-lata resgatado, com uma personalidade única que conquista o coração de todos. Ele adora brincar de esconde-esconde, de correr pelo jardim e perseguir borboletas é outra paixão, nunca perde a oportunidade de caçar insetos em um dia de sol. Seu prato preferido é uma ração de alta qualidade, mas ele nunca recusaria um pedaço suculento de carne ou um petisco saboroso.</p>

                    <!-- idade -->
                    <p class="slide-idade">Idade: 1 ano e 3 mêses.</p>
                  </div>

                  <!-- Card Nav GRP -->
                  <div class="sl--card-nav-container">
                    <!-- Reveal info btn -->
                    <div class="sl--content-btn content-reveal-btn">

                    <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                        <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z" />
                      </svg>
                    </div>
                  </div>
                  <!-- END: Card Nav GRP -->
                </div>
              </div>
            </div>

            <!-- SLIDE 02 -->
            <div class="swiper-slide">
              <div class="slide-cover"></div>
              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-2 sl-bkg-img"></div>
                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">

                    <!-- Gênero do pet -->
                    <p class="sl--sub-text"><img src="icones/002-fmea.png" alt="icone genero" width="20px"> Femêa</p>

                    <!-- Nome do pet -->
                    <h2>General Leia</h2>

                    <!-- Descrição do bicho -->
                    <p class="sl--card-content">Leia é uma gata graciosa e elegante, com um pelagem longa e macia. Ela é uma verdadeira dama, sua personalidade tranquila e independente cativa a todos que a conhecem. Leia adora brincar de caçar com brinquedos de penas e sinos. Ela é ágil e adora saltar para pegar suas presas de brinquedo, mostrando suas habilidades de caçadora. Quanto à comida, Leia tem um paladar exigente. Ela prefere uma ração de peixe fresco e ocasionalmente, se seus donos permitirem, ela saboreia pedaços de atum fresco ou frango.</p>

                    <p class="slide-idade">Idade: 5 anos </p>
                  </div>

                  <!-- Card Nav GRP -->
                  <div class="sl--card-nav-container">
                    <!-- Reveal info btn -->
                    <div class="sl--content-btn content-reveal-btn">
                      <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                        <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z" />
                      </svg>
                    </div>
                  </div>
                  <!-- END: Card Nav GRP -->
                </div>
              </div>
            </div>

            <!-- SLIDE 03-->
            <div class="swiper-slide">
              <div class="slide-cover"></div>
              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-3 sl-bkg-img"></div>

                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">

                    <!-- Gênero do pet -->
                    <p class="sl--sub-text">
                    <p class="sl--sub-text"><img src="icones/002-fmea.png" alt="icone genero" width="20px"> Femêa</p>

                    <!-- Nome do pet -->
                    <h2>Lara Croft</h2>

                    <!-- Descrição do bicho -->
                    <p class="sl--card-content">Lara é uma adorável cadela de olhos expressivos que fazem dela uma verdadeira encantadora de corações. Ela é um exemplo de doçura e lealdade, e seu entusiasmo contagiante traz muita alegria a todos ao seu redor. Lara é uma amante de brincadeiras ao ar livre. Ela adora correr e saltar, especialmente quando está perseguindo uma bola. Além disso, Lara também gosta de brincar de pega-pega e adora correr atrás de pássaros e borboletas no jardim. Lara é uma cadela com um apetite saudável. Sua ração de alta qualidade é a base de sua alimentação, mas ela fica extremamente feliz quando há adições como pedaços de frango cozido ou um biscoito canino especial. </p>

                    <p class="slide-idade">Idade: 6 anos</p>


                  </div>

                  <!-- Card Nav GRP -->
                  <div class="sl--card-nav-container">
                    <!-- Reveal info btn -->
                    <div class="sl--content-btn content-reveal-btn">
                      <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                        <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z" />
                      </svg>
                    </div>
                  </div>
                  <!-- END: Card Nav GRP -->

                </div>
              </div>
            </div>

            <!-- SLIDE 04 -->
            <div class="swiper-slide">
              <div class="slide-cover"></div>
              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-4 sl-bkg-img"></div>

                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">

                    <!-- Gênero do pet -->
                    <p class="sl--sub-text"><img src="icones/001-sexo-masculino.png" alt="icone genero" width="20px"> Macho </p>

                    <!-- Nome do pet -->
                    <h2>Oliver</h2>

                    <!-- Descrição do bicho -->
                    <p class="sl--card-content">Oliver é um gato de pelo sedoso e olhos penetrantes. Ele tem uma elegância natural e uma personalidade misteriosa, mas ele também possui um lado brincalhão.
                      Oliver adora brincar com bolinhas de pelo e, ocasionalmente, gosta de caçar pequenos brinquedos de pelúcia. Ele é um exímio caçador, pulando e se esgueirando como um verdadeiro predador e adora morar no sofá. Oliver tem um paladar requintado. Ele prefere uma ração de alta qualidade, mas não resiste a um pedaço suculento de peixe, como salmão ou um belo ovo cozinhado.
                    </p>
                    <p class="slide-idade">Idade: 3 anos</p>
                  </div>

                  <!-- Card Nav GRP -->
                  <div class="sl--card-nav-container">
                    <!-- Reveal info btn -->
                    <div class="sl--content-btn content-reveal-btn">
                      <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                        <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z" />
                      </svg>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <!-- END: Card Nav GRP -->

            <!-- SLIDE 05 -->
            <div class="swiper-slide">
              <div class="slide-cover"></div>
              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-5 sl-bkg-img"></div>

                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">

                    <!-- Gênero do pet -->
                    <p class="sl--sub-text"><img src="icones/001-sexo-masculino.png" alt="icone genero" width="20px"> Macho </p>

                    <!-- Nome do pet -->
                    <h2>Max</h2>

                    <!-- Descrição do bicho -->
                    <p class="sl--card-content">Max é um cão de raça Golden Retriever, com um pelo dourado e é conhecido por sua natureza amigável e entusiasmo contagioso. Max é o companheiro perfeito para aventuras ao ar livre. Max adora brincar de pega-pega e corre que nem um raio no jardim, Além de puxar grandes galhos quando vê um. Max tem um apetite insaciável. Ele adora sua ração de alta qualidade, mas fica especialmente feliz quando recebe pedaços de carne como um agrado. Max é um grande fã de biscoitos caninos e guloseimas, e nunca recusa um.</p>

                    <p class="slide-idade">Idade: 4 anos e 2 meses</p>
                  </div>

                  <!-- Card Nav GRP -->
                  <div class="sl--card-nav-container">
                    <!-- Reveal info btn -->
                    <div class="sl--content-btn content-reveal-btn">
                      <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                        <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z" />
                      </svg>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <!-- END: Card Nav GRP -->

            <!-- SLIDE 06 -->
            <div class="swiper-slide">
              <div class="slide-cover"></div>
              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-6 sl-bkg-img"></div>

                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">
                    <p class="sl--sub-text">

                      <!-- Gênero do pet -->
                    <p class="sl--sub-text"><img src="icones/002-fmea.png" alt="icone genero" width="20px"> Femêa</p>

                    <!-- Nome do pet -->
                    <h2>Luna</h2>

                    <!-- Descrição do bicho -->
                    <p class="sl--card-content">Luna, é uma gata de pelo curto com um espírito aventureiro. Ela é uma exploradora nata, sempre atenta e pronta para se aventurar em qualquer lugar. Luna é uma aficionada por brincadeiras com bolinhas de brinquedo e fios, e ela pode passar horas perseguindo esses objetos pela casa. Ela também adora brincar de esconde-esconde e pular de lugares altos para surpreender seus donos. Quando se trata de comida, Luna é uma gata de gostos simples. Ela aprecia uma ração de alta qualidade, mas o que realmente a faz ronronar de alegria é um pouco de patê de frango.</p>

                    <p class="slide-idade">Idade: 2 anos</p>
                  </div>

                  <!-- Card Nav GRP -->
                  <div class="sl--card-nav-container">
                    <!-- Reveal info btn -->
                    <div class="sl--content-btn content-reveal-btn">
                      <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                        <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z" />
                      </svg>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <!-- END: Card Nav GRP -->
          </div>
          <!-- If we need pagination -->
          <!--<div class="swiper-pagination"></div>-->

        </div>
      </div>
      <!-- END: .sl-wrapper -->

    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/614007/swiper.jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js'></script>
  <script src="script.js"></script>
  <script src="js/carrosel.js"></script>
</body>

</html>