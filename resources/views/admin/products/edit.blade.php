@extends('layouts.app')

@section('css')

@endsection

@section('main')
    <div class="container">
        <form action="/admin/update/{{$productsData->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="type">類型:</label>
                <input type="text" id="type" name="type" value="{{$productsData->type}}">
            </div>
           <div class="form-group">
               <label for="name">名稱:</label>
               <input type="text" id="name" name="name" value="{{$productsData->name}}">
           </div>
           <div class="form-group">
                <label for="img">圖片:</label>
                <div>
                    <img src="{{$productsData->img}}" alt="" width="200"><br>
                    <input type="file" accept="image/*" id="img" name="img" value="{{$productsData->img}}">
                </div>
            </div>
            <div class="form-group">
                <label for="content">簡介:</label>
                <textarea name="content" id="content" cols="30" rows="10">{{$productsData->content}}</textarea>
            </div>
            <div class="form-group">
                <label for="price">價格 NT$:</label>
                <input type="text" id="price" name="price" value='{{$productsData->price}}'>
            </div>
            <button type="submit">送出:</button>

        </form>
    </div>
@endsection

@section('js')

@endsection
