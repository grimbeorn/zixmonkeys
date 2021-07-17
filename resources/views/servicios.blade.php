@extends('layouts.app')

@section('content')

<header class="section" data-image-src="img/bsp/5.jpg">
  <div class="line text-center">        
    <!-- <h1 class="text-white margin-top-bottom-30 text-size-70 text-m-size-40 text-line-height-1 text-thin"><span class="text-white">-</span> Servicios <span class="text-white">-</span></h1> -->
    <h1 class="margin-bottom-40 text-thin text-white text-s-size-30 text-m-size-40 text-size-headline text-line-height-1"><span class="text-white"><b>-</b></span> <b>Servicios </b><span class="text-white"><b>-</b></span></h1>
    <p class="margin-bottom-0 text-size-20 text-white">
      Gracias al equipo multidisciplinario (ingenieros y arquitectos ambos con distintos tipos de especialidades) y de amplia experiencia, ofrecemos todos los servicios relacionados con proyectos de construcción.
    </p>
  </div>  
</header>

<section class="section background-white">
  <!-- Section 1 -->
  <!-- <div class="line">
     <h1 class="margin-bottom-40 text-thin text-dark text-s-size-30 text-m-size-40 text-size-headline text-line-height-1">Servicios</h1>
     <p class="text-size-14 s-12 m-12 l-8 margin-bottom-50">
      Gracias al equipo multidisciplinar (ingenieros y arquitectos ambos con distintos tipos de especialidades) y de dilatada experiencia, ofrecemos todos los servicios relacionados con proyectos de construcción.
     <p>
  </div> -->

  <!-- Section 2 - tabs -->
  <div class="line">
    <div class="tabs">
      <!-- Tab 1 -->
      <div class="tab-item tab-active">
        <a class="tab-label active-btn">Proyectos estructurales</a>
        <div class="tab-content lightbox-gallery">
          <div class="margin">
            <div class="s-12 m-12 l-12">
              <section class="section full-width">
                <div class="line">
                  <div class="margin2x">
                    <div class="s-12 m-12 l-6 text-right margin-m-bottom-40">  
                      <h2 class="text-dark text-thin headline text-s-size-40 text-size-50 text-line-height-1 margin-bottom-30">Proyectos de Ingeniería Estructural<br class="hide-m hide-s"> </h2>
                      <p class="text-dark">
                      En kiebitz realizamos proyectos estructurales de gran calidad, orientados siempre a la satisfacción de clientes, constructores y usuarios finales.
                      </p> 
                    </div>
                    <div class="s-12 m-12 l-6">
                      <p class="text-dark text-size-60 text-m-size-50 text-s-size-40 text-extra-strong text-line-height-1">
                      La estructura es el alma de la arquitectura<span class="text-primary">.</span>
                      </p> 
                    </div>
                  </div>  
                </div>    
              </section>
            </div>                 
          </div>
        </div>
      </div>

      <!-- Tab 2 -->
      <div class="tab-item">
        <a class="tab-label">Reformas y remodelación</a>
        <div class="tab-content lightbox-gallery">
          <div class="margin">
            <div class="s-12 m-12 l-12">
              <section class="section full-width">
                <div class="line">
                  <div class="margin2x">
                    <div class="s-12 m-12 l-6 text-right margin-m-bottom-40">  
                      <h2 class="text-dark text-thin headline text-s-size-40 text-size-50 text-line-height-1 margin-bottom-30">Reformas y remodelaciones<br class="hide-m hide-s"> </h2>
                      <p class="text-dark">
                       Remodelar y reformar obras siempre es una labor de detalle y dedicación que en kiebitz realizamos con pasión y sentido constructivo.
                      </p> 
                    </div>
                    <div class="s-12 m-12 l-6">
                      <p class="text-dark text-size-60 text-m-size-50 text-s-size-40 text-extra-strong text-line-height-1">
                      Renovar: crear de nuevo<span class="text-primary">.</span>
                      </p> 
                    </div>
                  </div>  
                </div>    
              </section>
            </div>                  
          </div>
        </div>  
      </div>
      <!-- Tab 3 -->
      <div class="tab-item">
        <a class="tab-label">Recálculos</a>
        <div class="tab-content lightbox-gallery">
          <div class="margin">
            <div class="s-12 m-12 l-12">
              <section class="section full-width">
                <div class="line">
                  <div class="margin2x">
                    <div class="s-12 m-12 l-6 text-right margin-m-bottom-40">  
                      <h2 class="text-dark text-thin headline text-s-size-40 text-size-50 text-line-height-1 margin-bottom-30">Recálculos<br class="hide-m hide-s"> </h2>
                      <p class="text-dark">
                       Realizamos labores de recálculos, habitualmente orientados a la optimización de la estructura. 
                       El abordaje de este tipo de trabajos se hace siempre con miras a que el cliente tenga unas cuantías menores a las presentadas originalmente, de tal manera que se pueda justificar económicamente la inversión en dicho trabajo. Si duda una actividad en la que hace falta la interacción.
                      </p> 
                    </div>
                    <div class="s-12 m-12 l-6">
                      <p class="text-dark text-size-60 text-m-size-50 text-s-size-40 text-extra-strong text-line-height-1">
                      Optimización de la estructura<span class="text-primary">.</span>
                      </p> 
                    </div>
                  </div>  
                </div>    
              </section>
            </div>                  
          </div>
        </div>  
      </div>
      <!-- Tab 4 -->
      <div class="tab-item">
        <a class="tab-label">Fichas Técncias</a>
        <div class="tab-content lightbox-gallery">
          <div class="margin">
            <div class="s-12 m-12 l-12">
              <section class="section full-width">
                <div class="line">
                  <div class="margin2x">
                    <div class="s-12 m-12 l-6 text-right margin-m-bottom-40">  
                      <h2 class="text-dark text-thin headline text-s-size-40 text-size-50 text-line-height-1 margin-bottom-30">Fichas Técnicas<br class="hide-m hide-s"></h2>
                      <p class="text-dark">
                      Asesoramos a las distintas industrias relacionadas con las estructuras, tales como prefabricadores, cerramientos, madera, concreteras, productores de acero y otros materiales (polímeros, cristales) para emitir las fichas técnicas necesarias para sus catálogos de productos.
                      </p> 
                    </div>
                    <div class="s-12 m-12 l-6">
                      <p class="text-dark text-size-60 text-m-size-50 text-s-size-40 text-extra-strong text-line-height-1">
                      Sopoerte para catálogo de productos<span class="text-primary">.</span>
                      </p> 
                    </div>
                  </div>  
                </div>    
              </section>
            </div>                  
          </div>
        </div>  
      </div>
      <!-- Tab 5 -->
      <div class="tab-item">
        <a class="tab-label">Informes</a>
        <div class="tab-content lightbox-gallery">
          <div class="margin">
            <div class="s-12 m-12 l-12">
              <section class="section full-width">
                <div class="line">
                  <div class="margin2x">
                    <div class="s-12 m-12 l-6 text-right margin-m-bottom-40">  
                      <h2 class="text-dark text-thin headline text-s-size-40 text-size-50 text-line-height-1 margin-bottom-30">Informes<br class="hide-m hide-s"></h2>
                      <p class="text-dark">
                      Realizamos levantamientos en sitio para dar parte de manera procedimentada y documentada de estructuras de todo tipo. Para esto trabajamos con un amplio número de proveedores de servicios como topógrafos, laboratorios de calidad, maquinaria y equipo y otros; necesarios para emitir de manera precisa y procesada la información.
                      </p> 
                    </div>
                    <div class="s-12 m-12 l-6">
                      <p class="text-dark text-size-60 text-m-size-50 text-s-size-40 text-extra-strong text-line-height-1">
                      Soporte documental<span class="text-primary">.</span>
                      </p> 
                    </div>
                  </div>  
                </div>    
              </section>
            </div>                  
          </div>
        </div>  
      </div>
      <!-- Tab 6 -->
      <div class="tab-item">
        <a class="tab-label">Asistencia Técnica en Obra</a>
        <div class="tab-content lightbox-gallery">
          <div class="margin">
            <div class="s-12 m-12 l-12">
              <section class="section full-width">
                <div class="line">
                  <div class="margin2x">
                    <div class="s-12 m-12 l-6 text-right margin-m-bottom-40">  
                      <h2 class="text-dark text-thin headline text-s-size-40 text-size-50 text-line-height-1 margin-bottom-30">Asistencia en Obra</h2>
                      <p class="text-dark">
                      Asesoramos en la fase de obra a los distintos proyectos relacionados con las estructuras. 
                      Principalmente para resolver problemas que pudiesen surgir de modificaciones durante el avance de proyectos, interferencias, imprevistos, mejoramientos, etc
                      </p> 
                    </div>
                    <div class="s-12 m-12 l-6">
                      <p class="text-dark text-size-60 text-m-size-50 text-s-size-40 text-extra-strong text-line-height-1">
                      Aliados en la obra<span class="text-primary">.</span>
                      </p> 
                    </div>
                  </div>  
                </div>    
              </section>
            </div>                  
          </div>
        </div>  
      </div>
   </div>

  </div>         
</section>



  

        
@endsection
