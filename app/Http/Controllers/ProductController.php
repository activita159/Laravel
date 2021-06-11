<?php

namespace App\Http\Controllers;

use App\Type;
use App\Product;
use App\Productimg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function index()
    {
        $productsData = Product::all();
        // dd($productsData);
        return view('front.products.index', compact('productsData'));
    }

    public function details($id)
    {
        $productsData = Product::find($id);
        return view('front.products.details', compact('productsData'));
    }

    public function create()
    {
        $productTypes = Type::get();

        return view('admin.products.create', compact('productTypes'));
    }

    public function store(Request $request)
    {

        $productData = $request->all();
        if ($request->hasfile('img')) {
            $file = $request->file('img');
            $path = $this->fileUpload($file, 'product');
            $productData['img'] = $path;
        }

        $product = Product::create($productData);


        //其他圖片上傳     
        foreach ($request->imgs as $img) {
            //存檔並取得路徑
            $path = $this->fileUpload($img, 'product');
            //存到資料庫
            Productimg::create([
                'product_id' => $product->id,
                'img' => $path
            ]);
        }

        return redirect('admin');
    }

    public function edit($id)
    {
        $productsData = Product::with('images')->find($id);
        return view('admin.products.edit', compact('productsData'));
    }

    public function update(Request $request, $id)
    {
        //從資料庫找到資料
        $product = Product::find($id);

        //取出表單所有內容
        $requestData = $request->all();
        if ($request->hasFile('img')) {
            //刪除舊圖片
            File::delete(public_path() . $product->img);

            //取得新檔案
            $file = $request->file('img');

            //上傳新檔案取得儲存路徑
            $path = $this->fileUpload($file, 'product');

            //更新資料
            $requestData['img'] = $path;
        }
        //更新資料庫
        $product->update($requestData);

        //其他圖片上傳
        if ($request->imgs != null) {
            foreach ($request->imgs as $img) {
                //存檔並取得路徑
                $path = $this->fileUpload($img, 'product');
                //存到資料庫
                Productimg::create([
                    'product_id' => $product->id,
                    'img' => $path
                ]);
            }
        }

        return redirect('/admin');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        File::delete(public_path() . $product->img);
        $product->delete();
        return redirect('admin');
    }

    public function delete_img(Request $request)
    {
        $img = Productimg::find($request->id);
        File::delete(public_path() . $img->img);
        $img->delete();
        return 'success';
    }


    private function fileUpload($file, $dir)
    {
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/')) {
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/' . $dir)) {
            mkdir('upload/' . $dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time() . md5(rand(100, 200))) . '.' . $extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path() . '/upload/' . $dir . '/' . $filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/' . $dir . '/' . $filename;
    }
}
