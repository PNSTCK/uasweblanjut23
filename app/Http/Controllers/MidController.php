<?php

namespace App\Http\Controllers;

use App\Models\Mid;
use Illuminate\Http\Request;

class MidController extends Controller
{
    public function tampil(){

        $data = Mid::all();

        // dd($data);

        return view('mid.index', compact('data'));
    }

    public function tambah(){
        return view ('mid.create');
    }

    public function simpan(Request $request){

        $request->validate([

            'judul_ujian' => 'required|min:5',
            'isi_ujian' => 'required|min:5',
            'penulis_soal' => 'required|min:5',
            'keterangan' => 'required|min:5',
            'tahun_ujian' => 'required|min:4',

        ]);
        Mid::create($request->all());
        return to_route('mid-index');
    }

    public function delete($id){
        Mid::find($id)->delete();
        return to_route('mid-index');
    }

    public function edit($id){
        $data = Mid::find($id);
        return view('mid.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul_ujian' => 'required|min:5',
            'isi_ujian' => 'required|min:5',
            'penulis_soal' => 'required|min:5',
            'keterangan' => 'required|min:5',
            'tahun_ujian' => 'required|min:4',
        ]);

        Mid::find($id)->update($request->all());
        return to_route('mid-index');
    }
}
