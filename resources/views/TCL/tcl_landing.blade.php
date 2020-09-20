@extends('layouts.app')

@section('content')

    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="{{ asset('/Theme/img/top-slider/tcl-1.jpg')}}">
            </div>
            <div class="single-hero-items set-bg" data-setbg="{{ asset('/Theme/img/top-slider/tcl--2.jpg')}}">
            </div>
            <div class="single-hero-items set-bg" data-setbg="{{ asset('/Theme/img/top-slider/tcl--3.jpg')}}"></div>
            {{-- <div class="single-hero-items set-bg" data-setbg="{{ asset('/Theme/img/top-slider/4.jpg')}}"></div> --}}
        </div>
    </section>

    <div id="popup-container-img">
        <div id="popup-img">
            {{-- <img src=" {{ asset('/Theme/img/preload.jpg')}} " alt=""> --}}
            <button type="button" class="btn" onclick="closeImg()" id="close-img"><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>
    </div>

    {{-- <div style=" overflow: hidden;">
        <div class="py-4 px-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 py-2">
                            <div class="tcl-landing-product text-center">
                                <div class="container">
                                    <div class="row pb-2">
                                        <div class="col-md-5 pt-1">
                                            <h5>LED TV</h5>
                                        </div>
                                        <div class="col-md-5 offset-md-2">
                                            <div class="up-label"><strong>3</strong> years warrenty</div>
                                            <div class="label"> <small>on LED TVs </small> </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('Theme/img/TCL-landing/TV.jpg')}}" alt="" style="" onclick="showForm()">
                                <div class="row pl-4 pt-3">
                                    <span class="label-2">
                                        biggest <br /> savings
                                    </span>
                                    <span class="price">
                                        Rs. 38,600
                                    </span>
                                </div>
                            </div>
                            <div class="text-center pt-3 pb-1">
                                <button onclick="showForm()" class="btn buy-now" id="show-popup"> buy now </button>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 py-2">
                            <div class="tcl-landing-product text-center">
                                <div class="container">
                                    <div class="row pb-2">
                                        <div class="col-md-5 pt-1">
                                            <h5>Washing machine</h5>
                                        </div>
                                        <div class="col-md-5 offset-md-2">
                                            <div class="up-label"><strong>5</strong> years warrenty</div>
                                            <div class="label"> <small>on Motor & PCB </small> </div>
                                        </div>
                                    </div>
                                </div>
                                <img src=" {{ asset('Theme/img/TCL-landing/washingmachine.jpg') }} " alt="" style="" onclick="showForm()">
                                <div class="row pl-4 pt-3">
                                    <span class="label-2">
                                        biggest <br /> savings
                                    </span>
                                    <span class="price">
                                        Rs. 14,500
                                    </span>
                                </div>
                            </div>
                            <div class="text-center pt-3 pb-1">
                                <button onclick="showForm()" class="btn buy-now" id="show-popup"> buy now </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-3 py-2">
                            <div class="tcl-landing-product-two">
                                <h4>Chest Freezer</h4>
                                <div class="pt-4 pb-2">
                                    <div class="up-label"><strong>3</strong> years warrenty</div>
                                    <div class="label"> <small>on compresser </small> </div>
                                </div>
                                <div class="pr-3 pb-1">
                                    <img src=" {{ asset('/Theme/img/TCL-landing/chestFreezer2.jpg') }} " alt="" style="padding-top: 15px; max-height: 95px;" onclick="showForm()">
                                </div>
                                <div class="row pl-4 pt-2 show-sm">
                                    <span class="label-2">
                                        biggest <br /> savings
                                    </span>
                                    <span class="price" style="font-size: 20px;">
                                        Rs. 14,500
                                    </span>
                                    <div class="pl-4 pt-3">
                                        <button onclick="showForm()" class="btn buy-now" id="show-popup"> buy now </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div style="border-bottom: 2px solid red; margin-bottom: 1px;">
                                <div class="row">
                                    <div class="container">
                                        <div class="row text-center py-2">
                                            <div class="col-md-5 pt-1">
                                                <h5>Air conditioner</h5>
                                            </div>
                                            <div class="col-md-5 offset-md-2">
                                               <div class="up-label"><strong>5</strong> years warrenty</div>
                                                <div class="label"> <small>on compresser </small> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 text-center py-2">
                                        <img src=" {{ asset('/Theme/img/TCL-landing/AC1.jpg') }} " alt="" style="padding-top: 15px;" onclick="showForm()">
                                        <div style="font-size: 8px; font-weight: bold;">
                                            SPLIT AC (INVERTOR | NON-INVERTOR)
                                        </div>
                                        <div class="label-3">
                                            0.75Ton | 1Ton | 1.5 Ton | 2 Ton
                                        </div>
                                        <div class="pt-2">
                                            <button onclick="showForm()" class="btn buy-now-sm" id="show-popup"> buy now </button>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-center py-2">
                                        <img src=" {{ asset('/Theme/img/TCL-landing/ac2.jpg') }} " alt="" style="" onclick="showForm()">
                                        <div style="font-size: 8px; font-weight: bold;">
                                            FLOOR STANDING AC
                                        </div>
                                        <div class="label-3">
                                            2 Ton | 4 Ton 
                                        </div>
                                        <div class="pt-2">
                                            <button onclick="showForm()" class="btn buy-now-sm" id="show-popup"> buy now </button>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center py-2">
                                        <img src=" {{ asset('/Theme/img/TCL-landing/ac3.jpg') }} " alt="" style="padding-top: 15px;" onclick="showForm()">
                                        <div style="font-size: 8px; font-weight: bold;">
                                            CASSETTE AC
                                        </div>
                                        <div class="label-3">
                                            1Ton | 1.5Ton | 2 Ton | 3Ton | 4Ton
                                        </div>
                                        <div class="pt-2">
                                            <button onclick="showForm()" class="btn buy-now-sm" id="show-popup"> buy now </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container pt-1">
                                    <div class="row justify-content-center">
                                        <p class="label">
                                            <strong>FREE INSTALLATION
                                            <i class="fa fa-cog pl-4 pr-1" aria-hidden="true"></i><small>upto</small> Rs. 4000/-*</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row pl-4 pt-2 hide-sm">
                            <span class="label-2">
                                biggest <br /> savings
                            </span>
                            <span class="price" style="font-size: 20px;">
                                Rs. 14,500
                            </span>
                            <div class="pl-4 pt-3">
                                <button onclick="showForm()" class="btn buy-now" id="show-popup"> buy now </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container pt-1">
        <div class="row">
            <div class="card-body">
                <div class="TCL-landing-title">
                    Products
                </div>
            </div>
        </div>
    </div>

    {{-- Television --}}

    <div class="container">
        <div class="card-body">
            <div class="owl-slider">
                <div class="pl-2">
                    <strong>Categories/ Television</strong>
                </div>
    
                <div id="carousel" class="product-slider owl-carousel">
                    @if(count($posts)>0)
                        @foreach($posts as $product)
                            @if($product->category == "television")
                            <div class="item">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <div class="card-body bg-blue-light">
                                            <a onclick="showForm()"><img src="{{ asset('storage/images/'.$product->image)}}" alt=""></a>
                                        </div>
                                        
                                        <div class="sale">Save Rs. {{$product->saved_customer}}</div>

                                        <ul>
                                            <li class="w-icon active"><a onclick="showForm()">Buy now</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$product->model_no}}</div>
                                        <a href="">
                                            <h5>{{$product->type}}</h5>
                                        </a>
                                        <div class="product-price">
                                            Rs. {{$product->offer_price}}
                                            <span>Rs. {{$product->MRP}}</span>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            @endif
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
    {{-- end --}}

    {{-- Air conditioner --}}
        <div class="container">
            <div class="card-body">
                <div class="owl-slider">
                    <div class="pl-2">
                        <strong>Categories/ Water Dispenser</strong>
                    </div>
        
                    <div id="carousel" class="product-slider owl-carousel">
                        @if(count($posts)>0)
                            @foreach($posts as $product)
                                @if($product->category == "water dispenser")
                                <div class="item">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <div class="card-body bg-blue-light">
                                                <a onclick="showForm()"><img src="{{ asset('storage/images/'.$product->image)}}" alt=""></a>
                                            </div>
                
                                            <div class="sale">Save Rs. {{$product->saved_customer}}</div>

                                            <ul>
                                                <li class="w-icon active"><a onclick="showForm()">Buy now</a></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">{{$product->model_no}}</div>
                                            <a href="">
                                                <h5>{{$product->type}}</h5>
                                            </a>
                                            <div class="product-price">
                                                Rs. {{$product->offer_price}}
                                                <span>Rs. {{$product->MRP}}</span>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                @endif
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    {{-- end --}}

    {{-- Washing machine --}}
    <div class="container">
        <div class="card-body">
            <div class="owl-slider">
                <div class="pl-2">
                    <strong>Categories/ Washing Machine</strong>
                </div>
    
                <div id="carousel" class="product-slider owl-carousel">
                    @if(count($posts)>0)
                        @foreach($posts as $product)
                            @if($product->category == "washing machine")
                                <div class="item">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <div class="card-body bg-blue-light">
                                                <a onclick="showForm()"><img src="{{ asset('storage/images/'.$product->image)}}" alt=""></a>
                                            </div>
                
                                            <div class="sale">Save Rs. {{$product->saved_customer}}</div>

                                            <ul>
                                                <li class="w-icon active"><a onclick="showForm()">Buy now</a></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">{{$product->model_no}}</div>
                                            <a href="">
                                                <h5>{{$product->type}}</h5>
                                            </a>
                                            <div class="product-price">
                                                Rs. {{$product->offer_price}}
                                                <span>Rs. {{$product->MRP}}</span>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            @endif
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
    {{-- end --}}

    {{-- @include('inc.airConditionerProducts') --}}
    {{-- @include('inc.washingMachines') --}}

    <div class="text-center py-4">
        <p> Download our catalogue to know more about our company and the products.</p>
        <a href=" {{ route('tcl.catalog')}} " class="btn download-catalog"> Download Catalogue</a>
    </div>
@endsection