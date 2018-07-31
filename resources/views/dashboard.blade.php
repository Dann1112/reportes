@extends('partials.layout')

@section('content')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  @include('partials.navigation')

  <div class="content-wrapper">
      <div class="container-fluid">
      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

        @include('partials.logout_modal')

      </div>
        </div>
        @include('partials.js')
      </body>

    @endsection
