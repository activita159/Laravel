@extends('layouts.app')

@section('css')

@endsection

@section('main')
    <div class="container">
        <form action="/admin_type/update/{{$typesData->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="type_name">類型:</label>
                <input type="text" id="type_name" name="type_name" value="{{$typesData->type_name}}">
            </div>
           
            <button type="submit">送出:</button>

        </form>
    </div>
@endsection

@section('js')

@endsection
