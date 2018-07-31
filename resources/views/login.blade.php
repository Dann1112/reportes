
@extends('partials.layout')

@section('content')

<body style="background-color:#011A27;">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">@lang('login.loginTitle')</div>
      <div class="card-body">
          @include('partials.errors')
          <form method="POST" action='{{route('login')}}' enctype="multipart/form-data" >
            {{ csrf_field() }}
          <div class="form-group">
            <label for="usuario">@lang('login.usuario')</label>
            <input class="form-control" id="usuario" name="usuario" aria-describedby="usuarioHelp" placeholder="@lang('login.usuarioPlaceholder')">
          </div>
          <div class="form-group">
            <label for="password">@lang('login.password')</label>
            <input class="form-control" id="password" type="password" name="password" placeholder="@lang('login.password')">
          </div>
        <input class="btn btn-block" type="submit" style="background-color:gold; color:black" value="@lang('login.login')" name="submit">
        </form>
      </div>
    </div>
  </div>


  @include('partials.js')
</body>

@endsection
