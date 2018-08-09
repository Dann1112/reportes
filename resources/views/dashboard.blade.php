@extends('partials.layout')

@section('content')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  @include('partials.navigation')

  <div class="content-wrapper">
      <div class="container-fluid">

          <hr>
          <h1 class="display-3 d-block text-center">DASHBOARD</h1>
          <h1 class="display-3 d-block text-center"></h1>
          <hr>
          <div class="row justify-content-center">
              <div class="column-flex col-xl-3 col-12 m-3 text-center rounded border justify-content-center">
              <a href="{{route('global')}}">
                <h1 class="display-1"><i class="fas fa-chart-area text-primary"></i></h1>
              <h2>@lang('dashboard.1')</h2>
              </a>
              </div>
              <div class="column-flex col-xl-3 col-12 m-3 text-center rounded border justify-content-center">
                  <h1 class="display-1"><i class="fas fa-clock text-info"></i></h1>
                <h2>@lang('dashboard.2')</h2>
                </div>
                <div class="column-flex col-xl-3 col-12 m-3 text-center rounded border justify-content-center">
                    <h1 class="display-1"><i class="fas fa-pencil-alt text-danger"></i></h1>
                  <h2>@lang('dashboard.3')</h2>
                  </div>
                </div>
        <div class="row justify-content-center">
        <div class="column-flex col-xl-3 m-3 col-12 text-center rounded border">
          <h1 class="display-1"><i class="fas fa-hand-point-up text-warning"></i></h1>
        <h2>@lang('dashboard.4')</h2>
        </div>
        <div class="column-flex col-xl-3 col-12 m-3 text-center rounded border">
            <h1 class="display-1"><i class="fas fa-hand-point-up text-warning"></i></h1>
          <h2>@lang('dashboard.5')</h2>
          </div>
          <div class="column-flex col-xl-3 col-12 m-3 text-center rounded border">
              <h1 class="display-1"><i class="fas fa-hand-point-up  text-warning"></i></h1>
            <h2>@lang('dashboard.6')</h2>
            </div>
          </div>
      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

        @include('partials.logout_modal')

      </div>
        </div>
        @include('partials.js')
      </body>

    @endsection
