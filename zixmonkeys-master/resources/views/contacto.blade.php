@extends('layouts.app')

@section('content')

<main role="main">
  <!-- Content -->
  <article>
    <!-- <header class="section" data-image-src="img/bsp/37.jpg">
      <div class="line text-center">        
        <h1 class="text-white margin-top-bottom-30 text-size-70 text-m-size-40 text-line-height-1 text-thin"><span class="text-white">-</span> Contacto <span class="text-white">-</span></h1>
        <p class="margin-bottom-0 text-size-16 text-dark"></p>
      </div>  
    </header> -->
    <header class="section" data-image-src="img/bsp/37.jpg">
      <div class="line text-center">
        <h1 class="margin-bottom-40 text-thin text-white text-s-size-30 text-m-size-40 text-size-headline text-line-height-1"><span class="text-white"><b>-</b></span><b> Contacto </b><span class="text-white"><b>-</b></span></h1>
        <!-- <p class="margin-bottom-0 text-size-20 text-white">
          Anticipa las necesidades de tu proyecto y solicita un presupuesto.
        </p> -->
      </div>  
    </header>
    
    <section class="full-width background-white">
      <!-- <div class="s-12 m-12 l-4">
        <div style="background-image: url(img/img-contact.jpg);" class="contact-image" ></div>
      </div> -->
      <div class="s-12 m-12 l-6 text-center">
        <div class="padding-2x">
          <i class="icon-sli-location-pin text-dark text-size-30 center"></i>
          <h2 class="text-size-20 margin-bottom-0 text-dark">Ubicación</h2>                
          <p>Ciudad de México, México<br>
          Querétarofdsfs, México<br>
          Galiciaaa, España</p>
          <i class="icon-sli-envelope text-dark text-size-30 center margin-top-20"></i>
          <h2 class="text-size-20 margin-bottom-0 text-dark">Correo</h2>
          <p>hello@zixmonkeys.com</p>                
          <!-- <a class="text-primary-hover" href="mailto:contact@zixmonkeys.com">contact@zixmonkeys.com</a><br>
          <a class="text-primary-hover" href="mailto:office@zixmonkeys.com">office@zixmonkeys.com</a> -->
          <i class="icon-sli-earphones-alt text-dark text-size-30 center margin-top-20"></i>
          <h2 class="text-size-20 margin-bottom-0 text-dark">Teléfono</h2>                
          <p>+52 442 128 1369</p>
        </div>
      </div>
      <div class="s-12 m-12 l-5">
        <!-- MAP section - change latitude, longitude and zoom data (get the latitude and the longitude from google maps) -->
        <!-- <div data-latitude="33.8718108" data-longitude="-118.380636" data-icon_width="220" data-icon_height="98" data-zoom="12" id="map"></div> -->
        <br><br><br><br>
        <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Formulario de Contacto</h4>
        <!-- If you want to make a field required, add the "required" class to the input. -->
        <!-- The form e-mail address you can change on file resp-email.php on line 4. -->
        
        <form name="contactForm" class="customform needs-validation" action="{{ url('/contact2') }}" method="post" enctype="multipart/form-data" novalidate>
          {{ csrf_field() }}
          <div class="line">
            <div class="margin">
              <div class="s-12 m-12 l-6">
                <input id="email" name="email" value="{{ old('email') }}" class="required email" placeholder="correo" title="Your e-mail" type="text" required/>
              </div>
              <div class="s-12 m-12 l-6">
                <input id="name" name="name" value="{{ old('name') }}" class="name" placeholder="nombre" title="Your name" type="text" />
              </div>
            </div>
          </div> 
          <div class="line">       
            <div class="s-12">
              <textarea id="message" name="message" class="required message" placeholder="mensaje" rows="5" cols="50" type="text" required>{{ old('message') }}</textarea>
            </div>
            <!-- full-name-field is hidden antirobot field -->
            <input name="full-name-field" type="text" id="full-name-field" class="full-name-field" />
            <div class="s-12">
              <div class="g-recaptcha" data-sitekey="6LcTaNUUAAAAAOnKCPKEP7MqxDcZVn_sr_cV2JQ2"></div><br>
            </div> 
            <div class="s-12 button-parent">
              <button class="submit-form button border-radius text-white background-primary" type="submit">Enviar</button>
            </div>
            @if (session('notification'))
              <div class="line">
                <p class="padding background-green text-white s-12">{{ session('notification') }}</p>
              </div>
              @endif
              @if ($errors->any())
              <div class="padding background-red text-white s-12">
                <p class="mail-fail form-error">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </p>
              </div>
              @endif
          </div>    
        </form>

      </div>
    </section>

  </article>
</main>
        
@endsection
