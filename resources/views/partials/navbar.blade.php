<ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="background-color:#011A27">
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-tachometer-alt"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{route('global')}}">
            <i class="fas fa-chart-area"></i>
            <span class="nav-link-text">@lang('navbar.global')</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fas fa-hand-point-up"></i>
            <span class="nav-link-text">@lang('navbar.porExhibicion')</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="/reportes/interaccion/1">@lang('navbar.exhibicion') 1</a>
            </li>
            <li>
              <a href="/reportes/interaccion/2">@lang('navbar.exhibicion') 2</a>
            </li>
            <li>
              <a href="/reportes/interaccion/3">@lang('navbar.exhibicion') 3</a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{route('tiempo')}}">
            <i class="fas fa-clock"></i>
            <span class="nav-link-text">@lang('navbar.tiempos')</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{route('encuesta')}}">
            <i class="fas fa-pencil-alt"></i>
            <span class="nav-link-text">@lang('navbar.encuesta')</span>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>