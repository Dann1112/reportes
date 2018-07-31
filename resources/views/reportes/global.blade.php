@extends('partials.layout')

@section('content')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  
  <!-- Navigation-->
  @include('partials.navigation')

  <div class="content-wrapper">
      <div class="container-fluid">

        <hr>
        <h1 class="display-3 d-block text-center">@lang('global.global')</h1>
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
              labels: ["Exhibit1", "Exhibit2", "Exhibit3", "Exhibit4"], //CAMBIAR
              datasets: [{
                data: [105, 100, 85, 97], //CAMBIAR
                backgroundColor: ['#39B7CD', '#0BB5FF ', '#5D8AA8 ', '#000080 '], //CAMBIAR
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
        labels: ["Exhibit1", "Exhibit2", "Exhibit3", "Exhibit4"], //CAMBIAR
        datasets: [{
          data: [456, 654, 487, 540], //CAMBIAR
          backgroundColor: ['#F8DE7E', '#FADA5E', '#FFD300', '#F9A602'], //CAMBIAR
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
        labels: ["Exhibit1", "Exhibit2", "Exhibit3", "Exhibit4"], //CAMBIAR
        datasets: [{
          data: [1655, 2300, 1780, 2000], //CAMBIAR
          backgroundColor: ['#FF2400', '#ED2939', '#C21807', '#B22222'], //CAMBIAR
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
      data: [1000, 3016, 2626, 1839, 1828, 2868, 3127, 3325, 2584, 2415, 3265, 3198],
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
          max: 4000,
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
