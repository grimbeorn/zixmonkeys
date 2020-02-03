@extends('layouts.app')

@section('content')

<!-- Content -->
<article>
  <header class="section" data-image-src="img/parallax-01.jpg">
    <div class="line text-center">        
      <h1 class="text-dark margin-top-bottom-30 text-size-70 text-m-size-40 text-line-height-1 text-thin"><span class="text-dark">-</span> Presupuestos <span class="text-dark">-</span></h1>
      <p class="margin-bottom-0 text-size-16 text-dark">Presupuesta ahora o ten una previsión de las necesidades de tu proyecto. </p>
    </div>  
  </header>
  
  <section class="full-width background-white">
    <!-- <div class="s-12 m-12 l-4">
      <div style="background-image: url(img/img-contact.jpg);" class="contact-image" ></div>
    </div> -->
    <!-- <div class="s-12 m-12 l-6 text-center">
      <div class="padding-2x">
        <i class="icon-sli-location-pin text-dark text-size-30 center"></i>
        <h2 class="text-size-20 margin-bottom-0 text-dark">Company Address</h2>                
        <p>Aviation Way 99</p>
        <p>Los Angeles</p>
        <p>USA</p>
        <i class="icon-sli-envelope text-dark text-size-30 center margin-top-20"></i>
        <h2 class="text-size-20 margin-bottom-0 text-dark">E-mail</h2>                
        <a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a><br>
        <a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a>
        <i class="icon-sli-earphones-alt text-dark text-size-30 center margin-top-20"></i>
        <h2 class="text-size-20 margin-bottom-0 text-dark">Phone Numbers</h2>                
        <p>0800 4521 800 50</p>
        <p>0450 5896 625 16</p>
        <p>0798 6546 465 </p>
      </div>
    </div> -->
    <div class="s-12 m-12 l-5 center">
      <!-- MAP section - change latitude, longitude and zoom data (get the latitude and the longitude from google maps) -->
      <!-- <div data-latitude="33.8718108" data-longitude="-118.380636" data-icon_width="220" data-icon_height="98" data-zoom="12" id="map"></div> -->
      <br><br><br><br>
      <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Formulario para Presupuestar</h4>
      <!-- If you want to make a field required, add the "required" class to the input. -->
      <!-- The form e-mail address you can change on file resp-email.php on line 4. -->
      <form name="contactForm" class="customform ajax-form" method="post" enctype="multipart/form-data">
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-6">
              <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
              <p class="email-error form-error text-white">Please enter your e-mail.</p>
            </div>
            <div class="s-12 m-12 l-6">
              <input name="name" class="name" placeholder="Your name" title="Your name" type="text" />
              <p class="name-error form-error text-white">Please enter your name.</p>
            </div>
          </div>
        </div>                     
        <div class="line">       
          <div class="s-12">
            <input name="subject" class="required subject" placeholder="Subject" title="Subject" type="text" />
            <p class="subject-error form-error text-white">Please enter your subject.</p>
          </div>
          <div class="s-12">
            <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
            <p class="message-error form-error text-white">Please enter your message.</p>
          </div>
          <div class="s-12">
            <input type="file" name="file[]" />                    
          </div>
          <!-- full-name-field is hidden antirobot field -->
          <input name="full-name-field" type="text" id="full-name-field" class="full-name-field" />
          <div class="s-12"><a class="captcha-button text-white background-dark margin-bottom"><span class="not-a-robot-icon"><i class="icon-check text-green"></i></span> <span class="not-a-robot-text">I'm not a robot</span></a></div> 
          <!-- The submit button text you can edit in the file validation.sj on the line 8. -->
          <div class="s-12 button-parent"></div>
          <div class="line">
            <p class="mail-success form-success text-white">Your message has been sent successfully.</p>
            <p class="mail-fail form-error text-white">Sorry, error occured this time sending your message.</p>
          </div>
        </div>    
      </form>
    </div>
  </section>

  <section class="section">
  </section>


</article>

        
@endsection
