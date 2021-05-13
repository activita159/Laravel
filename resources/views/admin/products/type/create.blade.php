@extends('layouts.app')

@section('css')

@endsection

@section('main')
    <div class="container">
        <form action="/admin_type/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="type_id">類型:</label>
                <input type="text" id="type_id" name="type_id">
            </div>
           <div class="form-group">
               <label for="name">名稱:</label>
               <input type="text" id="name" name="name">
           </div>

            <button type="submit">送出:</button>

        </form>
    </div>
@endsection

@section('js')

@endsection
