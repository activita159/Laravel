@extends('layouts.app')

@section('css')

@endsection

@section('main')
    <div class="container">
        <form action="/admin/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="type_id">類型:</label>
                <input type="text" id="type_id" name="type_id">
            </div>
           <div class="form-group">
               <label for="name">名稱:</label>
               <input type="text" id="name" name="name">
           </div>
           <div class="form-group">
                <label for="img">圖片:</label>
                <input type="file" accept="image/*" id="img" name="img">
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
