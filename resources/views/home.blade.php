@extends('layouts.app')

@section('content')
<div class="page-pad mobile-pad">
    <div class="container">
        @include('messages.message')

        <div class="text-center pt-0 pb-4">
            <h4><i>Admin panel</i></h4>
        </div>

        <div class="text-center pt-0 pb-4">
            <a href="/products/create" class="btn btn-outline-danger">Add Product</a>
        </div>

        <div class="row justify-content-center">
            {{-- <div class="col-md-10"> --}}
                <div class="card bg-light p-4">
                    <table class="table table-stripped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Type</th>
                            <th>Size</th>
                            <th>MRP</th>
                            <th>Offer Price</th>
                            <th>Saved by Customer</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>

                        @if(count($products)>0)
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->type}}</td>
                                    <td>{{$product->size}}</td>
                                    <td>{{$product->MRP}}</td>
                                    <td>{{$product->offer_price}}</td>
                                    <td>{{$product->saved_customer}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>
                                        <form action=" {{ route('products.destroy', $product->id)}} " method="POST" onsubmit="whenClick(event)"> 
                                            @csrf
                                            <input type="hidden" value="DELETE" name="_method" />
                                            <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            {{-- </div> --}}
        </div>
    </div>
</div>


<script>
    function whenClick(e)
    {
        if(confirm("Are you sure you want to delete?")){
            return true;
        }else{
            e.preventDefault();
        }
    } 
</script>
@endsection
