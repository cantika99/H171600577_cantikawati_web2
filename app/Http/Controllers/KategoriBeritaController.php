<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    function index(){
    	$KategoriBerita=KategoriBerita::all();
    return view('Kategori_Berita.index',compact('KategoriBerita'));
    }
}