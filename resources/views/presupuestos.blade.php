@extends('layouts.app')

@section('content')

<!-- Content -->
<article>
  <!-- <header class="section" data-image-src="img/bsp/14.jpg">
    <div class="line text-center">        
      <h1 class="text-white margin-top-bottom-30 text-size-70 text-m-size-40 text-line-height-1 text-thin"><span class="text-white">-</span> Presupuestos <span class="text-white">-</span></h1>
      <p class="margin-bottom-0 text-size-16 text-white">Presupuesta ahora o ten una previsión de las necesidades de tu proyecto. </p>
    </div>  
  </header> -->
  <header class="section" data-image-src="img/bsp/39.jpg">
    <div class="line text-center">
      <h1 class="margin-bottom-40 text-thin text-white text-s-size-30 text-m-size-40 text-size-headline text-line-height-1"><span class="text-white"><b>-</b></span><b> Presupuestos </b><span class="text-white"><b>-</b></span></h1>
      <p class="margin-bottom-0 text-size-20 text-white">
        Anticipa las necesidades de tu proyecto y solicita un presupuesto.
      </p>
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
      <br>
      <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Formulario para Presupuestar</h4>
      <!-- If you want to make a field required, add the "required" class to the input. -->
      <!-- The form e-mail address you can change on file resp-email.php on line 4. -->

      <form name="pptoForm" class="customform needs-validation" action="{{ url('/presupuestos2') }}" method="post" enctype="multipart/form-data" novalidate>
      <!-- <form class="needs-validation" method="post" action="{{ url('/presupuestos2') }}" novalidate enctype="multipart/form-data"> -->
        {{ csrf_field() }}
        <div class="line">
          <div class="margin">
              <div class="s-12 m-12 l-12">
                <input name="nombre" id="nombre" value="{{ old('nombre') }}" class="required name" placeholder="Your name" title="Your name" type="text" />
                <p class="name-error form-error text-white">Please enter your name.</p>
              </div>
              <div class="s-12 m-12 l-12">
              <input name="correo" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" value="{{ old('correo') }}"/>
              <p class="email-error form-error text-white">Please enter your e-mail.</p>
            </div>
            <div class="s-12 m-12 l-12">
              <input name="telefono" class="phone" placeholder="Your phone" title="Your phone" type="text" value="{{ old('telefono') }}"/>
              <p class="phone-error form-error text-white">Please enter your phone.</p>
            </div>


            <h4 class="text-size-20 margin-bottom-20 text-dark text-center">- Datos del Proyecto -</h4>
            <!-- <div class="row"> -->
              <div class="s-12 m-12 l-12">
                <input name="nombreProyecto" class="nombreProyecto" placeholder="Project name" title="Project name" type="text" value="{{ old('nombreProyecto') }}"/>
                <p class="form-error text-white">Please enter your project name.</p>
              </div>
              <div class="s-12 m-12 l-12">
                <input name="ubicacionProyecto" class="ubicacionProyecto" placeholder="Project location" title="Project location" type="text" value="{{ old('ubicacionProyecto') }}"/>
                <p class="name-error form-error text-white">Please enter your project location.</p>
              </div>
              <div class="s-12 m-12 l-12">
                <select name="tipoEstructura" class="structure" id="tipoEstructura" value="{{ old('tipoEstructura') }}">
                  <option value="">Tipo de estructura : </option>
                  <option>Acero / Metálica</option>
                  <option>Concreto / Hormigón</option>
                  <option>Block / Fábrica / Mampostería</option>
                  <option>Mixta</option>
                  <option>Madera</option>
                  <option>Otra</option>
                </select>
              </div>
              <div class="s-12 m-12 l-12">
                <input name="otra" class="" placeholder="Otro tipo de estructura" title="Otra tipología" type="text" value="{{ old('otra') }}"/>
                <p class="name-error form-error text-white">Otra (especificar).</p>
              </div>
              <div class="s-12 m-12 l-12">
                <select name="servicioRequerido" id="servicioRequerido" value="{{ old('servicioRequerido') }}">
                  <option value="">Servicio requerido : </option>
                  <option>diseño estructural</option>
                  <option>revisión</option>
                  <option>consultoría</option>
                  <option>otro</option>
                </select>
              </div>
              <div class="s-12 m-12 l-12">
                <input name="m2Proyecto" class="" placeholder="m2 del proyecto" title="m2 Proyecto" type="text" value="{{ old('m2Proyecto') }}"/>
                <p class="name-error form-error text-white">m2 del proyecto.</p>
              </div>
              <div class="s-12">
                <textarea name="mensaje" class="message" placeholder="Your message" rows="3">{{ old('mensaje') }}</textarea>
                <p class="message-error form-error text-white">Please enter your message.</p>
              </div>
              <div class="s-12 m-12 l-12">
                <input type="file" name="adjuntar" id="adjuntar" placeholder="... seleccione un archivo para adjuntar ...">
              </div>
            <!-- </div> -->
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
            <!-- @if (session('notification'))
              <div class="alert alert-success">
                {{ session('notification') }}
              </div>
            @endif

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif -->





          </div>
        </div>


      </form>












    </div>
  </section>

  <section class="section">
  </section>


</article>

        
@endsection
