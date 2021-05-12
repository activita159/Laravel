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
        // $productData = $request->all();
        // if($request->hasfile('img')){


        //     // Storage::disk('myfile')->putfile('product', $file);


        //     // $file = $request ->file('img');
        //     // $path = $this->fileUpload($file,'product');
        //     // $productData['img']=$path;
        // }


        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'content'=>$request->content,
            'img'=>$request->img
        ]);

        return redirect('/home');
    }

    public function edit($id)
    {
        $productsData = Product::find($id);
        return view('admin.products.edit',compact('productsData'));
    }

    public function update(Request $request,$id)
    {

        Product::find($id)->update($request->except(['_token']));
        return redirect('/home');
    }

    public function delete($id)
    {
        Product::find($id)->delete();


        return redirect('/home');
    }
}
