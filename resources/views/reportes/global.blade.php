@extends('partials.layout')

@section('content')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  <!-- Navigation-->
  @include('partials.navigation')

  <div class="content-wrapper">
      <div class="container-fluid">

        <hr>
        <h1 class="display-3 d-block text-center">@lang('global.global')</h1>
        <h1 class="display-3 d-block text-center"></h1>
        <hr>
      
<div class="row">
  <!-- Area Chart Example-->
  <div class="card mb-3 col-12">
      <div class="card-header">
        <i class="fa fa-area-chart"></i> @lang('global.mensual')</div>
      <div class="card-body">
        <canvas id="anual" width="100%" height="30"></canvas>
      </div>
      <div class="card-footer small text-muted">@lang('global.actualizacion') 11:59 PM</div>
    </div>

</div>




    <div class="row">
      <div class="col-lg-4">
        <!-- Example Pie Chart Card-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-pie-chart"></i> Interacciones Promedio por Dia</div>
          <div class="card-body">
            <canvas id="myPie" width="100%" height="100"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>

      <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Interacciones Promedio por Semana</div>
            <div class="card-body">
              <canvas id="myPie2" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
      </div>

        <div class="col-lg-4">
            <!-- Example Pie Chart Card-->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-pie-chart"></i> Interacciones Promedio por Mes</div>
              <div class="card-body">
                <canvas id="myPie3" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
        </div>
      
    </div>

        @include('partials.logout_modal')
    </div>
  </div>
        @include('partials.js')
        <script>
          // -- Pie Chart Example
          var ctx = document.getElementById("myPie");
          var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
              labels: ["BALLENA", "TIBURON", "TIGRE"], //CAMBIAR
              datasets: [{
                data: [{!! json_encode($xdiaBallena); !!}, {!! json_encode($xdiaTiburon); !!}, {!! json_encode($xdiaTigre); !!}], //CAMBIAR
                backgroundColor: ['#39B7CD', '#0BB5FF ', '#5D8AA8 '], //CAMBIAR
              }],
            },
          });
        </script>

<script>
    // -- Pie Chart Example
    var ctx = document.getElementById("myPie2");
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["BALLENA", "TIBURON", "TIGRE"], //CAMBIAR
        datasets: [{
          data: [{!! json_encode($xsemanaBallena); !!}, {!! json_encode($xsemanaTiburon); !!}, {!! json_encode($xsemanaTigre); !!}], //CAMBIAR
          backgroundColor: ['#F8DE7E', '#FADA5E', '#FFD300'], //CAMBIAR
        }],
      },
    });
  </script>

<script>
    // -- Pie Chart Example
    var ctx = document.getElementById("myPie3");
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["BALLENA", "TIBURON", "TIGRE"], //CAMBIAR
        datasets: [{
          data: [{!! json_encode($promedioMesBallena); !!}, {!! json_encode($promedioMesTiburon); !!}, {!! json_encode($promedioMesTigre); !!}], //CAMBIAR
          backgroundColor: ['#FF2400', '#ED2939', '#C21807'], //CAMBIAR
        }],
      },
    });
</script>

<script>
  // -- Area Chart Example
var ctx = document.getElementById("anual");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"],
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(10,185,16,0.2)",
      borderColor: "rgba(10,185,16,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(10,185,16,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 20,
      pointBorderWidth: 2,
      data: [ {!! json_encode($meses[0]); !!},  {!! json_encode($meses[1]); !!}, {!! json_encode($meses[2]); !!}, {!! json_encode($meses[3]); !!}, {!! json_encode($meses[4]); !!},{!! json_encode($meses[5]); !!},{!! json_encode($meses[6]); !!},{!! json_encode($meses[7]); !!},{!! json_encode($meses[8]); !!},{!! json_encode($meses[9]); !!},{!! json_encode($meses[10]); !!},{!! json_encode($meses[11]); !!}],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 10
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>
      </body>

    @endsection
