@extends('layouts.app')

@section('content')
    @include('inc.TCL.navbarLandingTCL') 
    @include('inc.TCL.navbarSmall')
    <div class="page-pad mobile-pad">
        <div class="container">
            <div class="col-lg-10 offset-lg-1">

                @include('messages.message')

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors -> all() as $error)
                                <li> {{$error}} </li>    
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="about-tcl">
                    <h4>About TCL</h4>
                    <p>TCl is global manufacturer of smart products and provider of Internet application services. TCL corporation was founded in 1981. Over the three decades, TCL has grown from small joint venture producing audio tapes in Huizhou into a global corporation engaged in a wide range of business such as telephone, TV, mobile phone, refrigirator, washing machine, air-conditioner, smart health appliances and LCD panels. </p>
            
                    <h5>Global Marketing Ranking</h5>
                    <p>According to IHS, TCL is among the global top 2 TV manufacturer in <strong>2018</strong> in terms of TV manufacturing volume worldwide</p>
                
                    <h5>Vertical Integration</h5>
                    <p>Being one of only 2 TV Brands in the world and the only one from China to be truely vetically integrated, TCL has the capability to produce products ranging from panel, backlight and module to set.</p>
                    <img src=" {{asset('Theme/img/TCL-landing/tcl-about.jpg')}} " alt="" class="pt-3">
                </div>
            </div>
        </div>
    </div>

    @include('inc.TCL.footerLandingTCL')
@endsection