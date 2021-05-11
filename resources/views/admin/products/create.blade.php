@extends('layouts.app')

@section('css')
    
@endsection

@section('main')
    <div class="container">
        <form action="/admin/store" method="POST">
            @csrf
           <div class="form-group">
               <label for="name">名稱:</label>
               <input type="text" id="name" name="name">
           </div>
           <div class="form-group">
                <label for="img">圖片:</label>
                <input type="text" id="img" name="img">
            </div>
            <div class="form-group">
                <label for="content">簡介:</label>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="price">價格 NT$:</label>
                <input type="text" id="price" name="price">
            </div>
            <button type="submit">送出:</button>
           
        </form>
    </div>
@endsection

@section('js')
    
@endsection