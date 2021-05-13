<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TypeController extends Controller
{
    public function index()
    {
        $typesData = Type::get();
        return view('admin.products.type.home', compact('typesData'));
    }


    public function create()
    {
        return view('admin.products.type.create');
    }

    public function store(Request $request)
    {
        $typesData = $request->all();
        Type::create($typesData);
        return Redirect ('/admin_type');
    }


}
