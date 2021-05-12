@extends('layouts.template')

@section('css')
    <style>
      main{

        display:grid;
        grid-template-columns: repeat(5, 1fr);
        /* grid-template-columns:1fr 1fr 1fr 1fr 1fr; */
        justify-items: center;
        /* flex-wrap: wrap; */
        /* justify-content: space-between; */
      }

    </style>
@endsection

@section('main')
@foreach ($productsData as $item)
<div class="card container" style="width: 18rem;">
    <a href="/details/{{$item->id}}" class="">
        <img src="{{$item->img}}" class="card-img-top m-auto"  alt="" style="width: 200px">
    </a>

  <div class="card-body">
    <h5 class="card-title name">{{$item->name}}</h5>
    <p class="card-text content">{{$item->content}}</p>
    <p class="price">NT${{$item->price}}</p>
    <a href="/details/{{$item->id}}" class="btn btn-primary" >Go Fuck Yourself</a>
  </div>
</div>
@endforeach
@endsection

@section('js')

@endsection
