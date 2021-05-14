@extends('layouts.app')

@section('css')

@endsection

@section('main')
    <div class="container">
        <form action="/admin/update/{{$productsData->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="type">類型:</label>
                <input type="text" id="type" name="type" value="{{$productsData->type_id}}">
            </div>
           <div class="form-group">
               <label for="name">名稱:</label>
               <input type="text" id="name" name="name" value="{{$productsData->name}}">
           </div>
           <div class="form-group">
                <label for="img">主要圖片:</label>
                <div>
                    <img src="{{$productsData->img}}" alt="" width="200"><br>
                    <input type="file" accept="image/*" id="img" name="img" value="{{$productsData->img}}">
                </div>
            </div>
            <div class="form-group">
                <label for="img">其他圖片:</label>
                <div>
                    <div class="img-area">
                        @foreach ($productsData->images as $img)
                            <div class="img" style="background-image: url('{{asset($img->img)}}')">
                                <div class="del-btn" data-id="{{$img->id}}">X</div>
                            </div>
                        <img src="{{$img->img}}" alt="123" width="200"><br>
                        <input type="file" accept="image/*" id="img" name="img" value="{{$productsData->img}}">
                        @endforeach
                    </div>
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
    <script>
        //select all delete btn
        var btns = document.querySelectorAll('.del-btn');
        //set addlistener to all delete btn
        btns.forEach(function(btn){
            btn.addEventListener('click',function () {
                if(confirm('sure?')){
                    var imgId= this.getAttribute('data-id')
                    var formData = new FormData;
                    formData.append('id',imgId);
                    formData.append('_token','{{csrf_token()}}');
                    var delbtn = this;
                    fetch('/admin/delete_img',{
                        method:'POST',
                        body:formdata
                    })
                    .then(function (response){
                        return response.text();
                    })
                    .then(function (result) {
                        if(result == 'success'){
                            delbtn.parentElement.remove();
                        }
                    })
                    // .catch(error=>console.error('Error:', error))
                    // .then(response=>console.log('success',response));
                }
            })
        
        });
    </script>
@endsection
