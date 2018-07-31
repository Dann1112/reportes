
@include('partials.head')

<body style="background-color:#011A27;">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">@lang('registro.registro')</div>
      <div class="card-body">

        <form method="POST" action='{{route('registro')}}' enctype="multipart/form-data" >
          {{ csrf_field() }}

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="nombre">@lang('registro.nombre')</label>
                <input class="form-control" id="apellido" type="text" aria-describedby="nameHelp" placeholder="@lang('registro.nombrePlaceholder')" required>
              </div>
              <div class="col-md-6">
                <label for="apellido">@lang('registro.apellido')</label>
                <input class="form-control" id="apellido" type="text" aria-describedby="nameHelp" placeholder="@lang('registro.apellidoPlaceholder')" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="email">@lang('registro.email')</label>
            <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="@lang('registro.emailPlaceholder')" required>
          </div>


          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">@lang('registro.password')</label>
                <input class="form-control" id="password" type="password" placeholder="@lang('registro.password')" required>
              </div>
              <div class="col-md-6">
                <label for="password_confirmation">@lang('registro.password_confirmation')</label>
                <input class="form-control" id="password_confirmation" type="password" placeholder="@lang('registro.password_confirmation')" required>
              </div>
            </div>
          </div>
          <btn class="btn btn-block" type="submit" style="background-color:gold; color:black">@lang('registro.registrar')</btn>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{route('login')}}">@lang('registro.login')</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
