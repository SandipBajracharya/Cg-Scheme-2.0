<!-- Header Section Begin -->
<header class="nav-large fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded" style=" min-height: 70px; box-shadow: 0px 0px 5px 0px rgba(104, 104, 104, 0.623);">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample001" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
    
        <div class="show-img">
            <img class="tcl-landing-logo" src="/Theme/img/brands/TCL.PNG">
        </div>

        <div class="collapse navbar-collapse" id="navbarsExample001">

          <ul class="px-5 navbar-nav w-100 d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <li class="nav-item nav__item">
                        <a class="nav-link" href="/">Home</a>
                      </li>
                      <li class="nav-item nav__item ml-5">
                        <a class="nav-link" href="/about-tcl">About TCL</a>
                      </li>
                </div>
              <li class="hide-img">
                <a href="/">
                    <img class="tcl-landing-logo" src="/Theme/img/brands/TCL.PNG">
                </a>
              </li>
              <div class="d-flex">
                <li class="nav-item nav__item">
                    <a class="nav-link" href="#contact"> Contact Us </a>
                  </li>
                  <li class="nav-item nav__item ml-4">
                    <button class="btn btn-danger btn-sm ml-1" onclick="showForm()">Buy Now</button>
                  </li>
              </div>
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
                        <a class="dropdown-item" href="{{route('home')}}"> {{__('Home')}}</a>
                        
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
    {{-- <a href="/tcl" class="tcl-landing-logo">
        <img src="/Theme/img/brands/TCL.PNG">
    </a>

    <div class="nav-item tcl-nav" style="background-color: #fff; color: #000;" id="myHeader">
            <nav class="nav-menu nav-menu-landing">
                <div class="d-flex">
                    <ul class="ul-left">
                        <li><a href="{{ url('/tcl') }}">Home</a></li>
                        <li><a href="{{ url('/tcl/about-tcl') }}">About TCL</a></li>
                    </ul>
                    <ul class="ul-right">
                        <li><a href="#contact">Contact Us</a></li>
                        <li><button class="btn btn-danger btn-sm ml-1" onclick="showForm()">Buy Now</button></li>
                    </ul>
                </div>
            </nav>
            <div id="mobile-menu-wrap"></div>
    </div> --}}
</header>
<!-- Header End -->