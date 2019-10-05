<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    public function index(){
        
        $artikel=artikel::all(); 

        return view ('artikel.index',compact('artikel'));
        //return view ('artikel.index'->with('data',$artikel);
    }

    public function show($id) {

        //$artikel=artikel::where('id',$id)->first();
        $artikel=artikel::find($id);

        return view ('artikel.show', compact('artikel'));
        
    }

    public function create(){

        $KategoriArtikel=KategoriArtikel::pluck('nama','id');
        
        return view('artikel.create', compact('KategoriArtikel'));
    }

    public function store(Request $request){

        $input= $request->all();

        Artikel::create($input);

        return redirect(route('artikel.index'));
    }
}