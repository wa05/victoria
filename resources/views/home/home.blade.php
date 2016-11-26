@extends('welcome')

<!--@section('title', '| Blog')-->

@section('navleft')
  <nav class="navbar navbar-default">
        <div id="navbar">          
          <ul class="nav navbar-nav"  id="#navbar">
          <li>
            <a href="#victoria">
              <div class="itemout">
                <div class="barraitem"></div>
              </div>
            </a>
          </li>  
          <li>
            <a href="#fotos">
              <div class="itemout">
                <div class="barraitem"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="#noticias">
              <div class="itemout">
                <div class="barraitem"></div>
              </div>
            </a>
          </li>
       
          <li>
            <a href="#videos">
              <div class="itemout">
                <div class="barraitem"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="#fechas">
              <div class="itemout">
                <div class="barraitem"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="#contacto">
              <div class="itemout">
              <div class="barraitem"></div>
            </div>
            </a>
          </li>
        </ul>
      </div><!-- /.nav-collapse  -->
    </nav>
@endsection

@section('content')


<!-- /////////// PORTADA /////////// -->    
           
   <div class="section" id="portada">
       <div class="parallaxportada fullheight">
        <img src="images/logo.png" class="logo img-responsive" alt="logo Victoria Birchner">
       </div>
   </div>    
     
<!-- /////////// Victoria /////////// --> 

   <div class="section" id="victoria">
    <div class="row">
      <div class="col-xs-10 col-md-10 col-md-offset-1">
        <h1 class="heading text-center">Victoria Birchner</h1>
        <p>Nació en Rafaela el 14 de febrero de 1991.
        Inició su camino en la música a los 14 años en la escuela "22 de Noviembre" de su ciudad y egresó tres años después en la especialidad Canto. 
        </p>
        <p>
          Desde el año 2008 hasta comienzos del 2013 conformó el dúo Birchner-Carlini (voz-guitarra) abordando un repertorio de música argentina y latinoamericana, y acercándose además con mucho respeto al tango en repetidas oportunidades.
        </p>
        <p>En 2009 comienza sus estudios de canto lírico en la Escuela Superior de Música de la Universidad Nacional de Rosario, ciudad en la que reside hasta el día de hoy.
En los meses de abril y mayo del 2013 participó de la grabación del disco “Ramita nueva”, homenaje al pianista rafaelino Remo Pignoni.</p>
        <p>En el año 2014 fue ganadora en la sede del pre-Cosquín de Gálvez representando a la ciudad luego en la plaza Próspero Molina y fue seleccionada como una de las tres mejores solistas vocales de la competencia.</p>
        <p>Desde mediados del 2013 Victoria transita su carrera como solista abordando preferentemente la música y la poesía argentina.</p>
        <p>Compartió escenario con músicos como Carlos Aguirre, Fernando Cabrera y Cecilia Todd y cantó junto a reconocidos artistas como Laura Albarracín, Ángela Irene, Roberto Coya Chavero, Juan Falú, Franco Luciani, entre otros.</p>
      </div>
    </div>
   </div>

<!-- /////////// FOTOS /////////// --> 
   <div class="section" id="fotos">
        <div class="row">
            <h1 class="heading text-center" style="color:black">Fotos</h1>
          </div> 
        <div id="fotosdiv">       
         <div class="row">
          <div class="col-md-6 ">
              <img alt="Victoria Birchner 1" src="{{ URL::asset('images/a.jpg') }}" class="img-responsive gale" />
          </div>
          <div class="col-md-3">
              <img alt="Victoria Birchner 3" src="{{ URL::asset('images/d.jpg') }}" class="img-responsive gale" />
          </div>  
          <div class="col-md-3">
              <img alt="Victoria Birchner 2" src="{{ URL::asset('images/f.jpg') }}" class="img-responsive gale" />
          </div> 
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
              <img alt="Victoria Birchner s" src="{{ URL::asset('images/e.jpg') }}" class="img-responsive gale chicas" />
              </div>
              <div class="col-md-6">
              <img alt="Victoria Birchner con Fandermole" src="{{ URL::asset('images/fander.jpg') }}" class="img-responsive gale chicas" />
              </div>
            </div>
          </div>  
          <div class="col-md-3">         
              <img alt="Victoria Birchner hoy" src="{{ URL::asset('images/b.jpg') }}" class="img-responsive gale chicas"/>
          </div> 
          <div class="col-md-3">
              <img alt="Victoria Birchner con Da Silva" src="{{ URL::asset('images/dasilva.jpg') }}" class="img-responsive gale dasil" />
          </div>  
        <div class="col-md-2 col-md-offset-10">     
        <a href="/fotos">
        </a>
        </div>  
            <button class="btn link" type="button"><a href="/fotos">Ver mas fotos de Victoria</a></button>
        </div>
     </div>
  </div>     
<!-- /////////// NOTICIAS /////////// -->        
       <div class="section" id="noticias">
          <h1 class="heading text-center" style="color:black">Novedades de Victoria Birchner</h1>
          <div class="row">
            @foreach($posts as $post)
                    <div class="col-md-4  col-xs-12 col-sm-6">
                      <div class="noti">
                <a href="{{ route('blog.single', $post->slug) }}">
                <img src="{{ asset('images/' . $post->image )}}" class="img-responsive cardimg">
                </a>
                
                        <h3 class="text-center notititle" style="font-weigth:bolder;"> <b> {{ substr(strip_tags($post->title), 0, 105)}} </b> 
                <p class="small">{{ substr(strip_tags($post->subtitle), 0, 195)}}</p> </h3>
                        
                      </div>
                    </div>
            @endforeach

             <!--
            <div class="col-md-4">
              <div class="noti">
                <h3 class="text-center">“Mi andar es transitar el sendero siempre en busca de un objetivo”</h3>
                <img alt="Victoria Birchner bf entrevista" src="{{ URL::asset('../images/bf.jpg') }}" class="img-responsive cardimg">
                <p class="small text-center">Nota en BF Entrevistas</p>
                
                <button class="btn btn-block"><a href="/novedades/not4">Ver mas</a></button>
                
              </div>
            </div>
            <div class="col-md-4">
              <div class="noti">
                <h3 class="text-center">Presentacion en Telefe</h3>
                <img alt="Victoria Birchner en programa Morfi" src="{{ URL::asset('../images/morfi.jpg') }}" class="img-responsive cardimg">
                <p class="small text-center">Programa "Morfi" del 26/08/2016</p>
                
                <button class="btn btn-block"><a href="/novedades/not1">Ver mas</a></button>
                
              </div>
            </div>
            <div class="col-md-4">
              <div class="noti">
                <h3 class="text-center">Una artista que se abre camino</h3>       
                <img alt="Victoria Birchner en Portal Vos" src="{{ URL::asset('../images/portalvos.jpg') }}" class="img-responsive cardimg">
                <p class="small text-center">"Portal VOS" conversó de forma exclusiva con Victoria Birchner...</p>    
              </div>
              
              <button class="btn btn-block"><a href="/novedades/not2">Ver mas</a></button>
                
            </div>

          -->
          </div>
      </div>
       
<!-- /////////// VIDEOS ///////////-->
      
        
       <div class="section" id="videos">

    <h2 class="heading text-center" style="color:black">Videos</h2>
          <div class="row">
            <div class="col-md-12">
              <iframe class="show" src="https://www.youtube.com/embed/iVsY18yuPJA" id="show" name="show">
              </iframe>
                  
            </div>
          </div>
          
           
           
           
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="row">
          <div class="col-xs-12 col-xs-offset-1">
            <div class="row videosx">
            <div class="col-xs-12 col-sm-2 vid">
              <a href="https://www.youtube.com/embed/lNBICcScH8s" target="show">
                
              <img alt="Victoria Birchner  video1" src="https://i.ytimg.com/vi/lNBICcScH8s/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=Vs7Vpn7oJmeWM4lq18beQWhZr9M">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2 vid">
              <a href="https://www.youtube.com/embed/rNGWP9NRVQk" target="show">
                
              <img alt="video2 Victoria Birchner " src="https://i.ytimg.com/vi/rNGWP9NRVQk/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=zBMhs59D5NmaTS-izect6NLwQIU">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2 vid">

              <a href="https://www.youtube.com/embed/dJ8wW7nXYpQ" target="show">
                
              <img alt="Victoria Birchner  video3" src="https://i.ytimg.com/vi/dJ8wW7nXYpQ/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=gt6QzN87dyEgcgvkhlNzBQzPA78">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2 vid">
              <a href="https://www.youtube.com/embed/zdnRmd1GDVU" target="show">
                
              <img alt="video4 Victoria Birchner " src="https://i.ytimg.com/vi/zdnRmd1GDVU/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=nHrP7low66ky2un05DjxcOPKji4">
              </a>
            </div>

            <div class="col-xs-12 col-sm-2 vid">
              
              <a href="https://www.youtube.com/embed/iVsY18yuPJA" target="show">             
              <img alt="Victoria Birchner video5" src="https://i.ytimg.com/vi/iVsY18yuPJA/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=3-CZXyNc7vT0WaEcKMiWH9g4Wpw">
              </a>
            </div>
          </div>  
          </div>
    </div>
  </div>
      
</div>
           
       </div>
           
       </div>
       
<!-- /////////// FECHAS /////////// -->
       
<div class="section" id="fechas">
  <!--
    <h2 class="heading text-center" style="color:black">Próximas fechas de Victoria</h2>
    <div class="row">  
            <div class="col-xs-6 col-md-4 text-center"> Fecha </div>
            <div class="col-xs-6 col-md-4 text-center"> Lugar </div>
    </div> 
    -->  
 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


    



<div class="section">
    <h2 class="heading text-center" style="color:black">Fechas Anteriores</h2>
    <div class="row">  
                <div class="col-xs-6 col-md-4 text-center"> Fecha </div>
                <div class="col-xs-6 col-md-4 text-center"> Lugar </div>
            </div>   
 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <div class="row">  
                <div class="col-xs-6 col-md-3 text-center">15 de Septiembre</div>
                <div class="col-xs-6 col-md-6 text-center">Rosario - "Sueñero" en VIVO en Sala Lavardén.</div>
                <div class="hidden-xs col-md-3 text-center"> Ver mas ... </div>
            </div>    
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <img src="{{ URL::asset('/images/suenero.jpg') }}" class="img-responsive" width="100%">
          </div>

          <div class="col-md-6 col-xs-12">
            <h3>Sueñero en Vivo</h3>
            <p class="sue">En el mes de septiembre Marcelo Nocetti tendrá de invitado en la mesa de Sueñero en vivo a Eduardo Spinassi. 
Pianista, arreglador, portador de un estilo propio y distintivo. Integrante de un fundamental trio junto a Raul Carnota y Rodlfo Sanchez. Pianista de de Cuty y Roberto Carabajal y por diez años acompañó a Soledad Pastorutti por todos los escenarios que ha recorrido. 
Heredero de una escuela familiar, con su tio Tucho y su tia Hilda Herrera hoy representa un estilo personal y único entre los pianistas de nuestra musica popular.
El próximo jueves 15 de septiembre nos encontraremos con Eduardo Spinassi para charlar y conocer algo mas de su historia y de su musica.
<b> En la previa: Victoria Birchner adelantando algunas cositas de su reciente material discográfico.</b>
Como siempre, la entrada es libre y gratuita y pueden retirarla en la boleteria del teatro. Horario de atención: de lunes a viernes de 10 a 13 y de 16 a 20 h. Sábados de 10 a 13 h. Y desde 2 horas antes de cada espectáculo programado. Teléfono: (0341) 4721132 int. 170.
<br>

  <a href="https://www.facebook.com/events/1112326498846388/" target="_blank"><button class="btn btn-block"><b> Ver evento </b></button></a>
</p>

          </div>

        </div>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <div class="row">  
                <div class="col-xs-6 col-md-3 text-center"> 22 de Septiembre - 19:30 hs</div>
                <div class="col-xs-6 col-md-6 text-center">Rosario - Centro Cultural de la Cooperación </div>
                <div class="hidden-xs col-md-3 text-center"> Ver mas... </div>
            </div>    
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        
 <div class="row">
          <div class="col-md-6 col-md-offset-3" >
            <img class="img-responsive eventfoto" src="{{ URL::asset('images/musicaparatodos.jpg') }}"></img>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="panel panel-default" itemscope itemtype="http://schema.org/Event">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <div class="row" >  
                <div class="col-xs-6 col-md-3 text-center"><time itemprop="startDate" datetime="2016-10-01"></time> 1 de Octubre <time itemprop="endDate" datetime="2016-10-01"></time></div>
                <div class="col-xs-6 col-md-6 text-center"> Rafaela - Teatro Lasserre <br> <b><span itemprop="name">Presentación del disco "Memoria del Viento"</span></b> </div>
                <div class="hidden-xs col-md-3 text-center"> Ver mas... </div>
          </div>    
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        
        <div class="row">
          <div class="col-xs-12 col-md-6 col-md-offset-3" >
            <img class="img-responsive eventfoto" src="images/laserre.jpg" alt="Victoria Birchner en teatro Laserre"></img>
            <p class="sue"><span itemprop="description">La Asociación Cultural Otras Voces y el Centro Ciudad de Rafaela informan que el Sábado 1 de Octubre a las 21:30 horas continuará el Ciclo de Música Popular 2016 con el recital de la cantante <b> Victoria Birchner </b> quien presentará su primer cd como solista “Memoria del Viento” en el Teatro Lasserre.- </span><br>
El disco fue grabado con los músicos José “Chey” Ramos en guitarra y arreglos, Leo Pretto en guitarra y Franco Ochat en percusión contando además con la participación de Juan Falú, Jorge Fandermole, Eduardo Spinassi, Angela Irene y Franco Luciani entre otros. El álbum fue grabado en el estudio Blue Room de la ciudad de Rosario; la mezcla y la masterización fueron realizadas por los reconocidos técnicos Jorge “Portugués” Da Silva y Osvel Costa. <br>
Victoria inicia su camino en la música en la “Escuela Técnica de Capacitación Musical 22 de Noviembre" de nuestra ciudad en la especialidad Canto. Desde el año 2008 hasta comienzos del 2013 conforma el dúo Birchner-Carlini. En 2009 comienza sus estudios en la escuela de música de la Universidad Nacional de Rosario, ciudad en la que reside hasta el día de hoy.
En 2013 participó de la grabación del disco homenaje a Remo Pignoni junto a los músicos Rubén Carlini (guitarra) y José Ignacio Perren (piano).<br>
Desde mediados del 2013 transita su carrera como solista abordando la música y la poesía argentina y cantó junto a reconocidos artistas como Laura Albarracín, Roberto Coya Chavero, Juan Falú y Franco Luciani, entre otros.<br>
En la presentación en vivo contará con la presencia de los invitados Franco Luciani en armónica, Melania Yossen en violín, Marcelo Actis en contrabajo y Gabriel Vallejos en acordeón.-
Las entradas anticipadas con un valor de $100,00, para los asociados a las instituciones organizadoras y jubilados de $80,00 y para los estudiantes de música de $60,00 se encuentran a la venta en el Teatro Lasserre, la Escuela Municipal de Música Remo Pignoni, la Escuela 22 de Noviembre que funciona en el Sindicato de Músicos, en Casa Marcucci Música, Jalito Tiempo de café y amigos, Faber Libros y en la sede de la C.T.A. Castellanos de Tucumán y San Martín. En el momento del espectáculo la entrada general costará $120,00.-<br>
Esta actividad se realiza con el aporte de la Comisión Municipal para la Promoción de la Cultura y el Ministerio de Innovación y Cultura de la Provincia de Santa Fe.-<br>
<br>
 
    <div itemprop="location" itemscope itemtype="http://schema.org/Place">
        <span itemprop="name">Teatro Laserre</span>
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">Bv. Lehmann 228</span> -
            <span itemprop="addressLocality">Rafaela</span> -
            <span itemprop="addressRegion">Santa Fe</span> 
        </div>
    </div>


  <button class="btn btn-block"><b> <a href="https://web.facebook.com/events/1260434217314401/" target="_blank">Ver evento </a></b></button>
</p>
          </div>
        </div>

      </div>
    </div>
  </div><!--end of panel default-->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          

            <div class="row" >  
                <div class="col-xs-6 col-md-3 text-center"><time itemprop="startDate" datetime="2016-10-15"></time>Sabado 15 de Octubre <time itemprop="endDate" datetime="2016-10-15"></time></div>
                <div class="col-xs-6 col-md-6 text-center"> Sunchales - Auditorio CET ATILRA <br> <span itemprop="name"><b>Presentación del disco "Memoria del Viento"</b> </span></div>
                <div class="hidden-xs col-md-3 text-center"> Ver mas... </div>
          </div> 

       </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        <div class="row">
          <div class="col-xs-12 col-md-6 col-md-offset-3">
            <img class="img-responsive eventfoto" src="images/sunchales.jpg" alt="Victoria Birchner en Sunchales"></img>
            <p class="sue"><span itemprop="description"></span>
              </p>
        <div class="itemp" itemprop="location" itemscope itemtype="http://schema.org/Place">
            <span itemprop="name">AUDITORIO CET ATILRA</span>
          <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">Ruta Nac 34 Km 262</span> -
            <span itemprop="addressLocality">Sunchales</span> -
            <span itemprop="addressRegion">Santa Fe</span> 
          </div>
        </div>
<!--  <button class="btn btn-block"><b> <a href="https://web.facebook.com/events/1260434217314401/" target="_blank">Ver evento </a></b></button>-->
       </div>
    </div>
  </div>
  </div>
    </div><!--end of panel-default-->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <div class="row">  
                <div class="col-xs-6 col-md-3 text-center"> 28 de Octubre </div>
                <div class="col-xs-6 col-md-6 text-center"> Rosario - Biblioteca Argentina <br> <b>Presentación del disco "Memoria del Viento"</b> </div>
                <div class="hidden-xs col-md-3 text-center"> Ver mas... </div>
            </div>    
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        </div>
    </div>
  </div><!--end of panel-default-->
  
</div>  
  
</div>       
</div>
</div>
<!-- /////////// CONTACTO /////////// -->  
      
   <div class="section" id="contacto">

       <div class="row">
        <div class="col-md-4 col-md-offset-1">
          <div class="color">  
          
                    <h2>Contacto</h2>
                <form action="{{ url('/') }}" method="POST" class="form">
            
          {{ csrf_field() }}
                  <div class="form-group">
                    <label name="nombre">Nombre</label>
                    <input name="nombre" class="form-control" id="nombre" type="text" required placeholder="Nombre:">
                  </div>

                  <div class="form-group">
                    <label name="email">E-mail:</label>
                    <input name="email" class="form-control" id="e-mail" type="email" required placeholder="E-mail:">
                  </div>

                  <div class="form-group" style="align:right">
                    <label name="comentario">Mensaje:</label>
                    <textarea name="comentario" class="form-control" rows="3" id="comentario" type="text"  placeholder="Comentario:" required></textarea>
                  </div>                   
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                  <button class="btn linkform" style="background-color:white; color:#009688;" type="submit">Enviar</button>
                </form>
                    
        </div>        
      </div>
    
       
       
       
         <div class="col-md-3 col-md-offset-1">
          <!-- SnapWidget -->
<!-- SnapWidget -->
<iframe src="https://snapwidget.com/embed/code/192820" class="snapwidget-widget" frameborder="1" scrolling="yes" style="margin-top:30px;border:none; overflow:auto; width:100%;"></iframe>
         </div>

         <div class="col-md-3 fbpage">

          <div class="fb-page" data-href="https://www.facebook.com/VictoriaBirchner" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/VictoriaBirchner" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/VictoriaBirchner">Victoria Birchner</a></blockquote></div>
         </div>
        
  </div>
  </div>


@endsection