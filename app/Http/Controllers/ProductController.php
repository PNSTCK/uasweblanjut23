<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function tampil(){

        $data = Product::with('category')->get();

        // dd($data);

        return view('product.index', compact('data'));
    }

    public function tambah(){

        $data_category = Category::all();
        return view ('product.create', compact('data_category'));
    }

    public function simpan(Request $request){

        $request->validate([

            'name' => 'required|min:5',
            'descrition' => 'required|min:5',
            'price' => 'required|min:5',
            'category_id' => 'required|min:5',

        ]);
        Product::create($request->all());
        return to_route('mid-index');
    }

    public function delete($id){
        Product::find($id)->delete();
        return to_route('product-index');
    }

    public function edit($id){
        $data = Product::find($id);
        return view('product.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|min:5',
            'descrition' => 'required|min:5',
            'price' => 'required|min:5',
            'category_id' => 'required|min:5',
        ]);

        Product::find($id)->update($request->all());
        return to_route('product-index');
    }
}
