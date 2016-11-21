@extends('backpack::layout')

@section('before_styles')

  <link rel="stylesheet" href="{{ URL::asset('styles/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <!--
                <div class="box-header with-border">
                    <div class="row">
                    <div class="col-md-3">
                        <div class="board oneb">
                            <small class="text-center sma">Usuarios Activos</small>
                            <h1 class="text-center number">{{$active}}</h1>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="board twob">
                            <small class="text-center sma">Visitas este mes</small>
                            <h1 class="text-center number">{!! json_encode($totalmonth)!!}</h1>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="board threeb">
                            <small class="text-center sma">-</small>
                            <h1 class="text-center number">-</h1>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="board fourb">
                            <small class="text-center sma">-</small>
                            <h1 class="text-center number">-</h1>
                        </div>
                    </div>
                    </div>
                </div>
                --> 
                <!--
                    <div class="row">
                         <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <h3 >Posts mas visitados</h3>
                            <ul>
                                <li>asdasdasd</li>
                                <li>asdasdasd</li>
                                <li>aosdpoasd</li>
                                <li>qoweqwoe</li>
                            </ul>

                        </div>
                        <div class="col-md-6">
                            <div class="row social">
                                <div class="col-md-4">
                                    <div class="board oneb soc">
                                        <small class="text-center sma">Facebook</small>
                                        <h1 class="text-center number">{{$active}} likes</h1>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="board twob soc">
                                        <small class="text-center sma">Twitter</small>
                                        <h1 class="text-center number">{!! json_encode($totalmonth)!!}</h1>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="board threeb soc">
                                        <small class="text-center sma">-</small>
                                        <h1 class="text-center number">-</h1>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    
                -->
                <div class="box-body">

                  
                  
                  
                  <h3>Visitas en el mes</h3>
                     <canvas id="myChart" width="400" height="100"></canvas>
                     <div id="this_week_vs_last_legend" class="chart-legend"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after_scripts')
  {!! HTML::script('bower_components/Chart.min.js') !!}
  <script type="text/javascript">
    var ctx = document.getElementById("myChart");

    var lab = {!! json_encode($thismonthdates) !!};
    
    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: lab ,
        datasets: [{
            label: '# mes actual',
            data: {!! json_encode($actual) !!},
            backgroundColor: [
                'rgba(153, 102, 255, 0.3)'
            ],
            options:{
             hover: {
                    mode: 'nearest',
                    intersect: true
                }
            },
            fill: true,
            borderColor: 'rgba(155,160,228,1)',
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            borderWidth: 3,
        
        },
        {
            label: '# Mes anterior',
            data: {!! json_encode($anterior) !!},
            backgroundColor: [
                'rgba(255, 159, 64, 0.2)'
            ],
            options:{
             hover: {
                    mode: 'nearest',
                    intersect: true
                }
            },
            fill: false,
            borderColor: "rgba(123,123,123,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            borderWidth: 1,
        
        },
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },
        responsive:true
    }
});
   
</script>
@endsection