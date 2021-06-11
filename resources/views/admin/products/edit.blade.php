@extends('layouts.app')

@section('css')
<style>
    .img-area{
        display: flex;
        flex-wrap: wrap;
        
    }
    .img{

        width: 100px;
        height: 100px;
        background-size: cover;
        background-position: center;
        margin-right:15px;
        margin-top:10px;
        border: 1px solid black;
        position: relative;
    }
    .del-btn{
        width: 20px;
        height: 20px;
        background-color: red;
        border-radius: 50%;
        text-align: center;
        position: absolute;
        right: 0;
        transform:translate(30%,-50%);
        cursor: pointer;
    }
</style>
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
                    <img src="{{asset($productsData->img)}}" alt="" width="200"><br>
                    <input type="file" accept="image/*" id="img" name="img" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label for="img">其他圖片:</label>
                <div>
                    <div class="img-area">
                        @foreach ($productsData->images as $img)
                            <div class="img" id="img_{{$img->id}}" style="background-image: url('{{asset($img->img)}}')">
                                <div class="del-btn" data-id="{{$img->id}}">X</div>
                            </div>
                        @endforeach
                    </div>
                    <input type="file" accept="image/*" id="imgs" name="imgs[]" class="form-control"  multiple="">
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
        //選到所有的刪除按鈕
        var btns = document.querySelectorAll('.del-btn');
        //將所有刪除按鈕綁定監聽事件
        btns.forEach(function(btn){
            btn.addEventListener('click',function () {
                //按下按鈕後要發生的事情
                if(confirm('sure?')){
                    //確認要刪除後發生的事情
                    var imgId= this.getAttribute('data-id')
                    var formData = new FormData();
                    formData.append('id',imgId);
                    formData.append('_token','{{csrf_token()}}');
                    var delbtn = this;
                    fetch('/admin/delete_img',{
                        method:'POST',
                        body: formData
                    })
                    .then(function (response){
                        return response.text();
                    })
                    .then(function (result) {
                        if(result == 'success'){
                            delbtn.parentElement.remove();
                            // document.querySelector('#img_'+imgId).remove();
                        }
                    })
                    // .catch(error=>console.error('Error:', error))
                    // .then(response=>console.log('success',response));
                }
            })
        
        });
    </script>
@endsection
