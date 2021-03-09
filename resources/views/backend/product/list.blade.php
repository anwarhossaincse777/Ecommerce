@extends('layouts.main')



@section('content')

    <div class="container">
    <div class="row">
        @foreach($products as $product)
            @livewire('product.block',['product'=>$product]);
        @endforeach
    </div>

     </div>

@endsection
