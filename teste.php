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
        <h3>Alguns pets</h3>
        <p>Confira os principais dados dos pets para ver qual o nível de compátibilidade entre vocês !</p>
        <!-- If we need navigation buttons -->
        <div class="sl-nav">
          <div class="swiper-button-next">
            <svg id="nextBtn" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65">
              <style>
                #nextBtn {
                  fill: #04b7ac;
                }
              </style>
              <path d="M32.5 0A32.5 32.5 0 1 0 65 32.5 32.5 32.5 0 0 0 32.5 0zm0 62A29.5 29.5 0 1 1 62 32.5 29.53 29.53 0 0 1 32.5 62zm-5.22-40.28L38.06 32.5 27.28 43.28l2.12 2.12 12.9-12.9-12.9-12.9z" />
            </svg>
          </div>
          <div class="swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" id="prevBtn" data-name="Layer 1" viewBox="0 0 65 65">
              <style>
                #prevBtn {
                  fill: #04b7ac;
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
            <!-- Slides -->

            <div class="swiper-slide sl--slide">
              <div class="slide-cover"></div>
              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-1 sl-bkg-img"></div>
                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">
                    <p class="sl--sub-text">Powerful Women</p>
                    <h2>Wonder Woman</h2>
                    <p class="sl--card-content">Diana Prince is the most recognizable female superhero in the world. Her debut film Wonder Woman is the highest grossing superhero origin film of all time. Created in 1941 and beloved for over 76 years, Diana Prince is a strong, compassionate
                      role model for men and women everywhere.</p>
                    <div class="sl--link">LINK</div>
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

            <div class="swiper-slide">
              <div class="slide-cover"></div>
              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-2 sl-bkg-img"></div>
                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">
                    <p class="sl--sub-text">Powerful Women</p>
                    <h2>General Leia Organa</h2>
                    <p class="sl--card-content">Leia is the most powerful female figurehead in the Star Wars franchise. This year she will take her final bow in Star Wars: The Last Jedi, as fans celebrate actress Carrie Fisher’s legacy one last time.</p>
                    <div class="sl--link">LINK</div>
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

            <div class="swiper-slide">
              <div class="slide-cover"></div>
              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-3 sl-bkg-img"></div>

                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">
                    <p class="sl--sub-text">Powerful Women</p>
                    <h2>Lara Croft</h2>
                    <p class="sl--card-content">This powerhouse of strength, smarts, and beauty is not to be trifled with. After the recent reboot of her 20-year-old video game franchise Tomb Raider, Lara is headed to the big screen next year for even greater adventures.</p>
                    <div class="sl--link">LINK</div>
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
            <!-- Card slide 01 Nicolas -->
            <div class="swiper-slide">
              <div class="slide-cover"></div>
              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-4 sl-bkg-img"></div>

                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">
                    <p class="sl--sub-text">Powerful Women</p>
                    <h2>Lara Croft</h2>
                    <p class="sl--card-content">This powerhouse of strength, smarts, and beauty is not to be trifled with. After the recent reboot of her 20-year-old video game franchise Tomb Raider, Lara is headed to the big screen next year for even greater adventures.</p>
                    <div class="sl--link">LINK</div>
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

            <!-- Card slide 02 Nicolas -->
            <div class="swiper-slide">
              <div class="slide-cover"></div>
              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-5 sl-bkg-img"></div>

                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">
                    <p class="sl--sub-text">Powerful Women</p>
                    <h2>Lara Croft</h2>
                    <p class="sl--card-content">This powerhouse of strength, smarts, and beauty is not to be trifled with. After the recent reboot of her 20-year-old video game franchise Tomb Raider, Lara is headed to the big screen next year for even greater adventures.</p>
                    <div class="sl--link">LINK</div>
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

            <!-- Card slide 03 Nicolas -->
            <div class="swiper-slide">
              <div class="slide-cover"></div>
              <div class="sl-card-wrapper">
                <div class="sl-gradient"></div>
                <div class="sl-img-6 sl-bkg-img"></div>

                <div class="sl--content-wrapper sl--content-wrapper-inactive">
                  <div class="sl--content-container sl--card-hide">
                    <p class="sl--sub-text">Powerful Women</p>
                    <h2>Lara Croft</h2>
                    <p class="sl--card-content">This powerhouse of strength, smarts, and beauty is not to be trifled with. After the recent reboot of her 20-year-old video game franchise Tomb Raider, Lara is headed to the big screen next year for even greater adventures.</p>
                    <div class="sl--link">LINK</div>
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