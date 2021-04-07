@extends('master')

@section('title','Главння')

@section('content')
    <div class="starter-template">
        <h1>Все товары</h1>

        <div class="row">
            @foreach($products as $product)
                @include('card',compact('products'))
            @endforeach
        </div>
    </div>
@endsection
