@extends('layouts.main')


@section('content')



    <a href="{{route('product.list')}}" class="float-end btn btn-sm btn-outline-success"> View All</a>

    <h5>Latest product</h5>

        <div class="view-clear-fix">

        </div>
    <div class="row">
        @foreach($latest as $product)
            @livewire('product.block',['product'=>$product]);
        @endforeach
    </div>







@endsection
