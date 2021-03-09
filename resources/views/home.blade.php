@extends('layouts.main')


@section('content')

    <h5>Latest product</h5>

    <div class="row">
        @foreach($latest as $product)
        <div class="col">
            <div class="card">
                <div class="card-body">
                   @isset($product->images)

                    <img src="{{asset('storage/'.$product->images[0]->image)}}" class="rounded mx-auto d-block" alt="...">

                    @endisset
                    <h5 class="card-title">{{$product->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$product->price}}</h6>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="#" class="card-link">Add to Card</a>
                    <a href="#" class="card-link">Product Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>







@endsection
