<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function tampil(){

        $data = Category::all();

        // dd($data);

        return view('category.index', compact('data'));
    }

    public function tambah(){
        return view ('category.create');
    }

    public function simpan(Request $request){

        $request->validate([

            'name' => 'required|min:5'

        ]);
        Category::create($request->all());
        return to_route('category-index');
    }

    public function delete($id){
        Category::find($id)->delete();
        return to_route('category-index');
    }

    public function edit($id){
        $data = Category::find($id);
        return view('category.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required'
        ]);

        Category::find($id)->update($request->all());
        return to_route('category-index');
    }
}
