@extends('layouts.template')

@section('css')
    <style>
      main{

        display:grid;
        grid-template-columns: repeat(4, 1fr);
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
    <a href="/details/{{$item->id}}" class="m-auto" >
        <img src="{{$item->img}}" class="card-img-top m-auto"  alt="" style="width: 200px">
    </a>

  <div class="card-body">
    <h5 class="card-title name">{{$item->name}}</h5>
    <p class="card-text type">{{$item->type_id}}</p>
    <p class="card-text content">{{$item->content}}</p>
    <p class="price">NT${{$item->price}}</p>
    <a href="/details/{{$item->id}}" class="btn btn-primary" >detail</a>
    <button class="btn btn-primary add" data-id="{{$item->id}}" style="width: 100%">add to shoppingcart</button>
  </div>
</div>
@endforeach
@endsection

@section('js')
  <script>
    document.querySelectorAll('.add').forEach(function (addBtn) {
      console.log(addBtn);
      addBtn.addEventListener('click',function () {
        var productId = this.getAttribute('data-id');

        var formData = new FormData();
        formData.append('_token','{{csrf_token()}}');
        formData.append('productId',productId);

        fetch('/shopping_cart/add',{
          'method':'POST',
          'body':formData
        })
        .then(function (response) {
          return response.text()
        })
        .then(function (data) {
          console.log(data);
          if(data == 'success'){
            console.log("8888")
          }
        })

      })
    })
  </script>



@if (Session::get('message'))
  <script>
    swal(
      icon:'warning',
      title: '{{Session::get('message')}}'
    )
  </script>
  
@endif
@endsection
