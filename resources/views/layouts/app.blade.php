<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZixMonkeys - Ingeniería Estructural</title>
    <link rel="shortcut icon" type="image/png" href="favicon.PNG">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script> 
    <script type="text/javascript" src="js/validation.js"></script>      
  </head>
  
  <!--
  You can change the color scheme of the page. Just change the class of the <body> tag. 
  You can use this class: "primary-color-white", "primary-color-yellow", "primary-color-red", "primary-color-orange", "primary-color-pink", "primary-color-purple", "primary-color-blue", "primary-color-light-blue", "primary-color-aqua", "primary-color-green", "primary-color-dark" 
  -->
  
  <!--
  Each element is able to have its own background color, text color or border color. Just change the class of the element.  
  You can use this class: 
  "background-white", "background-yellow", "background-red", "background-orange", "background-pink", "background-purple", "background-blue", "background-light-blue", "background-aqua", "background-green", "background-grey", "background-sand",  "background-primary" 
  "text-white", "text-yellow", "text-red", "text-orange", "text-pink", "text-purple", "text-blue", "text-light-blue", "text-aqua", "text-green", "text-primary"
  "border-white", "border-yellow", "border-red", "border-orange", "border-pink", "border-purple", "border-blue", "border-light-blue", "border-aqua", "border-green", "border-primary"
  -->
  
  <!-- 
  If you want animated elements after scroll, add class "animated-element" or "animated-element slow" (for slower animation) to the elements.
  -->
  <body class="size-1140 primary-color-orange">
    <!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
    <div id="page-overlay" class="background-white"></div>
    
    <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            <a href="/" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="img/monkey_005.png" alt="" >
              <!-- <img class="logo-before" src="img/logo-dark.png"> -->
              
              <!-- Logo version after sticky nav -->
              <!-- <img class="logo-after" src="img/logo-dark.png"> -->
              <img class="logo-after" src="img/monkey_005.png" alt="" >


            </a>
          </div>
          <div class="s-12 l-10">
            <div class="hide-s hide-m right">
              <p class="nav-button"></p>
            </div>
            <div class="top-nav right">
              
              <ul class="right chevron">
                <li><a href="/zixmonkeys">ZixMonkeys</a></li>
                <li><a href="/proyectos">Proyectos</a></li>
                <li><a href="/servicios">Servicios</a></li>
                <li><a href="/presupuestos">Presupuestos</a></li>               
                <li><a href="/contacto">Contacto</a></li>
              </ul>
            </div>
          </div>  
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">    
        @yield('content')
      </main>
      
      <!-- FOOTER -->
      <footer>

        <!-- Contact Us -->
        <div class="background-dark padding text-center footer-social">
          <a class="margin-right-10" target="_blank" href="https://www.facebook.com"><i class="icon-facebook_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">FACEBOOK</span></a>
          <a class="margin-right-10" target="_blank" href="https://www.twitter.com"><i class="icon-twitter_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">TWITTER</span></a>
          <a class="margin-right-10" target="_blank" href="https://www.instagram.com"><i class="icon-instagram_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">INSTAGRAM</span></a>
          <a target="_blank" href="https://www.linkedin.com"><i class="icon-linked_in_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">LINKEDIN</span></a>                                                                         
        </div>

        <!-- Images -->
        <!-- <section class="full-width">
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/bsp/11.jpg">
              <img src="img/bsp/11_002.jpg" alt="">
            </a>
          </div>
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/proyectos/1_2.jpg">
              <img src="img/portfolio/thumb-02.jpg" alt="">
            </a>
          </div>
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/proyectos/ff2.jpg">
              <img src="img/portfolio/thumb-03.jpg" alt="">
            </a>
          </div>
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/proyectos/gg3.jpg">
              <img src="img/portfolio/thumb-04.jpg" alt="">
            </a>
          </div>
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/proyectos/6_3.jpg">
              <img src="img/portfolio/thumb-05.jpg" alt="">
            </a>
          </div>
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/proyectos/4.jpg">
              <img src="img/portfolio/thumb-06.jpg" alt="">
            </a>
          </div>
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/proyectos/cc11.jpg">
              <img src="img/portfolio/thumb-07.jpg" alt="">
            </a>
          </div>
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/proyectos/DSCF0120.jpg">
              <img src="img/portfolio/thumb-08.jpg" alt="">
            </a>
          </div>
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/proyectos/2_5.jpg">
              <img src="img/portfolio/thumb-09.jpg" alt="">
            </a>
          </div>
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/proyectos/03.jpg">
              <img src="img/portfolio/thumb-10.jpg" alt="">
            </a>
          </div>
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/proyectos/4_5.jpg">
              <img src="img/portfolio/thumb-11.jpg" alt="">
            </a>
          </div>
          <div class="s-4 m-3 l-1">
            <a class="image-with-hover-overlay image-hover-zoom" data-rel="lightcase:portfolio" href="img/proyectos/4_13.jpg">
              <img src="img/portfolio/thumb-12.jpg" alt="">
            </a>
          </div>
        </section> -->
               
        <!-- Main Footer -->
        <section class="section-small-padding text-center background-dark full-width">
          <div class="line">
            <div class="margin">
              <!-- Collumn 1 -->              
              <div class="s-12 m-12 l-3 margin-m-bottom-30">
                <h3 class="text-size-16">Dirección</h3>
                <p class="text-size-14">
                  Estado de México, México<br>
                </p>
                <p class="text-size-14">
                   A Coruña, España<br>
                </p>                
              </div>
              <!-- Collumn 2 -->
              <div class="s-12 m-12 l-3 margin-m-bottom-30">
                <h3 class="text-size-16">Correo</h3>
                <p class="text-size-14">
                   proyectos@zixmonkeys.com
                </p>              
              </div>
              <!-- Collumn 3 -->
              <div class="s-12 m-12 l-3 ">
                <h3 class="text-size-16">Teléfono</h3>
                <p class="text-size-14">
                   +34 655 715 199<br>
                </p>             
              </div>
              <div class="s-12 m-12 l-3 ">
                <h3 class="text-size-16">Trabaja con Nosotros</h3>
                <p class="text-size-14">
                   Mándanos un correo a:<br>
                   contacto@zixmonkeys.com
                </p>             
              </div>
            </div>
          </div>  
        </section>
        <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.80);">
        
        <!-- Bottom Footer -->
        <section class="padding background-dark full-width">
          <div class="text-center">
            <p class="text-size-12">Copyright 2019, Vision Design - Orange Code</p>
            <p class="text-size-12">Do not use the images in your website.</p>
          </div>
        </section>
      </footer>
    </div>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
    <script type="text/javascript">
      // typed
      $(function(){
        $("#typed").typed({
            stringsElement: $('#typed-strings'),
            typeSpeed: 80,
            backDelay: 3000,
            loop: true,
            contentType: 'text',
            loopCount: false,
        });
      });
    </script>
  </body>
</html>