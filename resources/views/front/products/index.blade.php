@extends('layouts.template')

@section('css')
    <style>
      main{
        display: flex;
        flex-wrap: wrap;
        /* justify-content: space-between; */
      }

    </style>
@endsection

@section('main')
@foreach ($productsData as $item)    
<div class="card container" style="width: 18rem;">
  <img src="..." class="card-img-top m-auto" alt="" style="width: 200px;height:250px">
  <div class="card-body">
    <h5 class="card-title name">{{$item->name}}</h5>
    <p class="card-text content">{{$item->content}}</p>
    <p class="price">NT${{$item->price}}</p>
    
    <a href="#" class="btn btn-primary">Go Fuck Yourself</a>
  </div>
</div>
@endforeach
@endsection

@section('js')
    
@endsection