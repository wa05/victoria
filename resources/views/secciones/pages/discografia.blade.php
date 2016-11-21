@extends('secciones.main')

@section('title', "| Discografia")

@section('metas')
  <meta name="description" content="Discografia de Victoria Birchner" />
@endsection

@section('styles')
	<style type="text/css">
	
	</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css" />
@endsection

@section('contentblog')
    <div class="col-md-9">
        <h1 class="heading">Discografía</h1>
              <div class="row">
                <div class="col-xs-12 col-sm-5 col-sm-offset-2 pull-left">
                  
                  <h3><b>Memoria del viento - 2016</b></h3>
                        <p>
                        Victoria Birchner - Voz <br>
                        Jose "Chey" Ramos - Guitarra y Arreglos <br>
                        Leo Pretto - Guitarra <br>
                        Franco Ochat - Percusión <br> 
                        </p>
                </div>  
                  <div class="col-xs-12 col-sm-5 col-sm-offset-2 pull-left">

                    <a href="{{ URL::asset('images/cd2big.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Memoria del Viento">
                <img class="cd cda img-responsive" src="{{ URL::asset('images/cd2.jpg') }}  ">
              </a>

                    
                  </div>
                  <div class="col-xs-12 col-sm-5 pull-right">
                    <a href="{{ URL::asset('images/cd1big.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Memoria del Viento">
                    <img class="cd img-responsive" src="{{ URL::asset('images/cd1.jpg') }}">
                  </a>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-xs-12 col-sm-9 col-sm-offset-2">
                    <table class="table">
                      <thead>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                         <b>Memoria del Viento </b>(Franco Luciani / Alejandro Szwarcman) <i><b>Inedito</i> </b>
                          <br>
                          Invitado: Franco Luciani
                        </td>
                        </tr>
                        <tr>
                          <td>
                         <b>Ay, si la vieras </b>(Juan Miguel Bustos / Damián Sanchez)<br>
                          Invitado: Manu Navarro
                        </td>
                        </tr>
                        <tr>
                          <td>
                         <b>El Tímido </b>
                         (Raúl Carnota)<br>
                         Invitado: Eduardo Spinassi
                        </td>
                        </tr>
                        <tr>
                          <td>
                         <b>Zamba del Chaguanco </b>
                         (Hilda Herrera / Antonio Nella Castro)<br>
                          </td>
                        </tr>
                        <tr>
                          <td>
                         <b>Donata Suárez </b>
                         (Juan Falú / Carlos Herrera)<br>
                         Invitado: Juan Falú
                        </td>
                        </tr>
                        <tr>
                          <td>
                         <b>Lavandera Chaguanca </b>
                         (Néstor Soria / Lucho Hoyos / Alejandro Carrizo)<br>Invitado: Eduardo Spinassi
                        </td>
                        </tr>
                        <tr>
                          <td>
                         <b>Tarumba </b>
                         (Teresa Parodi)<br>Invitado:
                         Invitado: Gabriel Vallejos
                        </td>
                        </tr>
                        <tr>
                          <td>
                         <b>La Sensiblera </b>
                         (Franco Luciani/ Alejandro Szwarcman)<br>
                         Invitado: Melania Yossen / Diego Rada
                          </td>
                        </tr>
                        <tr>
                          <td>
                         <b>Allá Lejos y Hace Tiempo </b>
                         (Ariel Ramírez / Armando Tejada Gómez)<br>Invitado:
                         Ángela Irene / Manu Navarro / Franco Luciani
                        </td></tr>
                        <tr>
                          <td>
                         <b>Por el Rio Volveré </b>
                         (Teresa Parodi)<br>Invitado:
                         Franco Luciani
                        </td></tr>
                        <tr>
                          <td>
                         <b>Destino del Canto </b>
                         (Atahualpa Yupanqui)<br>Invitado:
                         Sergio Coppoli
                        </td></tr>
                        <tr>
                          <td>
                         <b>Los ejes de mi Carreta </b>
                         (Atahualpa Yupanqui / Romildo Risso)
                          
                        </td></tr>
                        <tr>
                          <td>
                         <b>Bailantas Chamameceras </b>
                         (Raúl Barboza / Adolfo Cristaldo)<br>Invitado:
                         GabriInvitado:el Vallejos
                        </td></tr>
                        <tr>
                          <td>
                         <b>Pastor de Nubes </b>
                         (Fernando Portal / Manuel J- Castilla)<br>Invitado:
                         Manu Navarro
                        </td></tr>
                        <tr>
                          <td>
                         <b>Canto Versos </b>
                         (Jorge Fandermole)<br>Invitado:
                         Jorge Fandermole / Diego Rada / José Gago
                        </td></tr>
                        <tr>
                          <td>
                         <b>Venme a Buscar </b>
                          (Henry Martinez)<br>Invitado:
                         Manu Navarro
                        </td></tr>

                      </tbody>
                    </table>
                  </div>                 
              </div> <hr/>
              <div class="row">
                  <div class="col-md-6">
                    <img class="cd cda img-responsive" src="{{ URL::asset('images/cd3.jpg') }}">
                  </div>
                  <div class="col-md-6">
                    <img class="cd img-responsive" src="{{ URL::asset('images/cd4.jpg') }}">

                  </div> 
                
                  <p class="text-center"><i>2013</i> </p>               
              </div>
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li><a href="../">Inicio</a></li>
           <li class="active">Discografia</li> 
        </ul>
      </div>
	
	</div>

@endsection

@section('scriptsdos')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>
@endsection