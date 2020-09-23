@extends('layouts.app')

@section('content')

<div class="page-pad mobile-pad">

    <div class="col-lg-8 offset-lg-2">

        @include('messages.message')

        <div class=" text-center mb-2">
            <h5> Add product</h5>
        </div>    

        <div class="card-body bg-light">
            <form action=" {{ route('products.store') }} " method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                    <div class="col-md-6">
                        <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>

                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Model no.') }}</label>

                    <div class="col-md-6">
                        <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autocomplete="model" autofocus>

                        @error('mdoel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="size" class="col-md-4 col-form-label text-md-right">{{ __('Size') }}</label>

                    <div class="col-md-6">
                        <input id="size" type="text" class="form-control @error('size') is-invalid @enderror" name="size" value="{{ old('size') }}" required autocomplete="size" autofocus>

                        @error('size')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="mrp" class="col-md-4 col-form-label text-md-right">{{ __('MRP') }}</label>

                    <div class="col-md-6">
                        <input id="mrp" type="number" class="form-control @error('mrp') is-invalid @enderror" name="mrp" value="{{ old('mrp') }}" autocomplete="mrp" autofocus>

                        @error('mrp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="offer_price" class="col-md-4 col-form-label text-md-right">{{ __('Offer Price') }}</label>

                    <div class="col-md-6">
                        <input id="offer_price" type="number" class="form-control @error('offer_price') is-invalid @enderror" name="offer_price" value="{{ old('offer_price') }}" autocomplete="offer_price" autofocus>

                        @error('offer_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="save_customer" class="col-md-4 col-form-label text-md-right">{{ __('Saved by Customer') }}</label>

                    <div class="col-md-6">
                        <input id="save_customer" type="text" class="form-control @error('save_customer') is-invalid @enderror" name="save_customer" value="{{ old('save_customer') }}" autocomplete="save_customer" autofocus>

                        @error('save_customer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                    <div class="col-md-6">
                        <select id="category" class="form-control @error('category') is-invalid @enderror" name="category" value="" required autocomplete="category" autofocus>
                            <option value="television">Television</option>
                            <option value="washing machine">Washine Machine</option>
                            <option value="air conditioner">Air Conditioner</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                    <div class="col-md-6">
                        <input id="image" type="file" class=" @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image" autofocus>

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-danger" value="Submit"/>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection