<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productsData = Product::all();
        // dd($productsData);
        return view('front.products.index',compact('productsData'));
    }

    public function details($id)
    {
        $productsData = Product::find($id);
        return view('front.products.details',compact('productsData'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $productData = $request->all();
        if($request->hasfile('img')){
            $file = $request ->file('img');
            $path = $this->fileUpload($file,'product');
            $productData['img']=$path;
        }

        Product::create($productData);

        return redirect('/home');
    }

    public function edit($id)
    {
        $productsData = Product::find($id);
        return view('admin.products.edit',compact('productsData'));
    }

    public function update(Request $request,$id)
    {
        $productData = $request->all(); 
        if($request->hasfile('img')){
            $file = $request ->file('img');
            $path = $this->fileUpload($file,'product');
            $productData['img']=$path;
        }

        Product::find($id)->update($productData);

        // Product::find($id)->update($request->all());
        return redirect('/home');
    }

    public function delete($id)
    {
        Product::find($id)->delete();


        return redirect('/home');
    }


    private function fileUpload($file,$dir){
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if( ! is_dir('upload/')){
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if ( ! is_dir('upload/'.$dir)) {
            mkdir('upload/'.$dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/'.$dir.'/'.$filename;
    }
}
