<nav class="navbar navbar-expand-lg navbar-light bg-light rounded nav-small">
    <a href="/" class="tcl-landing-logo-sm">
        <img src="/Theme/img/brands/TCL.PNG">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
      <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about-tcl">About TCL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact"> Contact Us </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" onclick="showForm()"> Buy now </a>
          </li>
      </ul>

      <ul class="navbar-nav d-flex align-items-center mr-2">
        <!-- Authentication Links -->
        @guest

        @else
            <li class="nav-item nav__item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{Auth::user()->name}} 
                    {{-- <span class="caret"></span> --}}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('home')}}"> {{__('Dashboard')}}</a>
                    
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
    </div>
  </nav>