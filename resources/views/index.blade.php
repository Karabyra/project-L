@extends('master')

@section('title','Главння')

@section('content')
    <div class="starter-template">
        <h1>Все товары</h1>

        <div class="row">
            @include('card');
        </div>
    </div>
@endsection
