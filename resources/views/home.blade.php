@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main')
<div class="container">
    <a href="/admin/create">新增</a>
    <table id="myDataTalbe"  class="display"  >
        <thead>
            @foreach ($productsData as $item)
                
            <tr>
                <th>#</th>
                <th>名稱</th>
                <th>圖片</th>
                <th>簡介</th>
                <th>價格</th>
                <th>ActionButton</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->img}}</td>
                <td>{{$item->content}}</td>
                <td>{{$item->price}}</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                    
                </td>
            </tr>
            
        </tbody>
        @endforeach
    </table>
</div>
@endsection


@section('js')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!--引用dataTables.js-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 
<script type="text/javascript">
    $(function () {

        $("#myDataTalbe").DataTable({
            searching: false, //關閉filter功能
            columnDefs: [{
                targets: [3],
                orderable: false,
            }]
        });
    });
</script>
@endsection
