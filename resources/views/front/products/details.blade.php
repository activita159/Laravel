@extends('layouts.template')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
@endsection


@section('main')
<div class="containerrrr">
    <h1><p>{{$productsData->name}}</p></h1>
    <div class="date">
        <img src="{{$productsData->img}}" alt="" width="300">

        <p>NT${{$productsData->price}}</p>
    </div>

    <p>{{$productsData->content}}</p>
</div>
@endsection
{{-- -- --}}


