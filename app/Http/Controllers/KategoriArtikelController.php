<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    function index(){
    	$KategoriArtikel=KategoriArtikel::all();
    return view('Kategori_Artikel.index',compact('KategoriArtikel'));
    }
}